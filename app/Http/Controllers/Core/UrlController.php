<?php

namespace App\Http\Controllers\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UrlController extends Controller
{
    public function __invoke($v,$url)
    {
            /** decrypting function v1 */
        if($v=='v1'){
        $b = explode('/',decrypt($url));
            //return view('space.verification.in_progress');
            return view('space.verification.documents', compact('v','b'));
        }
        else{
            return view('space.verification.not_supported',compact('v'));
        }
    }
}
