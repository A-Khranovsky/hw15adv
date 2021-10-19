@extends('layout')

@section('title', 'Advt management')

@section('body')
    <form action="<?=$advt['action']?>" method="post">
        @csrf
        <div class="card w-80 m-3 border-dark">
            <div class="card-header">
                <input name="title" type="text" class="form-control" placeholder="<?=$advt['title'] ?? 'Title'?>">
            </div>
            <div class="card-body">
                <textarea name="description" class="form-control mb-3" rows="3"
                          placeholder="<?=$advt['description'] ?? 'Description'?>"></textarea>
                <input type="submit" class="btn btn-primary" value="<?=$advt['action']?>">
            </div>
        </div>
    </form>
@endsection
{{--@extends('layout')--}}

{{--@section('title', 'Edit advts')--}}

{{--@section('body')--}}
{{--    --}}{{--    <a href="/categories/create">Add</a>--}}
{{--    <table class="table">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th scope="col">#</th>--}}
{{--            <th scope="col">Title</th>--}}
{{--            <th scope="col">Description</th>--}}
{{--            <th scope="col">Author</th>--}}
{{--            <th scope="col">Created at</th>--}}
{{--            <th scope="col">Action</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($advts as $advt)--}}
{{--            <tr>--}}
{{--                <th scope="row">1</th>--}}
{{--                <td>{{$advt->title}}</td>--}}
{{--                <td>{{$advt->description}}</td>--}}
{{--                <td>{{$advt->name}}</td>--}}
{{--                <td>{{$advt->created_at}}</td>--}}
{{--                <td>Edit | Delete</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--@endsection--}}
