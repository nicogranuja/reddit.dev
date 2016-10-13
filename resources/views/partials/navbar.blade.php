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
      
      <a class="navbar-brand" href="{{action('PostsController@index')}}">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
      </a>
      <a class="navbar-brand" href="{{action('UsersController@index')}}">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      </a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        {{-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> --}}
        <li><a href="{{action('PostsController@create')}}">Create Post</a></li>
        <li><a href="{{action('UsersController@create')}}"> Create User</a></li>
        
        
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