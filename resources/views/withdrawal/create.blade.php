@extends('layouts.dashboard')

@section('content')
    <section id="projects" style="padding: 10px 0;">
      <h3 class="text-primary mb-4"><strong>Withdrawal</strong></h3>
      <hr>
      <div class="container">
        @if(session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
        <div class="row">
          <div class="col-md-6">
            @if(auth()->user()->balanceFloat < config('app.min_withdrawal'))
              <h6 class="text-muted">Sorry, you need to have more than {{ config('app.min_withdrawal') }} to withdraw.</h6>
            @else
              @if(auth()->user()->hasBank())
                <form method="POST" action="{{ route('withdrawal.store') }}">
                  @csrf
                  <div class="alert alert-info">
                    <p><strong>NOTE:</strong> After a successful withdrawal, the money will deposited to:</p>
                    <p class="mb-0">Bank: <strong>{{ auth()->user()->bank->bank_name }}</strong></p>
                    <p class="mb-0">Account Name: <strong>{{ auth()->user()->bank->account_name }}</strong></p>
                    <p class="mb-0">Account Number: <strong>{{ auth()->user()->bank->account_number }}</strong></p>
                    <a href="{{ route('settings.index') }}" class="btn btn-info text-white mt-2">Change bank account</a>
                  </div>
                  <div class="form-group">
                    <input name="amount" class="form-control @error('amount') 'is-invalid' @enderror" placeholder="amount to withdraw" type="number" min="2500">
                    @error('amount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary text-white">Withdraw</button>
                  </div>
                </form>
              @else
                <h6 class="text-muted">Sorry, you have no bank account saved on your profile.</h6>
                <a href="{{ route('settings.index') }}" class="btn btn-primary text-white">Add bank account</a>
              @endif
            @endif
          </div>
        </div>
      </div>
    </section>
@endsection
