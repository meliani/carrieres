<?php

namespace App\Http\Controllers\Core\Documents;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

use Carbon\Carbon;
class UploaderController extends Controller
{
    public $upload_path;
    /**
     * Store a newly created resource in storage.
     * Example of use : $upload= new Uploader($request,[
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
    public function __construct($request,$parameters)
    {  
        $var_name = $parameters['var_name'];
        $path = $parameters['upload_path'];
        if($request->hasFile($var_name))
        {
            $file = $request->file($var_name);            
            if ($file->isValid())
            {
                $path = $file->storeAs($path,Carbon::now()->format('ymd_hi') .'-'. $file->getClientOriginalName(),'public');      
                //$path = Storage::disk('uploads')->put('', $doc);
                //dd($path);
                $this->upload_path= 'storage/'.$path;
                $request->$var_name = 'storage/'.$path;
            }elseif($file->getError()!='UPLOADERROK')
            flash()->error($file->getErrorMessage());
            Session::flash('message', 'error uploading files, '.$file->getErrorMessage()); 
            Session::flash('alert-class', 'error');
            return back();
        }
        return $this->upload_path;
 
    }
    public static function upload(){

    }
}