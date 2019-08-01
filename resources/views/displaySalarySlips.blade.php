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
            {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                    <div class="col-xl-12 ediv" style="height:10px;" ></div>
                <div class="col-xl-12 adiv" style="height:auto;">
                        <div class="col-xl-8 offset-xl-2 " style="background-color:white;height:700px;">
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
                                    <div class="dropdown-menu " aria-labelledby="mydropdown" style="background-color:rgb(176, 177, 207);">
                                            <a href="newRegister" class="dropdown-item">Register</a>
                                        <a href='#' class="dropdown-item">Add Employee Salary</a>
                                        <a href='#' class="dropdown-item">Add Designation</a>
                                        <a href='#' class="dropdown-item">Add Department</a>
                                        <a href="aboutUs" class="dropdown-item">Change Password</a>
                                    </div>
                                    </li>

                                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="mydropdown">Reports</a>
                                        <div class="dropdown-menu" aria-labelledby="mydropdown" style="background-color:rgb(176, 177, 207);">
                                            <a href="viewEmployees" class="dropdown-item">View Employees</a>
                                            <a href='viewSalaries' class="dropdown-item">Salary Report</a>
                                        </div>
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
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color:rgb(176, 177, 207);">
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
                            <div style="border: 1px solid gray; height: 550px;margin-top:17px">
                                <div style="text-align:center">
                                    Laravel Projects Pvt Ltd. Company<br>
                                    Lisbon,Portugal<br>
                                    Salary Slip for the month of {{$month}},&nbsp{{ $year}}
                                </div>
                                <div style="border: 1px solid gray; height: 200px;margin:17px 10px;height:150px">
                                    
                                    <table class="table table-borderless table-sm " style="width:400px;float:right">
                                       @foreach($person as $k=>$v)
                                        <tr>
                                            <td >Name</td>
                                            <td>{{$v->name}}</td>
                                        </tr>
                                        @endforeach
                                        @foreach($data as $key=>$value)
                                        <tr>
                                            <td>Designation</td>                                                
                                            <td>{{$value->Designation}}</td>
                                        </tr>
                                        <tr>
                                            <td>Salary Account No</td>                                                
                                            <td>{{$value->Salary_act_no}}</td>
                                        </tr>
                                    </table>                                   
                                    <table class="table table-borderless table-sm" style="width:400px;">
                                        <tr >
                                            <td >Employee ID</td>
                                            <td>{{$value->Register}}</td>
                                        </tr>
                                        <tr>
                                            <td>Department</td>                                                
                                            <td>{{$value->Department}}</td>
                                        </tr>
                                        <tr>
                                            <td>Working Days</td>                                                
                                            <td>{{$value->Working_days}}</td>
                                        </tr>
                                       @endforeach
                                    </table>
                                    
                                </div>
                                <div style="border: 1px solid gray;margin:17px 10px;height:250px">
                                    
                                        <table class="table table-borderless table-sm " style="width:400px;float:right">
                                            <tr>
                                                <td>Deductions</td>
                                                <td>Amount</td>
                                            </tr>
                                            <tr>
                                                <td >Provident Fund</td>
                                                <td>{{$value->Provident_fund}}</td>
                                            </tr>
                                            <tr>
                                                <td>Income Tax</td>                                                
                                                <td>{{$value->Monthly_tax}}</td>
                                            </tr>
                                        </table>                                   
                                        <table class="table table-borderless table-sm" style="width:400px;">
                                            <tr>
                                                <td>Earnings</td>
                                                <td></td>
                                            </tr>
                                            <tr >
                                                <td >Basic Pay</td>
                                                <td>{{$value->Basic_pay}}</td>
                                            </tr>
                                            <tr>
                                                <td>Dearness Allowance</td>                                                
                                                <td>{{$value->Dearness_allowance}}</td>
                                            </tr>
                                            <tr>
                                                <td>Medical Allowance</td>                                                
                                                <td>{{$value->Medical_claim}}</td>
                                            </tr>
                                            <tr>
                                                <td>Travel Allowance</td>                                                
                                                <td>{{$value->Travel_allowance}}</td>
                                            </tr>
                                            <tr>
                                                <td>Others</td>                                                
                                                <td>{{$value->Others}}</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>                                                
                                                <td>{{$value->Total}}</td>
                                            </tr>
                                        </table>
                                        
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