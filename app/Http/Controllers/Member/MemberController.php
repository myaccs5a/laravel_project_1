<?php

namespace App\Http\Controllers\Member;

use App\Models\User;
use App\Models\Post;
use App\Models\Categorie;
use App\Models\Comment;
use App\Http\Requests\Member\UpProfileRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    protected function index()
    {
        $data['prf'] = User::find(Auth::id());
        $data['cmt'] = Comment::all()->where('user_id', '=', Auth::id())->count();
        $posts = Post::all()->load('users');

        return view('member.view', $data);
    }
    protected function upprofile(UpProfileRequest $request)
    {

        $update = User::find($request->id);

        $data = ([
            'name' => $request->name,
            'birthday' => $request->birthday,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => Auth::user()->role,
            'is_active' => Auth::user()->is_active,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        $update->update($data);
        return redirect()->route('member.index');
    }
    protected function showPost()

    {
        $posts = Post::all()->load('users');
        $posts_by_user = $posts->where('user_id', '=', Auth::id())->all();
        $categories = Categorie::all();
        return view('member.show', [
            'posts' => $posts->toArray(),
            'categories' => $categories->toArray(),
        ]);
        //     $data['posts_by'] = $posts->where('user_id', '=', Auth::id())->all();
    }
    protected function showDetail($id)
    {
        $posts = Post::all()->load('users');
        $posts_by_id = Post::find($id);
        $categories = Categorie::all();
        $posts_by_user = $posts->where('user_id', '=', Auth::id())->all();
        $comments = Comment::all()->where('post_id', '=', $id)->all();


        return view('member.showDetail', [
            'categories' => $categories->toArray(),
            'posts' => $posts->toArray(),
            'posts_by_user' => $posts_by_user,
            'posts_by_id' => $posts_by_id->toArray(),
            'comments' => $comments,
        ]);
    }
}
