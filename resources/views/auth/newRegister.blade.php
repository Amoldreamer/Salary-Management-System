{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <a href="/" style="color:rgb(91, 92, 94);text-decoration:none;margin-top:8px;margin-right:20px;">Home</a>
                            <a href="aboutUs" style="color:rgb(91, 92, 94);text-decoration:none;margin-top:8px;margin-right:20px;">About Us</a>
                            <a href="administration" style="color:rgb(91, 92, 94);text-decoration:none;margin-top:8px;margin-right:20px;">Administration</a>
                            <a href="reports" style="color:rgb(91, 92, 94);text-decoration:none;margin-top:8px;margin-right:20px;">Reports</a>
                            <a href="myAccount" style="color:rgb(91, 92, 94);text-decoration:none;margin-top:8px;margin-right:20px;">My Account</a>
                            <a href="newRegister" style="color:rgb(91, 92, 94);text-decoration:none;margin-top:8px;margin-right:20px;">Register</a>
                            <a href="changePassword" style="color:rgb(91, 92, 94);text-decoration:none;margin-top:8px;margin-right:20px;">Change Password</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <a href="changePassword" style="color:rgb(91, 92, 94);text-decoration:none;margin-top:8px;margin-right:20px;">Change Password</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        @section('changePassword')
        @show
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
                <div class="col-xl-12 adiv" style="height:1000px;">
                        <div class="col-xl-8 offset-xl-2 bdiv" style="height:auto;">
                            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                                <a href="#" class="navbar-brand">Salary Management System</a><br><br>
                                <ul class="navbar-nav ml-auto">
                                    @if(url()->current()=="http://127.0.0.1:8000/welcome1")
                                    <li class="nav-item"><a class="nav-link">Home</a></li>
                                    @else
                                    <li class="nav-item"><a href="welcome1" class="nav-link">Home</a></li>
                                    @endif
                                    @if(url()->current()=="http://127.0.0.1:8000/aboutUs1")
                                    <li class="nav-item"><a class="nav-link">About Us</a></li>
                                    @else
                                    <li class="nav-item"><a href="aboutUs1" class="nav-link">About Us</a></li>
                                    @endif
                                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="mydropdown">Administration</a>
                                    <div style="background-color:rgb(176, 177, 207);" class="dropdown-menu" aria-labelledby="mydropdown">
                                            <a href="newRegister" class="dropdown-item">Register</a>
                                        <a href='#' class="dropdown-item">Add Employee Salary</a>
                                        <a href='#' class="dropdown-item">Add Designation</a>
                                        <a href='#' class="dropdown-item">Add Department</a>
                                        <a href="aboutUs" class="dropdown-item">Change Password</a>
                                    </li>
                                    
                                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="mydropdown">Reports</a>
                                        <div style="background-color:rgb(176, 177, 207);" class="dropdown-menu" aria-labelledby="mydropdown">
                                                <a href="viewEmployees" class="dropdown-item">View Employees</a>
                                            <a href='#' class="dropdown-item">Salary Report</a>
                                        </li>
                                    @if(url()->current()=="http://127.0.0.1:8000/myAccount")
                                    <li class="nav-item"><a class="nav-link">My Account</a></li>
                                    @else
                                    <li class="nav-item"><a href="aboutUs" class="nav-link">My Account</a></li>
                                    @endif
                                    <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                    </a>
                                                    <div style="background-color:rgb(176, 177, 207);" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();" style="color:black">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            {{-- @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <p>{{$error}}</p>
                                @endforeach
                            @endif --}}
                            <div class="container" style="padding-top:10px;padding-bottom:10px">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card" >
                                            <div class="card-header" style="background-color:rgb(55, 63, 77);color:rgb(237, 213, 217)">{{ __('Register') }}</div>
                            
                                            <div class="card-body" style="background-color:rgb(91, 103, 122);">
                                                <form method="POST" action="newRegisterFinal" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                            
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Name') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="role" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Role') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
                            
                                                            @error('role')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                                                    
                            
                                                    <div class="form-group row">
                                                        <label for="email" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('E-Mail Address') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                            
                                                    <div class="form-group row">
                                                        <label for="password" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Password') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Confirm Password') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="mobile" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Mobile') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">
                            
                                                            @error('mobile')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="dob" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Date of Birth') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="date_of_birth" value="{{ old('dob') }}" required autocomplete="dob">
                            
                                                            @error('dob')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="address" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Address') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
                            
                                                            @error('address')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                     <div class="form-group row">
                                                        <label for="state" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('state') }}</label>
                            
                                                        <div class="col-md-6">
                                                            {{-- <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state">
                                                             --}}
                                                            <select onchange="cityFunction(this.value)" id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state">
                                                                <option value="">Select your option</option>
                                                                @foreach($states as $key=>$value)
                                                                <option>{{$value->states}}</option>
                                                                @endforeach
                                                                
                                                            </select>
                                                            @error('state')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="city" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('City') }}</label>
                            
                                                        <div class="col-md-6">
                                                            {{-- <input type="text" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" required autocomplete="city"> --}}
                                                            <select id="cities" name="city" type="text" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" required autocomplete="city">
                                                                    <option>First Select State</option>
                                                                </select>
                            
                                                            @error('city')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="photo" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Photo') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo">
                            
                                                            @error('photo')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                            
                                                    
                            
                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Register') }}
                                                            </button>
                                                        </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                        </div>
                </div>
                
            </div>
        </div>
        <script>
               function cityFunction(str)
        {
        var req=new XMLHttpRequest();
        req.open('get','cities?state='+str,true);
        req.send();
        req.onreadystatechange=function(){
            if(req.readyState == 4 && req.status==200)
            {
                document.getElementById('cities').innerHTML=req.responseText;
            }
        };
        }
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>