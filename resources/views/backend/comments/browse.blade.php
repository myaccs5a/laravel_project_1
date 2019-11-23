@extends('backend/layouts')
@section('backend/layouts/content')
<div class="content">
  <a href="{{route('comments.create')}}" class="btn btn_success">Create</a>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            @if(empty($cmt))
            <p>no data</p>
            @else
            <table class="table table-striped">
              <thead class="text-primary">
                <th>Id</th>
                <th>Post</th>
                <th>content</th>
                <th>Status</th>
                <th>Post by</th>
              </thead>
              <tbody>
                @foreach($cmt as $k => $item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->posts['title']}}</td>
                  <td>{{$item->content}}</td>
                  <td>{{$item->is_active}}</td>
                  <td>{{$item->users['name']}}</td>          
                  <td><a href="{{route('comments.edit',$item->id)}}" class="btn btn-primary">Update</a></td>
                  <td>
                    <form action="{{route('comments.destroy',$item->id)}}" method="post">
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