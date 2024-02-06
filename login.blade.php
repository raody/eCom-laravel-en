@extends('master');
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-sm-offset-3">
            <div class="mb-3">            
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <label for="inputPassword1" class="form-label">Password</label>
            <input type="password" id="inputPassword1" class="form-control" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection
