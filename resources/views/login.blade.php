<form method="post" action="/login">
    @csrf
    <div class="mb-3 mt-3">
        <input name="username" type="text" placeholder="User name" id="validationServerUsername"
               class="form-control
               @if($errors->has('username'))
                   is-invalid
               @endif" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback">

               @if($errors->has('username'))
               <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{$errors->first('username')}}
               </div>
               @endif
    </div>
    <div class="mb-3">
        <input name="password" type="password" placeholder="Password" id="validationServerPassword"
               class="form-control
               @if($errors->has('password'))
                   is-invalid
               @endif" aria-describedby="inputGroupPrepend3 validationServerPasswordFeedback">
               @if($errors->has('password'))
               <div id="validationServerPasswordFeedback" class="invalid-feedback">
               {{$errors->first('password')}}
               </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
