<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col ms-5 me-5">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-success bg-gradient">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="/">Advs-service</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link" href="advts/">Create Ad</a>
                                    <a class="nav-link" href="#">Pricing</a>
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </div>
                                <form class="row g-3">
                                    <div class="col-auto">
                                        <label for="inputuserName" class="visually-hidden">Name</label>
                                        <input type="text" class="form-control" id="inputPassword2" placeholder="Name">
                                    </div>
                                    <div class="col-auto">
                                        <label for="inputPassword2" class="visually-hidden">Password</label>
                                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @yield('body')
                    </div>
                </div>
            </div>
        </div>
    </div>
</container>
</body>
</html>

