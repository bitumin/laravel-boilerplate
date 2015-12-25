<?php
//    Example 1:
//    ----------
//    $pdf = App::make('dompdf.wrapper');                 //passing a view (without the facade)
//    $pdf->loadHTML('<h1>Test</h1>');                    //passing html code
//    return $pdf->stream();                              //PDF to stream (browser) example
//
//    Example 2:
//    ----------
//    $pdf = PDF::loadView('pdf.invoice', $data);         //passing a view and data into it (with the facade)
//    return $pdf->download('invoice.pdf');               //PDF to file (download) example:
//
//    Example 3:
//    ----------
//    return PDF::loadFile(public_path().'/myfile.html')  //passing a file
//      ->save('/path-to/my_stored_file.pdf')             //PDF to file (store as file)
//      ->stream('download.pdf');
//
//    Example 4:
//    ----------
//    PDF::loadHTML($html)                                //passing an html file
//        ->setPaper('a4')                                //set paper size
//        ->setOrientation('landscape')                   //set page orientation
//        ->setWarnings(false)                            //disable warnings
//        ->save('myfile.pdf')
//
//    How to make a page break for the pdf
//    ------------------------------------
//    <style>
//        .page-break {
//                page-break-after: always;
//        }
//    </style>
//    <div class="page-break"></div>