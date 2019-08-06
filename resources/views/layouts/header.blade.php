@section('header')

<div class="view intro-2">
    <nav class="navbar navbar-expand-lg navbar-transaparent bg-transparent primary-color">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:5%;" >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-right">
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign Up</a>
                </li>
            </ul>
            <form class="form-inline my-1 my-lg-2" >
                <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </form>
        </div>
    </nav>
    

    <div class="full-bg-img">
        <div class="mask rgba-indigo-slight flex-center">
        <div class="container">
            <div class="white-text text-center wow fadeInUp">
            <h2>This Navbar isn't fixed</h2>
            <h5>When you scroll down it will disappear</h5>
            <br>
            <p>Full page intro with background image will be always displayed in full screen mode, regardless
                of device </p>
            </div>
        </div>
        </div>
    </div>
</div>
@stop

