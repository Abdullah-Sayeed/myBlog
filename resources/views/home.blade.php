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

                    <h3>Auth: {{ Auth::check() }}</h3> 

                    <h3> Authorized User Name : {{ Auth::user()->name }}   </h3>
                    <h3> Authorized User Email : {{ Auth::user()->email }} </h3>
                    <h3> Authorized User Id :{{Auth::user()->id}} </h3>

                    <h3> Authorized User Id :{{Auth::id()}} </h3>

                    <h3> Authorized User Id :{{auth()->id()}} </h3>

                    <h3> Authorized User Name : {{ auth()->user()->name }}   </h3>
                    <h3> Authorized User Email : {{ auth()->user()->email }} </h3>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
