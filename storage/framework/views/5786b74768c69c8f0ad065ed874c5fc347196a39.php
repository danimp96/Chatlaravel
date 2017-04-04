<?php $__env->startSection('content'); ?>

    <div class="row">
    	<div class="col-sm-8 col-md-12 text-center">
    		<h1></h1>
   	 	</div>
   	 	<form method="post" action="">
   		 	<?php echo e(csrf_field()); ?>

	    	<div class="col-sm-8 col-md-2">
	    		<label for="user">Usuario</label>
    			<input type="text" class="form-control" id="user" placeholder="Usuario">
	    	</div>
	    	<div class="col-sm-8 col-md-10">
	    		<textarea class="form-control" rows="20" disabled="true">
	    			<?php $__currentLoopData = $mensajes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $mensaje): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    				<?php echo e($mensaje['user']); ?> - <?php echo e($mensaje['texto']); ?>

	    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	    		</textarea>
	    		<textarea class="form-control" rows="3"></textarea>  
	    		<button type="submit" class="btn btn-default col-sm-12">Enviar</button>	
	    		<label type="text" id="" hidden="true"></label>
	    	</div>
		</form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>