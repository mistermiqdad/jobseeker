<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('includes.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    <?php if(view()->exists($plugin)): ?> <?php echo $__env->make($plugin, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php endif; ?>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <?php echo $__env->make('includes.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

    <?php echo $__env->make($page, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    
    <!--Footer-->
    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
</body>
</html>
