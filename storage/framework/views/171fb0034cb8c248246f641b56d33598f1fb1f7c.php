<html>


<head>
    <meta charset="utf-8" />
    <title>TMAY</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href=" <?php echo e(url('css/mhw3.css')); ?>" />
    <script src='<?php echo e(url("js/mhw3.js")); ?>' defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet" />
   
</head>

<body>
    <nav>
        <span id="logo">TMAY</span>
        <a href="<?php echo e(url('/')); ?>"> Accedi</a>
        <a href="ciao.com"> Lista</a>
        <a href="ciao.com">Contatti</a>
        <a id="Logout" href="<?php echo e(url('logout')); ?>">Logout</a>
         <span id='username'><?php echo e($username); ?></span>

       

    </nav>


    <header>
        
        <div id="overlay">
            <h1>
                TELL ME ABOUT YOU<br /> Frasi, quiz e le vostre storie...
            </h1>
        </div>
    </header>

    <article>
        Cerchi frasi per una foto? Cerchi una gif che ti faccia ridere? Cerchi un quiz per scoprire che tipo di persona sei? Vuoi leggere
        le storie di altri? Vuoi raccontare la tua? Bene, sei nel posto giusto. Benvenuti su Tmay, dove puoi sempre scoprire qualcosa di nuovo su
        di te!

    </article>

    <div id='chat'>
        Chat <div id="pallino"></div>
    </div>



    <nav id='main'>
        <a href=" <?php echo e(url('frasi')); ?>"> Frasi&Gifs</a>
        <a href="<?php echo e(url('quiz')); ?>"> Quiz</a>
        <a href="<?php echo e(url('otherstories')); ?>">Storie</a>
        <a href="<?php echo e(url('mystories')); ?>">Raccontati</a>
    </nav>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\hw2\resources\views/homepage.blade.php ENDPATH**/ ?>