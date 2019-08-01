@extends('layouts.app')

@section('changePassword')
<form action="changePasswordFinal" method="POST">
    {{csrf_field()}}
    <table class="table">
        
            <label>New Password</label>
            <input type="password" type="text" name="password" /><br><br>
            <label>Confirm Password</label>
            <input type="password" type="text" name="password" /><br><br>
            <input type="submit" name="submit" />
        
    </table>
</form>
@endsection