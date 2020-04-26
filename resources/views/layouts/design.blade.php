<!DOCTYPE html>
<html style="background-color:white;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IncInc Stock Engine</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style type="text/css">
            
            /*Button on home page to redirect to register*/
            .btn{
                background-color:green;
                color: white;
                font-family:Bahnschrift;
                font-weight:bolder;
                border-radius:5px;
                font-size:20px;
                padding-top: 15px;
                padding-bottom: 15px;
                padding-right:2em;
                padding-left:2em; 
                border-style:none;
                width:;
                height:50px; 
            }
            /*If button hover*/
            .btn:hover{
                background-color:white;
                font-family: Bahnschrift;
                color: black;
                font-weight: bolder;
                width:;
                height:50px; 
            }
            /*Link styles*/
            .linkAttr{
                color:green;
                font-family:Bahnschrift; 
            }
            /*Link styles hover*/
            .linkAttr:hover{
                font-weight:bolder;
                color:green;
            }
            /*Login Input Box*/
            .inputBox{
                width:270px;
                height:40px;
                font-size:20px;
                font-family:Bahnschrift;
                border-radius:5px;
                border-color:#999999;
                border-style: solid;
                outline:none;
                padding-left:20px; 
                background-color:white;
                border-width: 1px;
                box-shadow:inset 0px 3px 3px -3px grey;
            }
            /*Login Input focus*/
            input:focus{
                border-radius: 5px;
                -webkit-box-shadow: 0 0 7px 4px green;
                -moz-box-shadow: 0 0 7px 4px green;
                box-shadow: 0 0 7px 4px green;
            }
            /*Placeholder Atributes*/
            ::placeholder{
                opacity: 0.5;
            }
            /*Login Button*/
            .submitBtn{
                width:270px;
                height:40px;
                border-radius:5px;
                background-color:green;
                color:white;
                font-family:Bahnschrift; 
                padding: auto;
                font-size:20px;
                border-color:green;
                border-style:solid;
            }
            /*Login Button Hover*/
            .submitBtn:hover{
                background-color:#00b300;
                border-color:#00b300;
            }
            /*Selection Style*/
            .selectAttr{
                width:270px;
                height:40px;
                font-family:Bahnschrift; 
                border-radius:5px; 
                background-color:white;
                border-width:1px;
                box-shadow:inset 0px 3px 3px -3px grey;
            }
            
        </style>
    </head>
    <body style="background-color:white;"> 
        <nav class="navbar is-primary" style="background-color:#006837;">
            <div class="navbar-brand">
                
                <div id="nav-toggle" class="navbar-burger" data-target="nav-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div id="nav-menu" class="navbar-menu" style="background-color:#E6E6E6;">
                <div class="navbar-start">
                    <h3 class="navbar-item">
                        
                    </h3>
                    <a href="/admin">
                        <img src="/img/adminLogo.png" width="270" class="navbar-item">
                    </a>
                    </div>
                    <div class="navbar-end">
                    @if(!Auth::check())
                        <a class="navbar-item" href="/login" style="font-family:Bahnschrift;" >
                            Login
                        </a>
                        <a class="navbar-item" href="/register" style="font-family: Bahnschrift;">
                            Create Account
                        </a>
                    @else
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" style="font-family:Bahnschrift;" class="navbar-item">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endif
                    </div>
                
            </div>
        </nav>
        @yield('content')
		<script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {
                // Add a click event on each of them
                $navbarBurgers.forEach( el => {
                    el.addEventListener('click', () => {
                        // Get the target from the "data-target" attribute
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);
                        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');
                    });
                });
            }
        });

        </script>
    </body>
    <!-- Footer -->
    <nav class="navbar is-fixed-bottom" style="background-color:grey; opacity:0.3; ">
            <span class="navbar-item is-expanded"></span>
            <div class="navbar-item">
               
                    <p style="color: white;">
                        Copyright &copy; IncInc 2020.
                    </p>   
            </div>
            <span class="navbar-item is-expanded"></span>
        </nav>
</html>
