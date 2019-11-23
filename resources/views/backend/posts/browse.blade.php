@extends('backend/layouts')
@section('backend/layouts/content')
<div class="content">
  <a href="{{route('posts.create')}}" class="btn btn_success">Create</a>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            @if(empty($posts))
            <p>no data</p>
            @else
            <table class="table table-striped">
              <thead class="text-primary">
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th>Category_id</th>
                <th>User_id</th>
                <th>Craete by</th>
                <th>Count Comment</th>
              </thead>
              <tbody>
                @foreach($posts as $k => $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->title}}</td>
                  <td>{{$item->content}}</td>
                  <td>{{$item->categories['name']}}</td>
                  <td>{{$item->user_id}}</td>
                  <td>{{$item->users['name']}}</td>
                  <td>{{count($item['comments'])}}</td>
                  <td><a href="{{route('posts.edit',$item->id)}}" class="btn btn-primary">Update</a></td>
                  <td>
                    <form action="{{route('posts.destroy',$item->id)}}" method="post">
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