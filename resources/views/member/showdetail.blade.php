@extends('member/layouts')
@section('member/layouts/content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!-- code test -->
                <span class="mr-2">{{$posts_by_id['created_at'] }}</span>
                <h2>{{$posts_by_id['title']}}</h2>
                <p>{{$posts_by_id['content']}}</p>
                <h3 class="mb-5">{{count($comments)}} Comments</h3>

                @foreach($comments as $comment)
                <div class=" btn-primary">
                    <p>{{$comment['created_at']}}</p>
                    <p>{{$comment['users']['name']}}</p>
                    <textarea class="form-control" cols="3" rows="5">>{{$comment['content']}}</textarea
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@endsection