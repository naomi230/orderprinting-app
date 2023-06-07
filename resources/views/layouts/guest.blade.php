<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>
       
       input{
    height:50px;
    width:100%;       
    color: white !important;
    border: 1px solid transparent;
    background:rgba(255, 255, 255, 0.2);
    border-radius: 40px;
    padding: 10px 60px;
    margin: 5px 0;
    box-sizing: border-box;
       }
        input:hover{
          background: rgba(255, 255, 255, 0.08);
        }

    label{
      height:100%;
      font-weight:400;
        
  }

    h2{
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size: 1.75rem;
      font-weight:400;
    }

    button {
    height:50px;
    width:100%;       
    color: black !important;
    border: 1px solid transparent;
    background:pink;
    border-radius: 40px;
    padding: 10px 60px;
    margin: 5px 0;
    box-sizing: border-box;

    
    }

    button:hover{
      background:rgb(250, 162, 176);
      color:black;
    }
    a{
      color:white;
    }
        </style>
        

        <!-- Fonts -->
        
        <!--style-->
        <link href="{{asset ('loginAssets/assets/css/style.css') }}" rel="stylesheet">

        <!-- Scripts -->
       
    </head>

    
    <body style="       
         background-size: cover;  
         position: relative;
         width: 100%;
         height: calc(100vh - 110px); 
         font-size:large; 
         color:white;
         background-image: url({{ asset('loginAssets/images/bg.jpg') }});
     "
    >
              <header id="header"  style="background: rgba(25, 25, 25, 0.95);">
            <div >
        
              <h1 class="logo"><a href="index.html"></a></h1>
             
              <nav id="navbar" class="navbar">
                <ul>
                  <li><a class="nav-link scrollto" href="../index.html">Home</a></li>
                  <li><a class="nav-link scrollto" href="../index.html">Services</a></li>
                  <li><a class="nav-link scrscrolltoollto" href="../index.html">Pricing</a></li>
                 <li><a class="nav-link scrollto active" href="login-form-20/index.html">Log in</a></li>
                  <li><a class="nav-link scrollto" href="signup.html">Sign up</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav>
        
            </div>
          </header>
        <div >
            <div>
                <a href="/">
                    
                </a>
            </div>
            <div style="relative">
            <div style="position: absolute; top:50%; left:35%; padding-left:20px; padding-right:20px;">
              
            
                {{ $slot }}
            </div>
            </div>
        </div>
    </body>
</html>
