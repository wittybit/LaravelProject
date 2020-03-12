<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Compiled Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    

    <!-- Font Awesome CDN -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('CSS/style.css') }}" />

    <title>@yield('title','Layout')</title>
    
    

</head>
<body>
<div id="navigation">
  <nav>
      <div class="nav-wrapper header">
        <a href="/home" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        
        
        <ul class="right hide-on-med-and-down">
          <li><a href="/home" title="Home" class="navItem"><i class="material-icons">home</i></a></li>
          <li><a href="/categories"  title="Categories" class="navItem"><i class="material-icons">format_list_bulleted</i></a></li>
          <li><a href="/cart" title="Cart" class="navItem"><i class="material-icons">shopping_cart</i></a></li>
          <li><a href="/login"  title="Login / SignUp" class="navItem"><i class="material-icons">fingerprint</i></a></li>
        </ul>

        <form id="form1" class="hide-on-med-and-down" >
          <div class="input-field" style="max-width: 67vw">
            <input id="search deskbar" type="search" required placeholder="Search for Products" title="Search for Products" onblur="clearText()">
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
            <div id="searchResults" ></div>
          </div>
        </form>
      </div>
        
    <nav class=" nav-wrapper header hide-on-large-only no-shadows" id="mobile-search-bar">
    <form id="form2" class="show-on-med-and-down">
          <div class="input-field" >
            <input id="search-mobile" type="search" required placeholder="Search for Products" title="Search for Products" onblur="clearText()">
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
            <div id="searchResults" ></div>
          </div>
        </form>
    </nav>

    <ul class="sidenav header" id="mobile-demo">
      <li class="accent" style="padding-top: 10px;">
        <div class="container" style="font-size:18px">
          @if(true)
          <i style="font-size: 48px;margin:0" class="large material-icons row">account_box</i>
          <div style="width: 100%" class="waves-effect row">
            <span class="col s10">Hello, User</span><span style="padding-top: 10px;" class="col s1 material-icons">arrow_forward</span>
          </div>
          @else
          <div style="width: 100%" class="row">
            <div class="row">
            <button class="btn indigo darken-1 col s5 waves-effect" onclick="location.href='/login'">Login</button>
            <button class="btn indigo lighten-4 col s6 offset-s1 waves-effect grey-text text-darken-4" onclick="location.href='/signup'">Register</button>
            </div>
          </div>
          @endif
        </div>
      </li>
          <li><a href="/home" class="waves-effect waves-accent icon-white">Home<i class="material-icons icon-white">home</i></a></li>
          <li><a href="/categories" class="waves-effect waves-accent icon-white">Categories<i class="material-icons icon-white">format_list_bulleted</i></a></li>
          <li><a href="/cart" class="waves-effect waves-accent icon-white">Cart<i class="material-icons icon-white">shopping_cart</i></a></li>
          <li><a href="/login" class="waves-effect waves-accent icon-white">Login<i class="material-icons icon-white">fingerprint</i></a></li>
          <hr>
          <li><a href="/cart" class="waves-effect waves-accent icon-white">Contact Us<i class="material-icons icon-white">email</i></a></li>
          <li><a href="/login" class="waves-effect waves-accent icon-white">FAQs<i class="material-icons icon-white">question_answer</i></a></li>
    </ul>

    <div class="fixed-action-btn horizontal hide-on-large-only">
    <a class="btn-floating btn-large accent waves-effect waves-light">
      <i class="large material-icons">shopping_cart</i>
    </a>
    <ul>
      <li><a href="/checkout"class="btn-floating red " title="Check Out"><i class="material-icons">attach_money</i></a></li>
      <li><a href="/cart"class="btn-floating yellow darken-1" title="View Cart"><i class="material-icons">format_list_bulleted</i></a></li>
    </ul>
  </div>
</div>

<div id="content">
  <div class="hide-on-large-only" style="margin:30px 0;"></div>
  @yield('content')
</div>



  <script>
    $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.fixed-action-btn').floatingActionButton();

    });

    function clearText(){
       document.getElementById("search").value = "";
       document.getElementById("search-mobile").value="";
      }

  </script>
</body>

</html>

<!-- 
Things to do:
1. make this a template by adding yield at the appropriate places
2. make a navigation controller using the links provided here
3. make rest of the pages and import this layout there
4. make a nice footer too
5. find a way to import the scripts / dependencies globally

 -->