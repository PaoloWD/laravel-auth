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
                        @foreach ($users as $user)
                        <tbody class="table-group-divider">
                            <tr>
                              <th scope="row">{{$user->id}}</th>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->link}}</td>
                            </tr>
                          </tbody>
                        @endforeach
                        
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
