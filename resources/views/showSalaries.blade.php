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
                                            <a href='viewSalaries' class="dropdown-item">View Salary</a>
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
                            <table class="table table-borderless">
                                <tr>
                                    <td>Registration</td>
                                    <td>Name</td>
                                    <td>Month</td>
                                    <td>Salary</td>
                                </tr>
                                @foreach($data as $key=>$value)
                                <tr>
                                    <td>{{$value->Register}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->Month}}</td>
                                    <td>{{$value->Total}}</td>
                                    <td><a href="salarySlip?register={{$value->Register}}"><button type="submit" class="btn btn-primary">
                                        {{ __('Salary Slip') }}
                                    </button></a></td>
                                    <td><button type="submit" class="btn btn-success">
                                        {{ __('Edit') }}
                                    </button></td>
                                    <td><button type="submit" class="btn btn-danger">
                                        {{ __('Delete') }}
                                    </button></td>
                                </tr>
                                @endforeach
                            </table>
                        
                        </div>
                </div>
                
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>