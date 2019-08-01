@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:rgb(55, 63, 77);color:rgb(237, 213, 217)">User Dashboard</div>

                <div class="card-body" style="background-color:rgb(91, 103, 122);color:rgb(237, 213, 217)">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as User
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
