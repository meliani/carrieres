<?php
    use App\Http\Controllers\Core\Documents\UploaderController as Uploader;

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