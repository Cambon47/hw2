<html>
  
@extends('layouts.stories_layout')
<head>
    @section('title', 'OtherStories')
    <link rel='stylesheet' href="{{url('css/Mystories.css')}}" />
    <script src='{{url("js/OtherStories.js")}}' defer></script>
</head>
<body>

    @section('content')In questa sezione puoi trovare le ultime storie postate dagli utenti di TMAY. Puoi lasciare un like o un commento. Niente insulti, se volete fare una critica,
    che sia costruttiva. Se ritenete che una storia abbia contenuto volgare, non esitate a segnalare. Sappiate che non è possibile lasciare un like o un commento
    senza essere autenticati. Buon proseguimento!
    <form >
          <label>
              <input type="text" name="search"><input type="submit" value="Cerca" />
              <select name="tipo">
                  <option value="created_at">Data</option>
                  <option value="n_likes">Likes</option>

              </select>
          </label>
      </form>
    @endsection
    @section('article')

   

       

       @endsection
   

</body>

</html>
