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
                                            <a href='viewSalaries' class="dropdown-item">Salary Report</a>
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
                            <div class="container" style="padding-top:10px;padding-bottom:10px">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card" >
                                            <div class="card-header" style="background-color:rgb(55, 63, 77);color:rgb(237, 213, 217)">{{ __('Add Salary') }}</div>
                            
                                            <div class="card-body" style="background-color:rgb(91, 103, 122);">
                                                <form method="POST" action="addSalaryFinal">
                                                    {{csrf_field()}}
                            
                                                    <div class="form-group row">
                                                        <label for="register" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Registration') }}</label>
                            
                                                        <div class="col-md-6" >
                                                            {{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> --}}
                                                            <div style="background-color:white;width:230px;height:40px;border-radius:6px;padding:4px;"><span style="float:right;">{{$register}}</span></div>
                                                            <input type="hidden" name="register" value="{{$register}}" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="department" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Department') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="department" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{ old('department') }}" required autocomplete="department">
                            
                                                            @error('department')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="Designation" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Designation') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="Designation" type="text" class="form-control @error('Designation') is-invalid @enderror" name="designation" value="{{ old('Designation') }}" required autocomplete="Designation">
                            
                                                            @error('Designation')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="salaryMonth" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Salary Month') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <select id="salaryMonth" type="text" class="form-control @error('salaryMonth') is-invalid @enderror" name="month" value="{{ old('salaryMonth') }}" required autocomplete="salaryMonth" autofocus>
                                                                <option value="">Please Select One</option>
                                                                <option>January</option>
                                                                <option>February</option>
                                                                <option>March</option>
                                                                <option>April</option>
                                                                <option>May</option>
                                                                <option>June</option>
                                                                <option>July</option>
                                                                <option>August</option>
                                                                <option>September</option>
                                                                <option>October</option>
                                                                <option>November</option>
                                                                <option>December</option>
                                                            </select>
                            
                                                            @error('salaryMonth')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="salaryYear" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Salary Year') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <select id="salaryYear" type="text" class="form-control @error('salaryYear') is-invalid @enderror" name="salaryYear" value="{{ old('salaryYear') }}" required autocomplete="salaryYear" autofocus>
                                                                <option value="">Please Select One</option>
                                                                <option>2010</option>
                                                                <option>2011</option>
                                                                <option>2012</option>
                                                                <option>2013</option>
                                                                <option>2014</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                            </select>
                            
                                                            @error('salaryYear')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    
                            
                                                    <div class="form-group row">
                                                        <label for="workingDays" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Number of Working Days') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="workingDays" type="number" class="form-control @error('workingDays') is-invalid @enderror" name="workingDays" value="{{ old('workingDays') }}" required autocomplete="workingDays">
                            
                                                            @error('workingDays')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                            
                                                    <div class="form-group row">
                                                        <label for="basicPay" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Basic Pay') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="basicPay" type="number" class="form-control @error('basicPay') is-invalid @enderror" name="basicPay" required autocomplete="new-basicPay">
                            
                                                            @error('basicPay')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="medicalClaim" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Medical Claim') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="medicalClaim" type="number" class="form-control @error('medicalClaim') is-invalid @enderror" name="medicalClaim" value="{{ old('medicalClaim') }}" required autocomplete="medicalClaim">
                            
                                                            @error('medicalClaim')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="travelAllowance" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Travel Allowance') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="travelAllowance" type="number" class="form-control @error('travelAllowance') is-invalid @enderror" name="travelAllowance" value="{{ old('travelAllowance') }}" required autocomplete="travelAllowance">
                            
                                                            @error('travelAllowance')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="dearnessAllowance" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Dearness Allowance') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="dearnessAllowance" type="number" class="form-control @error('dearnessAllowance') is-invalid @enderror" name="dearnessAllowance" value="{{ old('dearnessAllowance') }}" required autocomplete="dearnessAllowance">
                            
                                                            @error('dearnessAllowance')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                     
                                                    <div class="form-group row">
                                                        <label for="others" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Others') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input type="number" class="form-control @error('others') is-invalid @enderror" value="{{ old('others') }}" required autocomplete="others" name="others"> 
                            
                                                            @error('others')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="account" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('accountNo') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="account" type="number" class="form-control @error('account') is-invalid @enderror" name="account" value="{{ old('account') }}" required autocomplete="account">
                            
                                                            @error('account')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="card-header" style="background-color:rgb(55, 63, 77);color:rgb(237, 213, 217);width:535px;margin-left:-20px;">{{ __('Salary Deductions') }}</div>
                                                    <div class="form-group row" style="margin-top:20px;">
                                                        <label for="providentFund" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Provident Fund') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="providentFund" type="number" class="form-control @error('providentFund') is-invalid @enderror" name="providentFund" value="{{ old('providentFund') }}" required autocomplete="providentFund" autofocus>
                            
                                                            @error('providentFund')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div> 
                                                    <div class="form-group row">
                                                        <label for="monthlyTax" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Tax for the month') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <input id="monthlyTax" type="number" class="form-control @error('monthlyTax') is-invalid @enderror" name="monthlyTax" value="{{ old('monthlyTax') }}" required autocomplete="monthlyTax" autofocus>
                            
                                                            @error('monthlyTax')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>   
                                                    <div class="form-group row">
                                                        <label for="salaryNotes" class="col-md-4 col-form-label text-md-right" style="color:rgb(237, 213, 217)">{{ __('Salary Notes') }}</label>
                            
                                                        <div class="col-md-6">
                                                            <textarea id="salaryNotes" type="text" class="form-control @error('salaryNotes') is-invalid @enderror" name="salaryNotes" value="{{ old('salaryNotes') }}" required autocomplete="salaryNotes" autofocus></textarea>
                            
                                                            @error('salaryNotes')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>                         
                                                    <div class="form-group row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                {{ __('Submit') }}
                                                            </button>
                                                            <button type="reset" class="btn btn-info">
                                                                {{ __('Reset') }}
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