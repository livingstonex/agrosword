@extends('layouts.dashboard')

@section('content')
    <h3 class="mt-3">Settings</h3>
    <hr>
    <div class="container">
		@if(session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
		@endif
    	<div class="row">
    		<div class="col-md-6">
    			<div class="card rounded-lg p-5 shadow border-0 mb-4">
    				<p class="lead mb-0 text-muted"><b>Basic Details</b></p>
    				<hr>
    				<form method="post" action="{{ route('settings.update-basic') }}">
    					@csrf
		    			<div class="form-group">
		    				<label for="name">Name</label>
		    				<input id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Fullname" value="{{ $user->name }}" required>
		    				@error('name')
							    <span class="invalid-feedback" role="alert">
							        <strong>{{ $message }}</strong>
							    </span>
							@enderror
		    			</div>

		    			<div class="form-group">
		    				<label for="email">Email</label>
		    				<input id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" value="{{ $user->email }}" required>
		    				@error('email')
							    <span class="invalid-feedback" role="alert">
							        <strong>{{ $message }}</strong>
							    </span>
							@enderror
		    			</div>

		    			<div class="form-group">
		    				<label for="phone">Phone Number</label>
		    				<input id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone number" value="{{ $user->phone }}" required>
		    				@error('phone')
							    <span class="invalid-feedback" role="alert">
							        <strong>{{ $message }}</strong>
							    </span>
							@enderror
		    			</div>
		    			
		    			<div class="form-group">
		    				<button class="btn btn-primary text-white">Update</button>
		    			</div>
    				</form>
    			</div>
    		</div>
    		<div class="col-md-6">
    			<div class="card rounded-lg p-5 shadow border-0">
    				<p class="lead mb-0 text-muted"><b>Bank Details</b></p>
    				<hr>
	    			@if($user->bank)
	    				<div class="alert alert-primary" role="alert">
	    					<p class="mb-0">Bank: <strong>{{ $user->bank->bank_name }}</strong></p>
	    					<p class="mb-0">Account Name: <strong>{{ $user->bank->account_name }}</strong></p>
	    					<p class="mb-0">Account Number: <strong>{{ $user->bank->account_number }}</strong></p>
						</div>
	    			@endif
    				<form method="post" action="{{ route('settings.update-bank') }}">
    					@csrf
						<div class="form-group">
							<label for="bank">Bank</label>
							<select class="form-control" id="bank" required name="code">
								<option value="" disabled selected>Choose a bank</option>
								@foreach($banks as $bank)
									<option value="{{ $bank['code'] }}">{{ $bank['name'] }}</option>
								@endforeach
							</select>
							@error('code')
							    <span class="invalid-feedback" role="alert">
							        <strong>{{ $message }}</strong>
							    </span>
							@enderror
						</div>
		    			<div class="form-group">
		    				<label for="account_number">Account Number</label>
		    				<input id="account_number" name="account_number" class="form-control @error('account_number') is-invalid @enderror" placeholder="Account Number" required>
		    				@error('account_number')
							    <span class="invalid-feedback" role="alert">
							        <strong>{{ $message }}</strong>
							    </span>
							@enderror
		    			</div>
		    			<div class="form-group">
		    				<button class="btn btn-primary text-white">Update</button>
		    			</div>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
@endsection
