@extends('layouts.layoutunauth')

@section('menuinicio')
{{Menus::render('top')}}

@stop


@section('content')

<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">OpenPublish Login Page</h3>
						<div class="has-error has-feedback">
				            {{Session::get("message")}}
		                </div>
					</div>

							{{Form::open(array(
							            "method" => "POST",
							            "action" => "HomeController@doLogin",
							            "role" => "form",
							            
							            ))}}
							 
							            <div class="form-group">
							                {{Form::label("Email:")}}							                
								            {{Form::input("text", "email", Input::old('email'), array("class" => "form-control"))}}
								            <div class="has-error has-feedback">
									            <center><label class="control-label"><center>{{$errors->first('email')}}</center></label></center>
							                </div>
							            </div> 
							            
							            <div class="form-group">
							                {{Form::label("Password:")}}
							                {{Form::input("password", "password", Input::old('password'), array("class" => "form-control"))}}
							                <div class="has-error has-feedback">
									            <center><label class="control-label"><center>{{$errors->first('password')}}</center></label></center>
							                </div>
							            </div>
							            
							            <div class="form-group">
							                {{Form::label("Recordar sesión:")}}
							                {{Form::input("checkbox", "remember","On", array("checked" => "checked"))}}
							            </div>
							            
							            <div class="form-group">
							                {{Form::input("hidden", "_token", csrf_token())}}
							                {{Form::input("submit", null, "Iniciar sesión", array("class" => "btn btn-primary"))}}
							            </div>
							            
							{{Form::close()}}
				</div>

			</div>
	    </div>
	</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@stop

