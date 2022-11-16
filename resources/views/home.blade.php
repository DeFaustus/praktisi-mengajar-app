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
                        {{-- {{ Auth::user()->level }} --}}
                        {{ __('You are logged in!') }}
                        @if (Auth::check() && Auth::user()->level == 'admin')
                            <h1> Login Sebagai Admin</h1>
                        @elseif(Auth::check() && Auth::user()->level == 'editor')
                            <h1> Login Sebagai Editor</h1>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
