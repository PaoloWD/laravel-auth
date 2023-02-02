@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Link GitHub</th>
                          </tr>
                        </thead>
                        @foreach ($projects as $project)
                        <tbody class="table-group-divider">
                            <tr>
                              <th scope="row">{{$project->id}}</th>
                              <td>{{$project->name}}</td>
                              <td>{{$project->email}}</td>
                              <td>{{$project->link}}</td>
                            </tr>
                          </tbody>
                        @endforeach
                        
                      </table>

                      <a href="{{ route('admin.projects.create')}}" class="btn btn-primary">Aggiungi</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
