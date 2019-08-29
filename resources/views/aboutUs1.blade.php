@extends('layouts.adminapp')

@section('aboutUs1')
   <div > 
      @foreach($data as $key=>$value)
      {{$value->aboutus}}
      @endforeach
            </div>
@endsection