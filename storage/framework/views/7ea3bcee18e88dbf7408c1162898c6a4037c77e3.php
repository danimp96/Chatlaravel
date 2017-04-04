<?php $__env->startSection('content'); ?>
	<div class="row">
    <h1><CENTER> CHATS</CENTER></h1>
    <?php $__currentLoopData = $chats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xs-6 col-sm-4 col-md-12 text-center">

        <a href="<?php echo e(url('/chat/chat/' . $chat['idgrupo'] )); ?>">
            
            <button class="btn btn-primary" type="submit"><?php echo e($chat['nombre']); ?></button>
            
        </a>

    </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>