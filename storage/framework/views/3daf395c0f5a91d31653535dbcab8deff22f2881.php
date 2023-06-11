<html>
  

<head>
    <?php $__env->startSection('title', 'OtherStories'); ?>
    <link rel='stylesheet' href="<?php echo e(url('css/Mystories.css')); ?>" />
    <script src='<?php echo e(url("js/OtherStories.js")); ?>' defer></script>
</head>
<body>

    <?php $__env->startSection('content'); ?>In questa sezione puoi trovare le ultime storie postate dagli utenti di TMAY. Puoi lasciare un like o un commento. Niente insulti, se volete fare una critica,
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
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('article'); ?>

   

       

       <?php $__env->stopSection(); ?>
   

</body>

</html>

<?php echo $__env->make('layouts.stories_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/otherstories.blade.php ENDPATH**/ ?>