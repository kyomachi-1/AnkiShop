@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $ring->ring_name }} のリング名 編集ページ</h2>
                
                {!! Form::model($ring, ['route' => ['rings.update', $ring->id], 'method' => 'put']) !!}
                
                    {!! Form::label('ring_name', 'リング名 ： ') !!}
                    {!! Form::text('ring_name') !!}
                    
                    {!! Form::submit('リング名の更新') !!}
                
                {!! Form::model($ring, ['route' => ['rings.destroy', $ring->id], 'method' => 'delete']) !!}
                    {!! Form::submit('リングの削除') !!}
            
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    
@endsection