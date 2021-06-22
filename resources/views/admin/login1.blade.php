@extends('layout.admin.login')

@section('title','Login')



@section('container')

<div class="container">
<div class="header" style="background-color:#FFFFFF;">
        <h3> Login sebagai Admin </h3>
    </div>
    <div class="login" style="background-color: #FFFFFF;">


    <form>
        <center>
        <div class="form-group">
            <input type="text" style="border-color: #ccac02; width: 300px;" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="password" style="border-color: #ccac02; width: 300px;"class="form-control" name="password" placeholder="Password">
        </div>
        </center>
        <button type="submit" class="btn" style="background-color: #ccac02; color: black; border-radius: 5px; width: 150px;"><b>LOGIN</b></button>
    </form>

<!-- 
    <div class="form">
        <form action=" " method=" ">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">
                LOGIN 
            </button>
        </form>
    </div> -->
</div>
</div>




@endsection