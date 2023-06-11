<html>
  
@extends('layouts.stories_layout')
<head>
    @section('title', 'MyStories')
    <link rel='stylesheet' href="{{url('css/Mystories.css')}}" />
    <script src='{{ url("js/Stories.js") }}' defer></script>
    

</head>

   <body>
       @section('content',"In questa sezione puoi gestire le tue storie. Puoi raccontare di te qualsiasi cosa tu voglia, che sia una storia divertente, o triste. Se non vuoi piu'
    vedere una tua storia su questo sito puoi anche eliminarla con un semplice click! Attenzione, come nella vita di tutti i giorni ci saranno individui pronti ad insultare,
    ti invitiamo a segnalare qualsiasi commento che possa offendere la tua persona. Provvederemo presto a verificare ed eventualmente bannare l'utente in questione. Con
    affetto, lo staff di TMAY.")
       <button id="aggiungi">+</button>
       @section('article')
       
       @endsection 


   </body>
</html>
