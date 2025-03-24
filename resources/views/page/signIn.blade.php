@extends('master')
@section('content')
<div class="container">
		<div id="content">
			
			<form action="handlesignin" method="post" class="beta-form-checkout">
				@csrf
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng nhập</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" id="email" name="email" class="@error('email') is-invalid @enderror">
                            @error('email')
                            <div class="error"> {{ $message }}</div>
                            @enderror
						</div>
						<div class="form-block">
							<label for="password">Password*</label>
							<input type="password" id="password" name="password" class="@error('password') is-invalid @enderror">
                            @error('password')
                            <div class="error"> {{ $message }}</div>
                            @enderror
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection