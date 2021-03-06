<?php

namespace App\Lib;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class Geo
{
    protected static $GMapsProviderURL = 'http://maps.google.es';

    /**
     * Function to geocode a given address using Google Maps.
     * Returns false if geocoding was not possible,
     * otherwise it returns an array of values with the following keys:
     * lat                          : Latitude
     * long                         : Longitude
     * formatted_address            : Full address
     * street_number                : Street number
     * route                        : Street name
     * locality                     : Locality/city name
     * administrative_area_level_2  : Region
     * administrative_area_level_1  : Region
     * country                      : Country name
     * postal_code                  : Postal code
     *
     * @param string $address
     * @return array|bool
     */
    public static function geocodeAddress($address)
    {
        try {
            $address = urlencode($address);
            $url = self::$GMapsProviderURL."/maps/api/geocode/json?sensor=false&address={$address}";
            $resp_json = file_get_contents($url);
            $resp = json_decode($resp_json, true);
            if($resp['status'] != 'OK')
                return false;
            $location = [];
            $location['lat'] = $resp['results'][0]['geometry']['location']['lat'];
            $location['lng'] = $resp['results'][0]['geometry']['location']['lng'];
            $location['formatted_address'] = $resp['results'][0]['formatted_address'];
            foreach ($resp['results'][0]['address_components'] as $component) {
                switch ($component['types']) {
                    case in_array('street_number', $component['types']):
                        $location['street_number'] = $component['long_name'];
                        break;
                    case in_array('route', $component['types']):
                        $location['route'] = $component['long_name'];
                        break;
                    case in_array('locality', $component['types']):
                        $location['locality'] = $component['long_name'];
                        break;
                    case in_array('administrative_area_level_2', $component['types']):
                        $location['administrative_area_level_2'] = $component['long_name'];
                        break;
                    case in_array('administrative_area_level_1', $component['types']):
                        $location['administrative_area_level_1'] = $component['long_name'];
                        break;
                    case in_array('country', $component['types']):
                        $location['country'] = $component['long_name'];
                        break;
                    case in_array('postal_code', $component['types']):
                        $location['postal_code'] = $component['long_name'];
                        break;
                }
            }
            if(count(array_filter($location)))
                return $location;
            return false;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Function to provide randomly geolocated addresses in Catalonia.
     * Useful for seeding databases or provide fake search results, for example!
     *
     * @return array
     */
    public static function getRandomCatAddress()
    {
        $location = [];
        //$address = '';
        $catStreets = [
            'Major','Catalunya','Doctor','Pau Casals','Jacint Verdaguer'
        ];
        $catTowns = [
            'Barcelona','Hospitalet de Llobregat','Badalona','Tarrasa','Sabadell',
            'Lérida','Tarragona','Mataró','Santa Coloma de Gramanet','Reus','Gerona',
            'Cornellá de Llobregat','San Cugat del Vallés','San Baudilio de Llobregat',
            'Manresa','Rubí','Villanueva y Geltrú','Viladecans','El Prat de Llobregat',
            'Castelldefels','Granollers','Sardañola del Vallés','Mollet del Vallés',
            'Esplugas de Llobregat','Gavá','Figueras','San Felíu de Llobregat','Vich',
            'Lloret de Mar','Blanes','Igualada','Villafranca del Panadés','Ripollet',
            'Vendrell','Tortosa','Moncada y Reixach','San Adrián de Besós','Olot',
            'Cambrils','San Juan Despí','Barberá del Vallés','Salt','San Pedro de Ribas',
            'Sitges','Premiá de Mar','San Vicente dels Horts','Martorell','San Andrés de la Barca',
            'Salou','Pineda de Mar','Santa Perpetua de Moguda','Valls','Molins de Rey','Calafell',
            'Olesa de Montserrat','Castellar del Vallés','Palafrugell','El Masnou','Vilaseca',
            'San Felíu de Guixols','Esparraguera','Amposta','Manlleu'
        ];
        while(!$location || count(array_filter($location))<8) { //we get sure enough information is provided before returning the value
            $address = $catStreets[array_rand($catStreets)].', '.mt_rand(1,50).', '.$catTowns[array_rand($catTowns)].', España';
            $location = self::geocodeAddress($address);
        }
        //$location['raw'] = $address;
        return $location;
    }

    /**
     * Filter and return locations from a collection, within the desired distance.
     *
     * @param $lat
     * @param $lng
     * @param Collection $locations
     * @param int $minDistance
     * @param int $maxDistance
     * @return Collection
     */
    public static function filterCollectionByDistance($lat,$lng,Collection $locations,$minDistance = 0,$maxDistance = 1000)
    {
        $R = 6371.01; //average earth radius (km)
        $r = $maxDistance/$R; //geo-radian unit for the given distance
        $latr = deg2rad($lat); //latitude of the origen in radians
        $lonr = deg2rad($lng); //longitude of the origin in radians
        $min_lat = rad2deg($latr-$r); //minimum latitude of the square search area
        $max_lat = rad2deg($latr+$r); //maximum latitude of the square search area
        $delta_lon = asin(sin($r)/cos($latr)); //longitude increment
        $min_lon = rad2deg($lonr-$delta_lon); //minimum longitude of the square search area
        $max_lon = rad2deg($lonr+$delta_lon); //maximum longitude of the square search area

        //filter results that lie outside the square search area: it removes all the results which can not possibly
        //be within the desired distance, before applying a more accurate (and resource consuming) filter.
        $locations = $locations->filter(function($loc) use ($min_lat,$max_lat,$min_lon,$max_lon) {
            if ($loc->lat >= $min_lat && $loc->lat <= $max_lat && $loc->lon >= $min_lon && $loc->lon <= $max_lon)
                return true;
            return false;
        });

        //filter results by checking the geo-distance from the origin of each element that remains in the collection
        if (!$locations->isEmpty()) {
            $locations = $locations->filter(function($loc) use ($R,$latr,$lonr,$minDistance,$maxDistance) {
                $distance = $R*acos(sin($latr)*sin(deg2rad($loc->lat))+cos($latr)*cos(deg2rad($loc->lat))*cos(deg2rad($loc->lon)-$lonr));
                if ($distance >= $minDistance && $distance <= $maxDistance) {
                    $dist_to_user = (ceil($distance) < 1) ? 1 : ceil($distance);
                    $loc->dist_to_user = (int) $dist_to_user;
                    return true;
                }
                return false;
            });
        }

        return $locations;
    }

    /**
     * Filter and return rows from a table, within the desired distance.
     * 
     * @param float $lat
     * @param float $lng
     * @param string $table
     * @param int $minDistance
     * @param int $maxDistance
     * @param int $maxResults
     * @param string $order
     * @return mixed
     */
    public static function filterRowsByDistance($lat, $lng, $table, $minDistance = 0,$maxDistance = 1000, $maxResults = 999,$order='ASC')
    {
        $R = 6371.01; //earth radius (km)
        $r = $maxDistance/$R; //geo-radian unit for the given distance
        $latr = deg2rad($lat); //latitude of the origen in radians
        $lonr = deg2rad($lng); //longitude of the origin in radians
        $min_lat = rad2deg($latr-$r); //minimum latitude of the square search area
        $max_lat = rad2deg($latr+$r); //maximum latitude of the square search area
        $delta_lon = asin(sin($r)/cos($latr)); //longitude increment
        $min_lon = rad2deg($lonr-$delta_lon); //minimum longitude of the square search area
        $max_lon = rad2deg($lonr+$delta_lon); //maximum longitude of the square search area

        $selectDistance = "({$R}*ACOS(SIN({$latr})*SIN(RADIANS(lat))+COS({$latr})*COS(RADIANS(lat))*COS(RADIANS(lng)-{$lonr}))) AS distance";

        $results = DB::table($table)
            ->select(DB::raw($table.'.*, '.$selectDistance))
            ->where('lat','>=',$min_lat)
            ->where('lat','<=',$max_lat)
            ->where('lng','>=',$min_lon)
            ->where('lng','<=',$max_lon)
            ->having('distance','>=',$minDistance)
            ->having('distance','<=',$maxDistance)
            ->orderBy('distance',$order)
            ->take($maxResults)
            ->get();

        return $results;
    }

    /**
     * Encode a circle over a map (over the Earth surface)
     *
     * @param $lat
     * @param $lng
     * @param $radius
     * @param int $detail
     * @return mixed
     */
    private static function encodeCircleOverMap($lat, $lng, $radius, $detail = 8)
    {
        $R = 6371;
        $pi = pi();
        $lat = ($lat*$pi)/180;
        $lng = ($lng*$pi)/180;
        $d = $radius/$R;
        $points = array();
        for($i = 0; $i <= 360; $i+=$detail) {
            $brng = $i * $pi / 180;
            $pLat = asin(sin($lat)*cos($d) + cos($lat)*sin($d)*cos($brng));
            $pLng = (($lng + atan2(sin($brng)*sin($d)*cos($lat), cos($d)-sin($lat)*sin($pLat))) * 180) / $pi;
            $pLat = ($pLat * 180) /$pi;
            $points[] = array($pLat,$pLng);
        }
        $PolyEnc = new PolylineEncoder($points);
        $EncString = $PolyEnc->dpEncode();

        return $EncString['Points'];
    }

    /**
     * Returns the URL and dimensions of a google maps static image
     *
     * @param array $params
     * @return array
     */
    public static function getGoogleMapsStaticImageURL($params = array())
    {
        $staticImg = array();

        //defaults
        $staticImg['width'] = 640;                      //image width (640px max)
        $staticImg['height'] = 400;                     //image height (400px max)
        $staticImg['lat'] = 42.5451;                    //center lat co-ordinate
        $staticImg['lng'] = 1.1242;                     //center long co-ordinate
        $staticImg['zoom'] = 7;                         //map zoom (1,12)
        $staticImg['addMarker'] = false;             //customize center marker?
        $staticImg['markerURL'] = '';
        $staticImg['addCircle'] = false;                //add circle?
        $staticImg['radius'] = 25;                      //circle radius (km)
        $staticImg['circleFillColor'] = 'd20500';
        $staticImg['circleBorderColor'] = 'd20500';
        $staticImg['customLandscape'] = false;          //customize land color?
        $staticImg['landSaturation'] = 0;               //land color saturation (-100,100)
        $staticImg['landInvertLightness'] = false;      //land color lightness inverted
        $staticImg['customWater'] = false;              //customize water color?
        $staticImg['waterSaturation'] = 0;              //water color saturation (-100,100)
        $staticImg['waterInvertLightness'] = false;     //water color lightness inverted
        $staticImg['showRoads'] = true;                 //roads visibility
        $staticImg['showLabels'] = true;                //labels, names visibility
        $staticImg['showStroke'] = true;                //frontiers visibility

        //override defaults
        foreach ($params as $key => $value)
            if (isset($staticImg[$key]))
                $staticImg[$key] = $value;

        $MapAPI = self::$GMapsProviderURL.'/maps/api/staticmap?';
        $imgURL = $MapAPI . 'center=' . $staticImg['lat'] . ',' . $staticImg['lng'] .
            '&zoom=' . $staticImg['zoom'] .
            '&size=' . $staticImg['width'] . 'x' . $staticImg['height'];
        if($staticImg['addMarker'])
            $imgURL .= '&markers=icon:' . $staticImg['markerURL'] . '|' . $staticImg['lat'] . ',' . $staticImg['lng'];
        if($staticImg['addCircle']) {
            $EncString = self::encodeCircleOverMap($staticImg['lat'], $staticImg['lng'], $staticImg['radius']);
            $imgURL .= '&path=fillcolor:0x' . $staticImg['circleFillColor'] .
                '33%7Ccolor:0x' . $staticImg['circleBorderColor'] .
                '00%7Cenc:' . $EncString;
        }
        if($staticImg['customLandscape']) {
            $imgURL .= '&style=feature:landscape|saturation:' . $staticImg['landSaturation'];
            if($staticImg['landInvertLightness'])
                $imgURL .= '|invert_lightness:true';
        }
        if($staticImg['customWater']) {
            $imgURL .= '&style=feature:water|saturation:'.$staticImg['waterSaturation'];
            if($staticImg['waterInvertLightness'])
                $imgURL .= '|invert_lightness:true';
        }
        if(!$staticImg['showRoads'])
            $imgURL .= '&style=feature:road|visibility:off';
        if(!$staticImg['showLabels'])
            $imgURL .= '&style=element:labels|visibility:off';
        if(!$staticImg['showStroke'])
            $imgURL .= '&style=element:geometry.stroke|visibility:off';
        $imgURL .= '&sensor=false';

        return [
            'url'       => $imgURL,
            'width'     => $staticImg['width'],
            'height'    => $staticImg['height']
        ];
    }

}
