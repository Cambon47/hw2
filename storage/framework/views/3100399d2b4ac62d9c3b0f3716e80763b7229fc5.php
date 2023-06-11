<html>
    <head>
        <title>TMAY-<?php echo $__env->yieldContent('title'); ?> </title>
        <script> const BASE_URL = "<?php echo e(url('/')); ?>/";
                        const csrf_token = '<?php echo e(csrf_token()); ?>';
        </script>
        <meta name="viewport"
            content="width=device-width, initial-scale=1" />
    </head>
   <body>
       
       <section>
           <?php echo $__env->yieldContent('content'); ?>
       </section>
          
       <article>
           <?php $__env->startSection('article'); ?>
       <?php echo $__env->yieldSection(); ?>
       </article>
   </body>

</html>
<?php /**PATH C:\xampp\htdocs\hw2\resources\views/layouts/stories_layout.blade.php ENDPATH**/ ?>