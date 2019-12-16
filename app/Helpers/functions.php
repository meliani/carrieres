<?php

use App\Http\Controllers\Core\Documents\UploaderController as Uploader;
use App\Year;

if (!function_exists('app_name')) {
    function app_name()
    {
        return config('app.name');
    }
}

if (! function_exists('user'))
{
    function user($parameter = null)
    {
        if(!\Auth::check()) {
            return null;
        }
        if($parameter) {
            return \Auth::user()->$parameter;
        }
        return \Auth::user();
    }
}


/**
 * Store a newly created resource in storage.
 * Example of use : upload($request,[
 * 'var_name' =>'cv',
 * 'upload_path' => 'uploads/students/CVs'
 * ]);
 * 
 * @param  \Illuminate\Http\Request  $request
 * $request : request var
 * @param  Array  $parameters
 * var_name : form file variable name
 * upload_path : where to store files
 * 
 * @return \Illuminate\Http\Response
 */
if (! function_exists('upload'))
{

    function upload($request,$parameters)
    {
        return new Uploader($request,[
            'var_name' =>$parameters['var_name'],
            'upload_path' => $parameters['upload_path']
            ]);
    }
}
if (! function_exists('this_year'))
{

    function this_year()
    {
        return Year::all()->last();
    }
}
if (! function_exists('advising_type'))
{

    function advising_type($type)
    {

        switch ($type) {

            case 11:
                return 'encadrant 1';
            case 12:
                return 'encadrant 2';
            case 21:
                return 'examinateur 1';
            case 22:
                return 'examinateur 2';
            case 23:
                return 'examinateur 3';
                break;
        }
    }
}