@extends('layouts.dashboard')

@section('content')
    <section id="projects" style="padding: 10px 0;">
      <h3 class="text-primary mb-4"><strong>My Investments</strong></h3>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            @if(count($users))
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Admin?</th>
                    <th scope="col">Registered</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                      <th>{{ $loop->iteration }}</th>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->phone }}</td>
                      <td>{{ $user->isAdmin() ? 'Yes' : 'No' }}</td>
                      <td>{{ $user->created_at->diffForHumans() }}</td>
                      <td><a href="{{ route('users.edit', $user) }}">Update User</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $users->links() }}
            @else
              <p>Blah!</p>
            @endif
          </div>
        </div>
      </div>
    </section>
@endsection
