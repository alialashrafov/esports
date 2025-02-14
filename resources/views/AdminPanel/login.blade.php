<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Esports Admin Panel - e giriş</title>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
<div class="container">
    <form class="form-signin" action="{{ route('AdminPanel.login') }}" method="post">
        {{ csrf_field() }}
        <img src="/images/logo.jpg" style="width: 40px; height: 40px; float: left;" class="logo">
        @include('layouts.partials.errors')
        <label for="email" class="sr-only">Email Adresiniz:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
        <label for="password" class="sr-only">Şifrəniz:</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required autofocus>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="rememberme" value="0" checked> Meni Xatirla
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş</button>
        <div class="links">
            <a href="{{ route('anasehife') }}">&larr; Ana səhifəyə dön</a>
        </div>
    </form>
</div>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>

</html>