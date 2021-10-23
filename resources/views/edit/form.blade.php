@extends('layout')

@section('title', 'Create Advt')

@section('content')
    <form action="<?=$advt['action']?>" method="post">
        @csrf
        <div class="card w-80 m-3 border-dark">
            <div class="card-header">

                <input name="title" type="text" placeholder="Title" id="validationServerUsername"
                       class="form-control
                           @if($errors->has('title'))
                           is-invalid
                           @endif" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"
                       value="<?=$advt['advt']->title ?? ''?>">
                @if($errors->has('title'))
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{$errors->first('title')}}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <textarea name="description" id="validationServerDescription" rows="3" class="form-control mb-3
                    @if($errors->has('description'))
                        is-invalid
                    @endif"
                    placeholder="Description"><?=$advt['advt']->description ?? ''?></textarea>
                @if($errors->has('description'))
                    <div id="validationServerDescriptionFeedback" class="invalid-feedback">
                        {{$errors->first('description')}}
                    </div>
                @endif<br>
                <input type="submit" class="btn btn-primary" value="<?=$advt['buttonName']?>">
            </div>
        </div>
    </form>
@endsection

