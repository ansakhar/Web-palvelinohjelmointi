@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-danger" role="alert">
                    Admin-käyttäjän kirjautumisen vaaditaan!
                    </div>

                </div>
            </div>
        </div>
</div>
@endsection