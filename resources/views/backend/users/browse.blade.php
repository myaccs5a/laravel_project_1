@extends('backend/layouts')
@section('backend/layouts/content')
<div class="content">
  <a href="{{route('users.create')}}" class="btn btn_success">Create</a>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            @if(empty($user))
            <p>no data</p>
            @else
            <table class="table table-striped">
              <thead class="text-primary">
                <th>Id</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Role</th>
                <th>Is_active</th>
                <th>Categorie</th>
                <th>Post</th>
                <th>Comment</th>
              </thead>
              <tbody>
                @foreach($user as $k => $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->birthday}}</td>
                  <td>{{$item->phone}}</td>
                  <td>{{$item->email}}</td>
                  <td>{{$item->role}}</td>
                  <td>{{$item->is_active}}</td>
                  <td>{{count($item['categories'])}}</td>
                  <td>{{count($item['posts'])}}</td>
                  <td>{{count($item['comments'])}}</td>
                  <td><a href="{{route('users.edit',$item->id)}}" class="btn btn-primary">Update</a></td>
                  <td>
                    <form action="{{route('users.destroy',$item->id)}}" method="post">
                      @csrf
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection