<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Categorie;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class DashbroadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["count_users"] = User::count();
        $data["count_posts"] = Post::count();
        $data["count_comments"] = Categorie::count();
        $data["count_categories"] = Comment::count();
        return view('backend.dashbroad', $data);
    }
    public function showprofile(){
        $prf=User::find(Auth::id());
        return view('backend.profile', compact('prf'));
    }

}
