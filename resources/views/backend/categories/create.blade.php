@extends('backend/layouts')
@section('backend/layouts/content')

<div class="content">
    <div class="row">
        <div class="col-sm-12">
            <form action="{{route('categories.store')}}" method="post">
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
                    <label>Categori Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button type="submit" class="btn btn-danger form-control ">submit</button>
            </form>
        </div>
    </div>
</div>
@endsection