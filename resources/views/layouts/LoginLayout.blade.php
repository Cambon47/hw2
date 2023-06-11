<html>

    <head>
        @section('head')
        <title>TMAY-@yield('title') </title>
        <meta name="viewport"
            content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="{{ url('css/Registrazione.css') }}" />
        @show
    </head>

     <body>
         @section('form')
         <h2>TMAY</h2>
         <form method='post'>
                @csrf
                <label><span>Username</span> <input name='username' id='username' value='{{ old("username") }}'></label>
                <label><span>Password</span> <input type='password' name='password' id='password'  /></label>
             
             @show

            </form>
         

     </body>




</html>
