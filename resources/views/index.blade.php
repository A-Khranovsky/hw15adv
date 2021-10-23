@extends('layout')

@section('title', 'Advts-service')

@section('content')
    @foreach($advts as $advt)
            <div class="card w-80 m-3 border-dark">
                <div class="card-header">
                    <h5 class="card-title">
                        <a href="/{{$advt->id}}">{{$advt->title}}</a></h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$advt->description}}</p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-auto me-auto fs-7">Author: {{$advt->user->username}}</div>
                        <div class="col-auto">
                            @if(\Illuminate\Support\Facades\Auth::id() === $advt->user_id)
                                <a class="btn btn-outline-primary btn-sm"
                                   href="edit/{{$advt->id}}">Edit</a>
                                <a class="btn btn-outline-primary btn-sm" href="delete/{{$advt->id}}">Delete</a>
                            @endif
                        </div>
                        <div class="col-auto">
                            <small class="text-muted">
                                Created: {{$advt->created_at->diffForHumans()}}
                            </small></div>
                    </div>
                </div>
            </div>
    @endforeach
    <div class="d-flex justify-content-center">
        {{$advts->links()}}
    </div>
@endsection
