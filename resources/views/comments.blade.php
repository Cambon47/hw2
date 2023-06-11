<html>
<head>
    <meta charset="utf-8" />
    <title>TMAY</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{url('css/SelectedStory.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet" />
    <script> const BASE_URL = "{{ url('/') }}/";</script>
    <script src='{{url("js/comments.js")}}' defer></script>
</head>


<body>

 <article>

  <span id="{{$id}}"> </span>
  <section>

            <form action="/otherstories/comments_s/{{$id}}" method="post">
                 @csrf
                <label>
                    <input type="text" name="Commento" placeholder="Inserisci qui il tuo commento" />
                </label>
                <label>
                    <input type="submit" value="Invia commento " />
                </label>
            </form>
       

  </section>
 </article>
</body>
