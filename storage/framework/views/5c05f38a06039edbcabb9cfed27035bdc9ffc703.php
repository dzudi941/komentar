<?php $__env->startSection('content'); ?>
<main>
<div class="container">
    <div class="col-md-12">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <?php echo Form::open(['route' => 'home.store']); ?>

        <div class="row">
        <textarea class="col-md-12" name="name" placeholder="Ostavite svoj komentar" style="border-radius: 10px; resize: none; min-height: 200px;">
            
        </textarea>
        </div>
        <div class="row">
        <!--<input type="text" name="name">-->
        </div>
        <input type="submit" name="potvrda" value="Upisi" class="btn btn-warning col-md-12" style="margin-top: 20px; background-color: black;">
        <?php echo Form::close(); ?>

        <div class="col-md-12" style="margin-top: 20px;">
        
        <?php 
        function PrikazKomentara()
        {
            echo "TEST";
        }
        //PrikazKomentara();
         ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="col-md-12" style="background-color: #edf3f4; margin-bottom: 10px; border-radius: 10px; min-height: 100px;">
            <div class="col-md-10">
                <h4><?php echo e($product->name); ?></h4>
            </div>
            <div class="col-md-2">
            <?php echo e($product->created_at); ?>

            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        

        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>