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
                                    <div class="dropdown-menu" aria-labelledby="mydropdown">
                                            <a href="newRegister" class="dropdown-item">Register</a>
                                        <a href='#' class="dropdown-item">Add Employee Salary</a>
                                        <a href='#' class="dropdown-item">Add Designation</a>
                                        <a href='#' class="dropdown-item">Add Department</a>
                                        <a href="aboutUs" class="dropdown-item">Change Password</a>
                                    </li>
                                    
                                    <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="mydropdown">Reports</a>
                                        <div class="dropdown-menu" aria-labelledby="mydropdown">
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
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                            <div class="container" style="padding-top:10px;padding-bottom:10px">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card" >
                                            <div class="card-header" style="background-color:rgb(55, 63, 77);color:rgb(237, 213, 217)">{{ __('Register') }}</div>
                            
                                            <div class="card-body" style="background-color:rgb(91, 103, 122);">
                                                @foreach($data as $key=>$value)
                                                <form method="POST" action="editEmployeeFinal" enctype="multipart/form-data">
                                                    {{csrf_field()}}
                            
                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Name') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $value->name }}" required autocomplete="name" autofocus>
                            
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
                                                            <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ $value->assumed_role}}" required autocomplete="role" autofocus>
                            
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
                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$value->email }}" required autocomplete="email">
                            
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
                                                            <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ $value->email }}" required autocomplete="mobile">
                            
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
                                                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="date_of_birth" value="{{ $value->date_of_birth }}" required autocomplete="dob">
                            
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
                                                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $value->address }}" required autocomplete="address">
                            
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
                                                                <option>{{$value->state}}</option>
                                                                @foreach($states as $k=>$v)
                                                                <option>{{$v->states}}</option>
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
                                                                    <option>{{$value->city}}</option>
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
                                                    <input type="hidden" value="{{$value->Register}}" name="register" />
                                                    
                            
                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Register') }}
                                                            </button>
                                                        </div>
                                                        </div>
                                                    </form>
                                                    @endforeach
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