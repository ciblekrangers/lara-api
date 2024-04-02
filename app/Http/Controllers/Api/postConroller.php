<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\postResource;

class postConroller extends Controller
{
    //
    public function index()
    {
        $post = Post::latest()->pagination(5);
        return new postResource(true, 'List Data Post', $post);
    }
}
