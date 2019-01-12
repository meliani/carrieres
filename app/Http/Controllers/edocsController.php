<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Auth;
use Session;

class edocsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth']);    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
       /* $posts = Post::orderby('id', 'desc')->paginate(5);
        return view('posts.index', compact('posts'));*/
        return view('edocs.index');
    }

}
