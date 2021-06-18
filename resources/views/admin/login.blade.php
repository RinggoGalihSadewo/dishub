@extends('layout.admin.login')

@section('title','Login')



@section('container')

<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign to start your session</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="inputan">
                <div id="container_login" class="form-group center">
                    <form action="" method="POST">
                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        @csrf
                        <div>
                            <input class="username" type="text" name="username" value="{{old('username')}}" placeholder="Username">
                            <span class="text-danger">
                                @error('username')
                                <div class="e-username">

                                    {{ $message }}
                                </div>
                                @enderror
                            </span>
                        </div>
                        <br>
                        <div>
                            <input class="password" type="password" name="password" id="password" placeholder="Password" >
                            <span class="span-eye">
                                <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                            </span>
                            <span class="text-danger">
                                @error('password')
                                <div class="e-password">

                                    {{ $message }}
                                </div>
                                @enderror
                            </span>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="sign" type="submit">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var state=false;
    function toggle(){
        if(state){
            document.getElementById("password").
            setAttribute("type","password");
            state = false;
        }
        else{
            document.getElementById("password").
            setAttribute("type","text");
            state = true;
        }
    }
</script>

@endsection
