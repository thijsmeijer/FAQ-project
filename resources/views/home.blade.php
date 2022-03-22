@extends('layouts.app')

@section('content')
<div class="homeWrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><span>{{ __('Dashboard') }}</span></div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <p>{{ __('You are logged in!') }} Welcome {{ Auth::user()->name }}. <a href="/">Home</a></p>
                        <p>{{ __('Add a Question here: ') }} <a href="/create">Create</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection