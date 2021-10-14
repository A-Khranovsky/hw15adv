@extends('layout')

@section('title', 'Advts')

@section('body')
    {{--    <a href="/categories/create">Add</a>--}}
    @foreach($advts as $advt)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{$advt->title}}</h5>
                    <p class="card-text">{{$advt->description}}.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{$advt->name}}</small>
                </div>
            </div>
        </div>
    @endforeach
@endsection
