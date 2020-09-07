@extends('layouts.dashboard')

@section('content')
    <div class="container mt-4">
      <div class="row justify-content-center">
          <div class="col-sm-8 col-lg-5">
                <div class="card border-0 shadow rounded-lg">
                  <div class="songart-dropzone rounded-top" style="background-image: url({{ "/{$project->image}" }});">
                      <div class="dropzone d-flex justify-content-center align-items-center flex-column">
                      </div>
                  </div>

                  <div class="card-body pb-1">
                    <h5><strong>{{ $project->name }}</strong></h5>
                    <p class="project-desc text-muted mb-1"><small>₦ {{ $project->amount_per_stock }} per stock</small></p>
                    <span class="badge badge-pill badge-secondary px-2 py-1 text-white">
                      {{ $project->interest_rate }}% after {{ $project->duration }} months
                    </span>
                  </div>
                  <calculator
                    amount="{{ $project->amount_per_stock }}"
                    email="{{ auth()->user()->email }}"
                    reference="{{ Paystack::genTranxRef() }}"
                    callback="{{ route('callback') }}"
                    id="{{ $project->id }}"
                    action="/pay"
                  />
                </div>
          </div>
      </div>
    </div>
@endsection
