@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-primary my-4">
            Dashboard
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <span>You are logged in!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
