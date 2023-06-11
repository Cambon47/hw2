<html>

    <head>
        <?php $__env->startSection('head'); ?>
        <title>TMAY-<?php echo $__env->yieldContent('title'); ?> </title>
        <meta name="viewport"
            content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="<?php echo e(url('css/Registrazione.css')); ?>" />
        <?php echo $__env->yieldSection(); ?>
    </head>

     <body>
         <?php $__env->startSection('form'); ?>
         <h2>TMAY</h2>
         <form method='post'>
                <?php echo csrf_field(); ?>
                <label><span>Username</span> <input name='username' id='username' value='<?php echo e(old("username")); ?>'></label>
                <label><span>Password</span> <input type='password' name='password' id='password'  /></label>
             
             <?php echo $__env->yieldSection(); ?>

            </form>
         

     </body>




</html>
<?php /**PATH C:\xampp\htdocs\hw2\resources\views/layouts/LoginLayout.blade.php ENDPATH**/ ?>