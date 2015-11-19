<?php

namespace App;

use App\Lib\Geo;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'contact_name', 'email', 'telephone', 'fax', 'notes', 'raw_address'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function clientType()
    {
        return $this->belongsTo('App\ClientType');
    }

    /**
     * Set raw address mutator: save raw address, try to geolocate it and save the returned formatted address data
     *
     * @param  string  $value
     * @return string
     */
    public function setRawAddressAttribute($value)
    {
        $this->attributes['raw_address'] = $value;

        if($data = Geo::geocodeAddress($value))
            foreach($data as $key => $val)
                $this->attributes[$key] = $val;
    }
}
