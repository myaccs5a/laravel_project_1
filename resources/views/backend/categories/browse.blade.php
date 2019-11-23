@extends('backend/layouts')
@section('backend/layouts/content')
<div class="content">
  <a href="{{route('categories.create')}}" class="btn btn_success">Create</a>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            @if(empty($categories))
            <p>no data</p>
            @else
            <table class="table table-striped">
              <thead class="text-primary">
                <th>Id</th>
                <th>User_id</th>
                <th>name</th>
              </thead>
              <tbody>
                @foreach($categories as $k => $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->user_id}}</td>
                  <td>{{$item->name}}</td>
                  <td><a href="{{route('categories.edit',$item->id)}}" class="btn btn-primary">Update</a></td>
                  <td>
                    <form action="{{route('categories.destroy',$item->id)}}" method="post">
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