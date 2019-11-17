@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        
        <div class="col sm12">
            <button type="button" class="btn btn-primary">Users</button>
            <button type="button" class="btn btn-secondary">login</button>
            <button type="button" class="btn btn-success">register</button>
           
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('developer')  )
                    <passport-personal-access-tokens></passport-personal-access-tokens>
                @endif
                
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
