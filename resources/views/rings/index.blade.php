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
                                <li>{{ $ring->ring_name }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 