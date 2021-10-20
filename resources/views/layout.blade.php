<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

//dd(Auth::user());

?>
    <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
<div class="container">
    <div class="row">
        <div class="row row-cols-1 ms-5 me-5">
           <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-success bg-gradient rounded-1">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="/">Advs-service</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <?php if (Auth::user() !== null):?>
                                    <a class="nav-link" href="edit">Create Ad</a>
                                    <?php endif;?>
                                </div>
                                <?php if (Auth::user() === null):?>

                                <form class="row g-3" method="post" action="login">
                                    @csrf
                                    <div class="col-auto">
                                        <label for="inputuserName" class="visually-hidden">Name</label>
                                        <input name="name" type="text" class="form-control-sm" id="inputPassword2"
                                               placeholder="Name">
                                    </div>
                                    <div class="col-auto">
                                        <label for="inputPassword2" class="visually-hidden">Password</label>
                                        <input name="password" type="password" class="form-control-sm" id="inputPassword2"
                                               placeholder="Password">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3 btn-sm">Confirm identity</button>
                                    </div>
                                </form>
                                <?php else:?>
                                <?='Wellcome ' . Auth::user()->name?>
                                <span>&nbsp<a href="logout">Logout</a></span>
                                <?php endif;?>
                            </div>
                        </div>
                    </nav>

           </div>
           <div class=""col>
                @yield('body')
           </div>
        </div>
    </div>
</div>
</body>
</html>

