@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Paterno</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="paterno" value="{{ old('paterno') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Materno</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="materno" value="{{ old('materno') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Celular</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="celular">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Fecha de Nacimiento </label>
							<div class="col-md-6">

								<input type="date" class="form-control" name="nacimiento">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Colegio</label>
							<div class="col-md-6">
								<select class="form-control" name="id_colegio">
						              <option value="">--Selecciona colegio--</option>
						              <option value="1">Vida y Verdad</option>
						              <option value="2">Bancario</option>
						              <option value="3">Genesis</option>
									
{{--

									@foreach ($colegio as $cole)
										<option value="{{ $cole['id_colegio'] }}" > {{ $cole['colegio'] }}
											
										</option>
									@endforeach	
--}}								
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Correo</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
