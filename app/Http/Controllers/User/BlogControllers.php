<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogControllers extends Controller
{
    public function audio()
    {
     return view('user.blog.audio');
    }


    public function blog()
    {
     return view('user.blog.blog');
    }


    public function bloggrid()
    {
     return view('user.blog.bloggrid');
    }


    public function contact()
    {
     return view('user.blog.contact');
    }


    public function details()
    {
     return view('user.blog.details');
    }


    public function gallery()
    {
     return view('user.blog.gallery');
    }


    public function quote()
    {
     return view('user.blog.quote');
    }


    public function video()
    {
     return view('user.blog.video');
    }

}
