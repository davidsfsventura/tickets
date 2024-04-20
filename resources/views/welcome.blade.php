<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset("assets/images/logo tickets.png") }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("assets/css/welcome.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/default.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/navbar.css") }}">
    <title>Tickets</title>
    @include("components.navbar")
</head>

<body>
    <h1>Support Ticketing System</h1>
    <div class="buttons-div">
    <button><a href="/check-ticket">Check My Tickets</a></button>
    <button><a href="/new-ticket">Open a new ticket</a></button>
    </div>
</body>

</html>