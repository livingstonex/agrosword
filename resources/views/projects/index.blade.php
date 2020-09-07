@extends('layouts.dashboard')

@section('content')
    <section id="projects" style="padding: 10px 0;">
      <h3 class="text-primary text-center mb-4"><strong>Our projects</strong></h3>

      <div class="container">
        <div class="row">
          @foreach($projects as $project)
            <div class="col-md-3 mb-3 mb-md-0">
              <div class="project p-3 rounded-lg border">
                <div class="image rounded-lg w-100 mb-3 shadow-sm">
                  <img class="w-100 rounded-lg" src="{{ $project->image }}">
                </div>
                <p class="project-name mb-1">{{ $project->name }}</p>
                <p class="project-desc text-muted mb-1"><small>₦ {{ $project->amount_per_stock }} per stock</small></p>
                <span class="badge badge-pill badge-secondary px-2 py-1 text-white">
                  {{ $project->interest_rate }}% after {{ $project->duration }} months
                </span>
                <p>
                  <a class="btn btn-primary btn-sm mt-3 text-white" href="{{ route('projects.show', $project) }}">Sponsor</a>
                </p>
                @if(auth()->user()->isAdmin())
                  <a href="{{ route('projects.edit', $project) }}"><small>Edit Project</small></a>
                @endif
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
@endsection
