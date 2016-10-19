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
      
      @if(Auth::check())

        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{Auth::user()->name}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{action('UsersController@show', Auth::user()->id)}}" title="">
                <i class="fa fa-user" aria-hidden="true"></i>
                Profile
              </li>
              <li><a href="{{action('UsersController@edit', Auth::user()->id)}}" title="">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                Edit Profile
                </a>
              </li>
                <li class=""><a href="{{action('PostsController@create')}}">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i>
                  Create Post
                </li>
                <li>
                  <a href="{{action('UsersController@index')}}">
                    <i class="fa fa-users" aria-hidden="true"></i>Users
                  </a>
                </li>


              <li role="separator" class="divider"></li>
              <li class="">
                <a href="{{action('Auth\AuthController@getLogout')}}">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    Logout
                </a>
              </li>
            </ul>
          </li>
        </ul>

        
      @else
        <a class="navbar-brand">
          Reddit.dev
        </a>
      @endif
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="font-size:17px">
        <li>
          <a  href="{{action('PostsController@index')}}">
            <i class="fa fa-clipboard" aria-hidden="true"></i>
            All Posts
          </a>
        </li>
        @if(!Auth::check())
          <li>
            <a href="{{action('Auth\AuthController@getLogin')}}">
              <i class="fa fa-sign-in" aria-hidden="true"></i>
              Login
            </a>
          </li>
          <li>
            <a href="{{action('Auth\AuthController@getRegister')}}">
              <i class="fa fa-user-plus" aria-hidden="true"></i>
              Register
            </a>
          </li>
        @endif
        
      </ul>

      <form class="navbar-form navbar-right" method="GET" action="{{action('PostsController@index')}}"> 
        <div class="form-group">
          <input type="text" name="searchTitle" class="form-control" placeholder="Search Posts">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>