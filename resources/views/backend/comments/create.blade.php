@extends('backend/layouts')
@section('backend/layouts/content')

<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{route('comments.store')}}" method="post">
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
                    <label>Post</label>
                    <select name="post_id" class="form-control">
                        <option disabled selected value>-- select an post --</option>
                        @foreach($post as $k =>$posts)
                        <option value="{{$posts->id}}">{{$posts->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label>Cotent</label>
                    <textarea name="content" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <label>Status</label>
                    <select name="is_active" class="form-control">
                        <option disabled selected value> -- select an post -- </option>
                        <option value="0">Active</option>
                        <option value="1">Deactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger form-control ">submit</button>
            </form>
        </div>
    </div>
</div>
@endsection