@extends('layouts.dashboard')

@section('content')
    <section id="projects" style="padding: 10px 0;">
      <h3 class="text-primary mb-4"><strong>My Investments</strong></h3>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            @if(count($investments))
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Number of Stock</th>
                    <th scope="col">Amount Invested</th>
                    <th scope="col">Expected ROI</th>
                    <th scope="col">Returns Date</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($investments as $investment)
                    <tr>
                      <th>{{ $loop->iteration }}</th>
                      <td>{{ $investment->project->name }}</td>
                      <td>{{ $investment->number_of_stock }}</td>
                      <td>₦{{ $investment->number_of_stock * $investment->project->amount_per_stock }}</td>
                      <td>₦{{ $investment->roi() }}</td>
                      <td>{{ $investment->created_at->addMonths($investment->project->duration)->toFormattedDateString() }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $investments->links() }}
            @else
              <p>You have no investments.</p>
              <a href="{{ route('projects.index') }}" class="btn btn-primary text-white">Sponsor a Project</a>
            @endif
          </div>
        </div>
      </div>
    </section>
@endsection
