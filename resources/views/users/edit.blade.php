@extends('layouts.dashboard')

@section('content')
    <section id="projects" style="padding: 10px 0;">
      <h3 class="text-primary mb-4"><strong>Change User Status</strong></h3>
      <hr>
      <div class="container">
        @if(session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
        <div class="row">
          <div class="col-md-6">
            <form method="POST" action="{{ route('users.update', $user) }}">
              @csrf
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="admin">
                  <option value="1" {{ auth()->user()->isAdmin() ? 'selected' : '' }}>Admin</option>
                  <option value="0" {{ !auth()->user()->isAdmin() ? 'selected' : '' }}>None Admin</option>
                </select>
              </div>
              <div class="form-group">
                <button class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
