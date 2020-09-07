@extends('layouts.dashboard')

@section('content')
    <h3 class="text-primary mb-4"><strong>Update Project</strong></h3>
    <hr>
    <div class="container">
      @if(session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
      @endif
      <div class="row">
        <div class="col-md-6">
          <form method="POST" action="{{ route('projects.update', $project) }}">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $project->name }}">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Description</label>
              <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ $project->description }}</textarea>
              @error('description')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Interest Rate (In Percentages)</label>
              <input type="number" class="form-control @error('interest_rate') is-invalid @enderror" name="interest_rate" min="1" value="{{ $project->interest_rate }}">
              @error('interest_rate')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Duration (In months)</label>
              <input type="number" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ $project->duration }}" min="1">
              @error('duration')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Amount per stock</label>
              <input type="number" class="form-control @error('amount_per_stock') is-invalid @enderror" name="amount_per_stock" value="{{ $project->amount_per_stock }}" min="1">
              @error('amount_per_stock')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <button class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
