@extends('backend/layouts')
@section('backend/layouts/content')

<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{route('users.update')}}" method="post">
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
                <div class="form-group">
                    <label>Name:</label>
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>

                <div>
                    <label>Birthday</label>
                    <input type="date" name="birthday" class="form-control" value="{{$user->birthday}}">
                </div>
                <div>
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                </div>
                <div>
                    <label>email</label>
                    <input type="text" name="email" class="form-control" value="{{$user->email}}">
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div>
                    <label>Role</label>
                    <select name="role" class="form-control">
                        <option value="{{config('role.user')}}" selected>user</option>
                        <option value="{{config('role.admin')}}">admin</option>
                    </select>
                </div>
                <div>
                    <label>Is_active</label>
                    <select name="is_active" class="form-control">
                        <option disabled selected value> -- select an satus -- </option>
                        <option value="0" selected>Active</option>
                        <option value="1">Deactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-danger form-control ">submit</button>
            </form>
        </div>
    </div>
</div>
@endsection