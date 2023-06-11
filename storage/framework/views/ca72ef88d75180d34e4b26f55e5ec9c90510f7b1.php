<html>

<head>
    <?php $__env->startSection('head'); ?>
        <?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
        
    <?php $__env->startSection('title','Login'); ?>
    <?php $__env->stopSection(); ?>
    </head>
    <body>
        <?php if($error == 'empty_fields'): ?>
        <section class='error'>Compilare tutti i campi.</section>
        <?php endif; ?>
        <?php if($error == 'wrong'): ?>
        
        <section class='error'>Credenziali errate.</section>
        <?php endif; ?>
        <main>
            <?php $__env->startSection('form'); ?>
              <?php echo \Illuminate\View\Factory::parentPlaceholder('form'); ?>
            <label>
                &nbsp; <input type='submit' value='Accedi' />
            </label>
            <a href="<?php echo e(url('register')); ?>">Non sei ancora registrato?</a>
            <?php $__env->stopSection(); ?>
            
        </main>
       
    </body>
</html>


<?php echo $__env->make('layouts.LoginLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/login.blade.php ENDPATH**/ ?>