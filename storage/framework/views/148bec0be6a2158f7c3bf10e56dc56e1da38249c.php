<html>
  

<head>
    <?php $__env->startSection('title', 'MyStories'); ?>
    <link rel='stylesheet' href="<?php echo e(url('css/Mystories.css')); ?>" />
    <script src='<?php echo e(url("js/Stories.js")); ?>' defer></script>
    

</head>

   <body>
       <?php $__env->startSection('content',"In questa sezione puoi gestire le tue storie. Puoi raccontare di te qualsiasi cosa tu voglia, che sia una storia divertente, o triste. Se non vuoi piu'
    vedere una tua storia su questo sito puoi anche eliminarla con un semplice click! Attenzione, come nella vita di tutti i giorni ci saranno individui pronti ad insultare,
    ti invitiamo a segnalare qualsiasi commento che possa offendere la tua persona. Provvederemo presto a verificare ed eventualmente bannare l'utente in questione. Con
    affetto, lo staff di TMAY."); ?>
       <button id="aggiungi">+</button>
       <?php $__env->startSection('article'); ?>
       
       <?php $__env->stopSection(); ?> 


   </body>
</html>

<?php echo $__env->make('layouts.stories_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/mystories.blade.php ENDPATH**/ ?>