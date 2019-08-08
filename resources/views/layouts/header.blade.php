@section('header')

<div class="view intro-2" style="margin-bottom:5%;">
    <nav class="navbar navbar-expand-lg navbar-transaparent bg-transparent primary-color">
        <a class="navbar-brand" id="header_logo" href="#">LOGO</i></a>
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
                    <a class="nav-link" id="sign_in">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="sign_up" href="#">Sign Up</a>
                </li>
            </ul>
            <form class="form-inline my-1 my-lg-2" >
                <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search" style="opacity:0.4;">
                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </form>
        </div>
    </nav>
    

    <!-- The Modal -->
    <div id="header_myModal" class="header_modal">
        <!-- Modal content -->
        <div class="header_modal-content">
            <span class="header_close">&times;</span>
            <form action="action_page.php">
                    <div class="imgcontainer">
                      <img src="img_avatar2.png" alt="Avatar" class="avatar">
                    </div>
                  
                    <div class="container">
                      <label for="uname"><b>Username</b></label>
                      <input type="text" placeholder="Enter Username" name="uname" required>
                      <br><br><br><br>
                      <label for="psw"><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="psw" required>
                      <br><br><br>
                      <button type="submit">Login</button>
                      <label><br><br>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                      </label>
                    </div>
                    <br><br><br><br><br>
                    <div class="container" style="background-color:#f1f1f1">
                      <button type="button" class="cancelbtn">Cancel</button>
                      <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                  </form>
        </div>
    
    </div>

    <div class="full-bg-img">
        <div class="mask rgba-indigo-slight flex-center">
        <div class="container">
            <div class="white-text text-center wow fadeInUp">
            <h1><b>Page Heading</b></h1>
            <h3>When you scroll down it will disappear</h3>
            <br>
            <p>Full page intro with background image will be always displayed in full screen mode, regardless of device </p>
            <p>Full page intro with background image will be always displayed in full screen mode, regardless of device full screen mode, regardless of device </p>
            </div>
        </div>
        </div>
    </div>
</div>
@stop

<script type="text/javascript">
    window.onload = function(){
    
        var sign_in = document.getElementById('sign_in');
        var sign_up = document.getElementById('sign_up');
        var modal = document.getElementById('header_myModal');
        var span = document.getElementsByClassName('header_close');

        console.log(sign_in);
        console.log(sign_up);
        console.log(modal);
        console.log(span);

        // When the user clicks the button, open the modal 
        sign_in.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    };
    
    
</script>