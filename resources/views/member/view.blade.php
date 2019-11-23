@extends('member/layouts')
@section('member/layouts/content')
<div class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="admin/assets/img/header.jpg" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="admin/assets/img/avatar.jpg" alt="...">
                            @if(Auth::check())
                            <h5 class="title">{{Auth::user()->name}}</h5>
                            @else()
                            <a class="dropdown-item" href="#">
                                Unauthenticated
                            </a>
                            @endif

                        </a>
                        <p class="description">

                        </p>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-6 ml-auto mr-auto">
                                <h5>{{$cmt}}
                                    <br>
                                    <small>Comment</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('update.profile')}}" method="post">
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
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Username </label>
                                    <input type="hidden" name="id" value="{{$prf->id}}">
                                    <input type="text" class="form-control" placeholder="{{$prf->name}}" name="name">
                                </div>
                            </div>
                            <div class="col-md-6 px-3">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" placeholder="{{$prf->phone}}" name="phone">
                                </div>
                            </div>
                            <div class="col-md-12 pl-3">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="{{$prf->email}}" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <input type="date" class="form-control" name="birthday">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection