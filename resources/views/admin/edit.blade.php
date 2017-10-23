@extends('layout.panel-layout')
@section('content')

    <div class="well">
        <form role="form" method="post">
            <div class="form-group">
                <input class="form-control" type="text" disabled value="admin"/>
                <input class="form-control" type="password" name="oldPassword" value="" placeholder="رمز عبور قبلی"/>
                <input class="form-control" type="password" name="newPassword" value="" placeholder="رمز عبور جدید"/>
                <input type="submit" name="submit" class="btn btn-primary" value="  ارسال  ">
        </form>
    </div>
@stop