@extends('layout.admin.login')
@section('title','Logout')


@section('container')

    <fieldset class="fieldset-logout">
        <div>
            <h1 class="h1-logout">Are you sure want to logout? </h1>
        </div>
        <br><br>
        <div id="container_logout">
            <button type="submit" class="button1" id="Logout" value="Logout">Logout</button>
            <button type="submit" class="cancel1" id="Cancel" value="Cancel">Cancel </button>
        </div>
    </fieldset>

@endsection