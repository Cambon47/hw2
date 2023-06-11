<html>

    
        <?php $__env->startSection('head'); ?>
        <?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
        <script src='<?php echo e(url("js/Registrazione.js")); ?>' defer></script>
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('title', 'Registrazione'); ?>
       
       

    
    <body>
<main>
    
    
              <?php $__env->startSection('form'); ?>
                <?php echo csrf_field(); ?>
                <?php echo \Illuminate\View\Factory::parentPlaceholder('form'); ?>
                <label> <span>Conferma password</span><input type='password' name='confirm_password' id='confirm_password'  /></label>
                <label>  <span>Email</span> <input name='email' id='email' value='<?php echo e(old("email")); ?>' /> </label>
                <label>    <span>Conferma email</span> <input name='confirm_email' id='confirm_email' value='<?php echo e(old("confirm_email")); ?>' /> </label>
               
    <label>
        <input type="checkbox" /><span>Accetto le condizioni e i termini di TMAY</span>
    </label>
        <label>
            &nbsp; <input type='submit' value='Invia dati' />
        </label>
       
        <?php $__env->stopSection(); ?>
   
    </main>
        <span class="error"><?php if($error == 'empty_fields'): ?>
               Compilare tutti i campi.
            <?php elseif($error == 'bad_passwords'): ?>
                  Le password non corrispondono.
                  <?php elseif($error == 'existing'): ?>
               Nome utente già esistente.
            <?php elseif($error == 'existing_e'): ?>
               Email utilizzata.
            <?php elseif($error == 'wrong_u'): ?>
               Username non valido.
            <?php elseif($error == 'wrong_e'): ?>
               Email non valida.
            <?php elseif($error == 'bad_email'): ?>
                  Le email non corrispondono.

        <?php endif; ?>
        </span>
    </body>
</html>


<?php echo $__env->make('layouts.LoginLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/Registrazione.blade.php ENDPATH**/ ?>