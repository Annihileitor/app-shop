@extends('layouts.app')
@section('body-class', 'signup-page')
@section('content')
<div class="header header-filter" style="background-image: url('{{ asset ('img/city.jpg') }}'); background-size: cover; background-position: top center;">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">
                <form class="form" method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="header header-primary text-center">
                        <h4>Registro</h4>
                        
                    </div>
                    <p class="text-divider">Completa tus datos</p>
                    <div class="content">   
                           
                        <div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">face</i>
							</span>
							<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre...">
						</div>                 

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>                            
                            <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                           
                            <input id="password" type="password" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        </div>       
                        
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                           
                            <input id="password" type="password" placeholder="Confirmar Contraseña"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                            
                        </div>  

                        <!-- <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} > 
                                Recordar sesión
                            </label>
                        </div> -->
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-simple btn-primary btn-lg">Confirmar Registro</button>
                    </div>

                   
                </form>
            
            </div>
        </div>
    </div>
</div>

</div>

</div>
@endsection
