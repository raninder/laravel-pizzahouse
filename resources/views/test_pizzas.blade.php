<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
             <div class="content">
                <div class="title m-b-md">
                    Pizza List
                
              </div> 
               <p> {{$type}} -- {{$base}} -- {{$price}}</p>
               
              @if($price > 15)
              <p>This Pizza is expensive</p>
              @elseif($price < 5) 
                <p>This Pizza is cheap</p>
              @else
              <p>This Pizza is nominal priced</p>
              @endif

              @unless($base === 'cheesy crust')
              <p>You dont have cheesy pizza</p>
              @endunless

              @for($i = 0; $i < 5; $i++)
              <p> value of i is {{$i}} </p>
              @endfor


              <!-- include regular php inside bundle -->
              @php
                 $name = "Dhillon";
                 echo ($name);
              @endphp 
              </div>
        </div>
        </div>
    </body>
</html>




