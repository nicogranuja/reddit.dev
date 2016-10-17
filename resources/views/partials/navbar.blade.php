<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">
        Reddit.dev
      </a>
      @if(Auth::check())
        <div class="navbar-brand">
           <small>Welcome, {{Auth::user()->name}}</small>
        </div>
      @endif
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="font-size:17px">
      <li>
        <a  href="{{action('PostsController@index')}}">
          <span class="glyphicon glyphicon-edit" aria-hidden="true">Posts</span></a>          
      </li>
      @if(!Auth::check())
        <li>
          <a href="{{action('Auth\AuthController@getLogin')}}">
            <span class="glyphicon glyphicon-log-in" aria-hidden="true">Login</span></a>
        </li>
        <li>
          <a href="{{action('Auth\AuthController@getRegister')}}">
            <span class="glyphicon glyphicon-plus" aria-hidden="true">Register</span></a>
        </li>
      @else

          <li>
            <a href="{{action('UsersController@index')}}">
              <span class="glyphicon glyphicon-user" aria-hidden="true">Users</span></a>
          </li>
          
          <li class=""><a href="{{action('PostsController@create')}}">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true">Post</span></a>
          </li>

          <li class=""><a href="{{action('Auth\AuthController@getLogout')}}">
            <span class="glyphicon glyphicon-log-out" aria-hidden="true">Logout</span></a>
          </li>
        @endif
        
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>