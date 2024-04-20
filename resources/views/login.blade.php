<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("assets/css/navbar.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/login.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/default.css") }}">
    @include("components.navbar")
    <link rel="icon" type="image/x-icon" href="{{ asset(" assets/images/logo tickets.png") }}">
    <title>Tickets</title>
</head>
<body>
    <div class="login-container">
        <h2>Please login</h2>
        <form action="/login/confirm" method="POST">
            @csrf
            <div class="login-inputs">
                <label class="credentials">Username</label>
                <input id="username" name="username" type="text" placeholder="Username" required>
                <br>
                <label class="credentials">Password</label>
                <input id="password" name="password" type="password" placeholder="Password" required>
            </div>
            <div style="margin-top: 25px">
                <label for="myCheckbox01" class="checkbox">
                    <input class="checkbox__input" type="checkbox" id="myCheckbox01">
                    <svg class="checkbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                        <rect width="21" height="21" x=".5" y=".5" fill="#FFF" stroke="#006F94" rx="3" />
                        <path class="tick" stroke="#7d3af2" fill="none" stroke-linecap="round" stroke-width="4"
                            d="M4 10l5 5 9-9" />
                    </svg>
                    <span class="checkbox__label">Remember Me</span>
                </label>
                <a href="/login/reset-password" class="reset-pass">Forgot Password</a>
            </div>
            <div style="margin-top: 15px">
                <label for="myCheckbox02" class="checkbox2">
                    <input class="checkbox__input2" type="checkbox" id="myCheckbox02">
                    <svg class="checkbox__icon2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                        <rect width="21" height="21" x=".5" y=".5" fill="#FFF" stroke="#006F94" rx="3" />
                        <path class="tick" stroke="#7d3af2" fill="none" stroke-linecap="round" stroke-width="4"
                            d="M4 10l5 5 9-9" />
                    </svg>
                    <span class="checkbox__label2">Login as Admin</span>
                </label>
        </form>
        <a href="/login/register" class="register">Create new account</a><br>
        <div class="button-div"><button type="submit" class="continue">Continue</button></div>
    </div>
    </div>
</body>

</html>