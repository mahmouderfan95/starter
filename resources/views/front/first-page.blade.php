@extends('front.mastar')
@section('title','first page ')
@section('content')
<!-- sidebar -->
<div class="sidebar">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-9">
                <p> Start your projects even faster using the new, pro products from Start Bootstrap!</p>
            </div>
            <!-- col -->
            <!-- col -->
            <div class="col-3">
                <button class="btn btn-info">View pro product</button>
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>  
    <!-- container -->
</div>
<!-- sidebar -->
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
        </div>
  </nav>
  <!-- navbar -->
  <!-- services -->
  <div class="services text-center">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-4">
                <i class="fa fa-home fa-fw"></i>
                <h5>Fully Responsive</h5>
                <p>This theme will look great on any device, no matter the size!</p>
            </div>
            <!-- col -->
            <!-- col -->
            <div class="col-4">
                <i class="fa fa-check fa-fw"></i>
                <h5>Bootstrap 4 Ready</h5>
                <p>Featuring the latest build of the new Bootstrap 4 framework!</p>
            </div>
            <!-- col -->
            <!-- col -->
            <div class="col-4">
                <i class="fa fa-comment fa-fw"></i>
                <h5>Easy to Use</h5>
                <p>Ready to use with your own content, or customize the source files!</p>
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->

  </div>
  <!-- services -->
  <!-- people say -->
  <div class="people-say text-center">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-4">
                <img src="http://placehold.it/200/#EEE">
                <h5>Margaret E.</h5>
                <p>"This is fantastic! Thanks so much guys!"</p>
            </div>
            <!-- col -->
            <!-- col -->
            <div class="col-4">
                <img src="http://placehold.it/200/#EEE">
                <h5>Margaret E.</h5>
                <p>"This is fantastic! Thanks so much guys!"</p>
            </div>
            <!-- col -->
            <!-- col -->
            <div class="col-4">
                <img src="http://placehold.it/200/#EEE">
                <h5>Margaret E.</h5>
                <p>"This is fantastic! Thanks so much guys!"</p>
            </div>
            <!-- col -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- people say -->
@endsection