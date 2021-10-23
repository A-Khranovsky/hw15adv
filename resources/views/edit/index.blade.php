@extends('layout')

@section('title', 'Edit advts')

@section('body')
    <div class="card border-dark mt-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Author name</th>
                <th scope="col">Creation date</th>
                @if(\Illuminate\Support\Facades\Auth::id() === $advts->first()->user_id)
                    <th scope="col">Action</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($advts as $advt)
                <tr>
                    <th scope="row">{{$advt->id}}</th>
                    <td>{{$advt->title}}</td>
                    <td>{{$advt->description}}</td>
                    <td>{{$advt->user->username}}</td>
                    <td>{{$advt->created_at}}</td>
                    <td>
                        @if(\Illuminate\Support\Facades\Auth::id() === $advt->user_id)
                            <a class="btn btn-outline-primary btn-sm"
                               href="edit/{{$advt->id}}">&nbsp&nbspEdit&nbsp&nbsp</a>
                            <a class="btn btn-outline-primary btn-sm" href="delete/{{$advt->id}}">Delete</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
