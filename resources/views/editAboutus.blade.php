@extends('layouts.adminapp')

@section('editAboutus')
    @foreach($data as $key=>$value)
    <div style="margin-top:-200px;padding-bottom:180px;">
    <form action="editAboutusFinal" method="POST">
        {{csrf_field()}}
        <textarea type="text" name="aboutus" style="margin-left:30px;height:300px;width:800px;">{{$value->aboutus}}</textarea>
        <input type="submit" name="submit" value="submit" style="margin-left:30px"/>
        <input type="hidden" name="id" value="{{$value->id}}" />
    </form>
</div>
    @endforeach
@endsection