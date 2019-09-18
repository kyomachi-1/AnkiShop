@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">カードリング一覧</div>
                <div class="card-body">
                     @if(count($rings) > 0)
                        <ul>
                            @foreach ($rings as $ring)
                                <li>{!! link_to_route('rings.show', 'edit', ['id' => $ring->id]) !!}  :  {{ $ring->ring_name }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <a class="btn btn-primary" href="{{ route('rings.create') }}" role="button">Create Ring</a>
        </div>
    </div>
</div>

@endsection 