<?php $__env->startSection('content'); ?>

    <div class="col-sm-8 col-md-12 text-center">
    	<h1>Crear Nuevo Chat</h1>
    </div>
    <form method="post" action="<?php echo e(url('chat/crear')); ?>">
    	
    	<?php echo e(csrf_field()); ?>

    	<div class="col-sm-8 col-md-4 text-center">
	    	
	    </div>
	    <div class="col-sm-8 col-md-4 text-center">
	    	<label for="group">Grupo</label>
    		<input type="text" class="form-control" id="group" name="group" placeholder="Nombre del grupo">
    		<br>
    		<button type="submit" class="btn btn-default col-sm-12">Crear</button>
	    </div>
    	<div class="col-sm-8 col-md-4 text-center">
	
	    </div>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>