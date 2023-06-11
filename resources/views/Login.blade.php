<html>
@extends('layouts.LoginLayout')
<head>
    @section('head')
        @parent
        
    @section('title','Login')
    @endsection
    </head>
    <body>
        @if($error == 'empty_fields')
        <section class='error'>Compilare tutti i campi.</section>
        @endif
        @if($error == 'wrong')
        
        <section class='error'>Credenziali errate.</section>
        @endif
        <main>
            @section('form')
              @parent
            <label>
                &nbsp; <input type='submit' value='Accedi' />
            </label>
            <a href="{{url('register')}}">Non sei ancora registrato?</a>
            @endsection
            
        </main>
       
    </body>
</html>

