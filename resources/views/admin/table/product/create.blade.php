@extends('layout.admin')


@section('content')
    {{ Form::open(['url' => 'sharks']) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('shark_level', 'shark Level') }}
        {{ Form::select('shark_level', ['0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'], Input::old('shark_level'), ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Create the shark!', ['class' => 'btn btn-primary']) }}

    {{ Form::close() }}
@endsection
