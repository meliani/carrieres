<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */
    'links' => [
        public_path('storage') => storage_path('app/public'),
        //public_path('images') => storage_path('app/images'),
        public_path('internOffers_attachments') => storage_path('app/public/uploads/internships/offers/submited_files'),
    ],
    'disks' => [
        'interOffersDocs' => [
            'driver' => 'local',
            'root' => storage_path('app/public/uploads/internships/offers/submited_files'),
            'url' => env('APP_URL').'/internOffers_attachments',
            'visibility' => 'public',
            'throw' => true,
        ],

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => true,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => true,
        ],

        'uploads' => [
            'driver' => 'local',
            'root' => storage_path('app/public/uploads'),
            'url' => env('APP_URL').'/storage/uploads',
            'visibility' => 'public',
            'throw' => true,
        ],

        'userfiles' => [
            'driver' => 'local',
            'root' => storage_path('app/public/userfiles'),
            'url' => env('APP_URL').'/storage/userfiles',
            'visibility' => 'public',
            'throw' => true,
        ],
        'internship_reports' => [
            'driver' => 'local',
            'root' => storage_path('app/public/userfiles/internships/reports'),
            'url' => env('APP_URL').'/storage/userfiles/internships/reports',
            'visibility' => 'public',
            'throw' => true,
        ],
        'internship_agreements' => [
            'driver' => 'local',
            'root' => storage_path('app/public/userfiles/internships/agreements'),
            'url' => env('APP_URL').'/storage/userfiles/internships/agreements',
            'visibility' => 'public',
            'throw' => true,
        ],
        'internship_certificates' => [
            'driver' => 'local',
            'root' => storage_path('app/public/userfiles/internships/certificates'),
            'url' => env('APP_URL').'/storage/userfiles/internships/certificates',
            'visibility' => 'public',
            'throw' => true,
        ],
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'throw' => true,
        ],

    ],

];
