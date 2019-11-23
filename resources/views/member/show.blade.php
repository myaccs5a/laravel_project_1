@extends('member/layouts')
@section('member/layouts/content')
<div class="content">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-12">
            <div class="card">

                <div class="col-md-12">

                    <div class="col-md-12">
                        <div class="blog-content-body">
                            <div class="post-meta">
                                <span class="author mr-2">By {{$post['users']['name']}}</span>&bullet;
                                At <span>{{ $post['created_at'] }}</span> &bullet;
                            </div>
                            <h2><a href="{{route('showDetail', $post['id'])}}">{{ $post['title'] }}</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection