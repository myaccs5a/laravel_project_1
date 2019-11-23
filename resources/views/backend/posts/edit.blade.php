@extends('backend/layouts')
@section('backend/layouts/content')

<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{route('posts.store')}}" method="post">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div>
                    <label>Title:</label>
                    <input type="hidden" name="id" value="{{$post->id}}">
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div>
                    <label>Content:</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
                </div>
                <div>
                    <label>Category:</label>
                    <select name="category_id" class="form-control">
                        <option disabled selected value></option>
                        @foreach($cate as $k =>$cate)
                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-danger form-control ">submit</button>
            </form>
        </div>
    </div>
</div>
@endsection