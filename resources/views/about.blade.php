<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La mia prima pagina LARAVEL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
          
            header {
                width: 100%;
                height: 80px;
                background: #38D0F2;
            }

            nav {
                width: 100%;
                height: 100%;
                text-align: center;
            }

            .links {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 100%;
                /* background: lightcoral; */
            }
            ul, li, a {
                list-style: none;
                font-size: 20px;
                text-decoration: none;
                margin-left: 20px;
                color: white;
            }

            .wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 100%;
                margin-top: 50px;
            }

            .testo {
                color: #1B8EF2;
            }
        </style>
    </head>
    <body>
        <header>
           <nav>
               <ul class="links">
                   <li><a href=" {{route('homepage') }}">Homepage</a></li>
                   <li><a href=" {{route('chi_sono') }}">Chi Sono</a></li>
                   <li><a href=" {{route('book') }}">Portfolio</a></li>
                   <li><a href=" {{route('contatti') }}">Contatti</a></li>
               </ul>
           </nav>
        </header>

        <div class="wrapper">
            <h1 class="testo">Chi Sono</h1>
        </div>
    </body>
</html>
