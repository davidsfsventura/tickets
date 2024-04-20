    <link rel="stylesheet" href="{{ asset("assets/css/navbar.css") }}">
    <script defer src="{{ asset("assets/js/themeswitcher.js") }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="navbar" id="myNavbar">
        <a id="home" href="/">Home</a>
        <a id="faq" href="/faq">FAQ</a>
        <a id="newticket" href="/new-ticket">Open new ticket</a>
        <a id="checkticket" href="/check-ticket">Check on a ticket</a>
    <div class="navbar-right">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa-solid fa-bars fa-2xl"></i>
        </a>
        <div class="responsive-left">
        <a class="themeswitch">
        <div class="container">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
        </div>
        </a>
        <a class="login" id="login" href="/login">Login</a>
      </div>
    </div>
    </div>

<script>
function myFunction() {
  var x = document.getElementById("myNavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>
<script>
if(window.location.pathname=="/"){
  document.getElementById("home").className +=" active";
}
else if(window.location.pathname=="/faq"){
  document.getElementById("faq").className +=" active";
}
else if(window.location.pathname=="/new-ticket"){
  document.getElementById("newticket").className +=" active";
}
else if(window.location.pathname=="/check-ticket"){
  document.getElementById("checkticket").className +=" active";
}
else if(window.location.pathname=="/login"){
  document.getElementById("login").className +=" active";
}
</script>