<html>
<head>
    <meta charset="utf-8" />
    <title>TMAY</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo e(url('css/SelectedStory.css')); ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet" />
    <script> const BASE_URL = "<?php echo e(url('/')); ?>/";</script>
    <script src='<?php echo e(url("js/comments.js")); ?>' defer></script>
</head>


<body>

 <article>

  <span id="<?php echo e($id); ?>"> </span>
  <section>

            <form action="/otherstories/comments_s/<?php echo e($id); ?>" method="post">
                 <?php echo csrf_field(); ?>
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
<?php /**PATH C:\xampp\htdocs\hw2\resources\views/comments.blade.php ENDPATH**/ ?>