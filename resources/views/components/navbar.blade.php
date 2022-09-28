

@php
$user = false;   

$numberOfItems = 0;
@endphp


<nav class="navbar">
    <!-- LOGO -->
    <div class="cobraKimonosLogoHolder">
        <img src="{{asset('/assets/images/Cobra-logo.png')}}" height="35px" width="100px" alt='cobra logo' />
   </div>
    
    <div class="rightbar">
        <!-- NAVIGATION MENU -->
        <ul class="navlinks">
            <!-- USING CHECKBOX HACK -->
            <input  class="checkbox" type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            
            <!-- NAVIGATION MENUS --> 
            <div class="menu">
                <li> <a href="{{url('/home')}}" >Home</a></li>
                <li class="services">
                <a href="/store">Store</a>
                <!-- DROPDOWN MENU -->
                <ul class="dropdown">
                    <li><a href='/category/men'>Men</a></li>
                    <li><a href='/category/women'>Women</a></li>
                    <li><a  href='/category/kids'>Kids</a></li>
                </ul>
                </li>
                <li><a href="/about">About</a></li>
                @if ($user)
                    <x-usernav/>
                @else
                    <x-loginnav />
                @endif
            </div>
        </ul>
    </div>
    <button  class="cartbtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
          </svg>
        <span> 
            @if ($numberOfItems > 0)
                {{$numberOfItems}}
            @endif
        </span>
    </button>
  </nav>