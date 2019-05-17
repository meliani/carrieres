<?php

namespace App\Http\Controllers\Core\Documents;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

use Carbon\Carbon;
class UploaderController extends Controller
{
    public $upload_path;
    
    public function __construct($request,$var_name,$path)
    {  
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
            Flash::error($file->getErrorMessage());
            Session::flash('message', 'error uploading files'); 
            Session::flash('alert-class', 'error');
            return back();
        }
        return $this->upload_path;
 
    }
    public static function upload(){

    }
}