@extends('layout')

@section('title', 'Advts')

@section('body')
    {{--    <a href="/categories/create">Add</a>--}}
    @foreach($advts as $advt)

            <div class="card w-80 m-3 border-dark">
                <div class="card-header">
                    <h5 class="card-title">{{$advt->title}}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$advt->description}}</p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-auto me-auto fs-7">Author: {{$advt->name}}</div>
                        <div class="col-auto">
                            <small class="text-muted">
                                Posted: {{$advt->created_at}}
                            </small></div>
                    </div>
                </div>
            </div>
            {{--        <div class="col">--}}
{{--            <div class="card h-100">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">{{$advt->title}}</h5>--}}
{{--                    <p class="card-text">{{$advt->description}}.</p>--}}
{{--                </div>--}}
{{--                <div class="card-footer">--}}
{{--                    <small class="text-muted">{{$advt->name}}</small>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    @endforeach
@endsection
