{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            
            <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
    </head>
    <body>
            <div class="container-fluid">
                    <div class="row">
                            <div class="col-xl-12 ediv" style="height:10px;" ></div>
                        <div class="col-xl-12 adiv" style="height:700px;">
                                <div class="col-xl-8 offset-xl-2 bdiv" style="height:500px;">
                                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                                        <a href="#" class="navbar-brand">Salary Management System</a><br><br>
                                        <ul class="navbar-nav ml-auto">
                                            @if(url()->current()=="http://127.0.0.1:8000/welcome1")
                                            <li class="nav-item"><a class="nav-link">Home</a></li>
                                            @else
                                            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                                            @endif
                                            @if(url()->current()=="http://127.0.0.1:8000/aboutUs")
                                            <li class="nav-item"><a class="nav-link">About Us</a></li>
                                            @else
                                            <li class="nav-item"><a href="aboutUs1" class="nav-link">About Us</a></li>
                                            @endif
                                            <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="mydropdown">Administration</a>
                                            <div class="dropdown-menu" aria-labelledby="mydropdown">
                                                    <a href="newRegister" class="dropdown-item">Register</a>
                                                <a href='#' class="dropdown-item">Add Employee Salary</a>
                                                <a href='#' class="dropdown-item">Add Designation</a>
                                                <a href='#' class="dropdown-item">Add Department</a>
                                            </li>
                                            
                                            @if(url()->current()=="http://127.0.0.1:8000/reports")
                                            <li class="nav-item"><a class="nav-link">Reports</a></li>
                                            @else
                                            <li class="nav-item"><a href="aboutUs" class="nav-link">Reports</a></li>
                                            @endif
                                            @if(url()->current()=="http://127.0.0.1:8000/myAccount")
                                            <li class="nav-item"><a class="nav-link">My Account</a></li>
                                            @else
                                            <li class="nav-item"><a href="aboutUs" class="nav-link">My Account</a></li>
                                            @endif
                                            @if(url()->current()=="http://127.0.0.1:8000/changePassword")
                                            <li class="nav-item"><a class="nav-link">change Password</a></li>
                                            @else
                                            <li class="nav-item"><a href="aboutUs" class="nav-link">Change Password</a></li>
                                            @endif
                                            <li class="nav-item"><a href="aboutUs" class="nav-link"></a>Logout</li>
                                            
                                        </ul>
                                    </nav>
                                    <div id="myslideshow" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="images/image1.jpg" class="d-block w-100" style="height:420px">
                                                </div>
                                                <div class="carousel-item ">
                                                    <img src="images/image2.jpg" class="d-block w-100" style="height:420px">
                                                </div>
                                                <div class="carousel-item ">
                                                    <img src="images/image3.jpg" class="d-block w-100" style="height:420px">
                                                </div>
                                            </div>
                                        </div>
                                        <form method="POST" action="uploadImage" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div >
                                        <input type="file"  value="Upload Image" name="photo" />
                                            </div>
                                            <input type="submit" name="submit" value="submit" class="btn btn-primary"/>
                                    </form>
                                    </div>
                                </div>
                        </div>
                        
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>