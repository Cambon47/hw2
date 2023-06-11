<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Frasi</title>
    <link rel="stylesheet" href="<?php echo e(url('css/mhw3.css')); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script> const BASE_URL = "<?php echo e(url('/')); ?>/";</script>
    <script src='<?php echo e(url("js/mhw3.js")); ?>' defer="true"></script>
</head>


<body>
    <nav>Cerca una frase tramite  una parola presente nella frase o una GIF</nav>
    <form  >

        <label><input type='text' name="query" ></label>
        <input type='submit' value='Cerca nel sito'id='bar'>


        <select name='tipo' id='tipo'>
            <option value='frase'>Frase</option>
            <option value='gif'>GIF</option>
        </select>

    </form>


    <article id="container">
    </article>
   

    <section id="lateral">
        <img src="https://thumbs.gfycat.com/BareFreshAndeancondor-max-1mb.gif">
        
    </section>

    <section id="modal-view" class="hidden">
    </section>
     
    <div id='chat'> Chat <div id="pallino"></div> </div>

</body>


</html>

>
<?php /**PATH C:\xampp\htdocs\hw2\resources\views/frasi.blade.php ENDPATH**/ ?>