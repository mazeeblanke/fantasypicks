@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div class="container top15 bottom15">
        <h1>Admin Panel</h1>
        <hr>
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['method' => 'post', 'route' => 'admin.tournaments.set', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('id', 'Tournament ID', ['class' => 'control-label col-md-4']) !!}
                <div class="col-md-8">
                    {!! Form::number('id', 17, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('Submit', ['class' => 'form-control btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>

    </div>
@endsection