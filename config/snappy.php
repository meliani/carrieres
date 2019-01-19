<?php

return array(


    'pdf' => array(
        'enabled' => true,
        'binary'  => env('SNAPPY_PDF_BINARY','wkhtmltopdf'),
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary'  => env('SNAPPY_IMAGE_BINARY','wkhtmltoimage'),
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),

// binary ='/usr/local/bin/wkhtmltopdf'
);


