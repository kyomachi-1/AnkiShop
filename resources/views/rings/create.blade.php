@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h2>Create Ring</h2>
    
        {!! Form::model($ring, ['route' => 'rings.store']) !!}
    
            {!! Form::label('ring_name', 'ring name:') !!}
            {!! Form::text('ring_name') !!}
    
            {!! Form::submit('create ring') !!}
    
        {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection