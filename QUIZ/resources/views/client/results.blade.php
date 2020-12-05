@extends('layouts.client')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if(session('status'))
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                    <p>{{ session('status') }}</p>
                                    <a href="{{ route('client.test') }}" class="btn btn-primary">QUIZ</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    <h>Result: {{ $result->total_points }} score</h>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
