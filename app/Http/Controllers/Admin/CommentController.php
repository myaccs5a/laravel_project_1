<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CommentRequest;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['cmt'] = Comment::all()->load('posts','users');
        return view('backend.comments.browse',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['post'] = Post::all()->load('users');

        return view('backend.comments.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        Comment::create([
            'post_id'=>$request->post_id,
            'content'=>$request->content,
            'user_id'=>Auth::user()->id,
            'is_active'=>$request->post_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),  
        ]);
        return redirect('home/comments')
;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['post'] = Post::all()->load('users');
        $data['data']=Comment::find($id);
        return view('backend.comments.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $updata=Comment::find($request->id);
        $data=([
            'post_id'=>$request->post_id,
            'content'=>$request->content,
            'user_id'=>$request->user_id,
            'is_active'=>$request->is_active,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),  
        ]);
        $updata->update($data);
        return redirect('home/comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comment::destroy($id);
        return redirect('home/comments');
    }
}
