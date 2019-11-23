<div class="sidebar" data-color="white" data-active-color="danger">
  <div class="logo">
    <a href="#" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="admin/assets/img/avatar.jpg">
      </div>
    </a>
    @if(Auth::check())
    <a class="simple-text logo-normal href=" #">
      {{Auth::user()->name}}
    </a>
    @else()
    <a class="dropdown-item" href="#">
      Unauthenticated
    </a>
    @endif
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="active ">
        <a href="{{url('/home')}}">
          <i class="nc-icon nc-bank"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li>
        <a href="{{url('/home/posts')}}">
          <i class="fa fa-pencil-square" aria-hidden="true"></i>
          <p>Bài Viết</p>
        </a>
      </li>
      <li>
        <a href="{{url('/home/categories')}}">
          <i class="fa fa-list"></i>
          <p>Danh Mục</p>
        </a>
      </li>
      <li>
        <a href="{{url('/home/comments')}}">
          <i class="fa fa-comment"></i>
          <p>Comment</p>
        </a>
      </li>
      <li>
        <a href="{{url('/home/users')}}">
          <i class="fa fa-user" aria-hidden="true"></i>
          <p>Người Dùng</p>
        </a>
      </li>
    </ul>
  </div>
</div>