<?php $__env->startSection('title'); ?>
	Registracija
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<?php echo Form::open(['route' => 'register.create']); ?>

		<input type="text" name="neme">
		<input type="email" name="email">
		<input type="password" name="password">

		<button type="submit">Registruj se</button>
		<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>