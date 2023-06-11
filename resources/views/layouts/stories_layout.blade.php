<html>
    <head>
        <title>TMAY-@yield('title') </title>
        <script> const BASE_URL = "{{ url('/') }}/";
                        const csrf_token = '{{ csrf_token() }}';
        </script>
        <meta name="viewport"
            content="width=device-width, initial-scale=1" />
    </head>
   <body>
       
       <section>
           @yield('content')
       </section>
          
       <article>
           @section('article')
       @show
       </article>
   </body>

</html>
