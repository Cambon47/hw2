@extends('layouts.LoginLayout')
<html>

    
        @section('head')
        @parent
        <script src='{{url("js/Registrazione.js")}}' defer></script>
        @endsection
        @section('title', 'Registrazione')
       
       

    
    <body>
<main>
    
    
              @section('form')
                @csrf
                @parent
                <label> <span>Conferma password</span><input type='password' name='confirm_password' id='confirm_password'  /></label>
                <label>  <span>Email</span> <input name='email' id='email' value='{{ old("email") }}' /> </label>
                <label>    <span>Conferma email</span> <input name='confirm_email' id='confirm_email' value='{{ old("confirm_email") }}' /> </label>
               
    <label>
        <input type="checkbox" /><span>Accetto le condizioni e i termini di TMAY</span>
    </label>
        <label>
            &nbsp; <input type='submit' value='Invia dati' />
        </label>
       
        @endsection
   
    </main>
        <span class="error">@if($error == 'empty_fields')
               Compilare tutti i campi.
            @elseif($error == 'bad_passwords')
                  Le password non corrispondono.
                  @elseif($error == 'existing')
               Nome utente già esistente.
            @elseif($error == 'existing_e')
               Email utilizzata.
            @elseif($error == 'wrong_u')
               Username non valido.
            @elseif($error == 'wrong_e')
               Email non valida.
            @elseif($error == 'bad_email')
                  Le email non corrispondono.

        @endif
        </span>
    </body>
</html>

