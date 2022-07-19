<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


<!DOCTYPE html>
<html lang="en">
  <head>

  	<base href="/public">
   
   <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
  </head>
  <body>
    
   <div class="container-scroller">
     
  	<?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



  	<div style="position: relative; top: 60px; right: -150px">
  		
  		<form action="<?php echo e(url('/update',$data->id)); ?>" method="post" enctype="multipart/form-data">

  			<?php echo csrf_field(); ?>

  			
  			<div>
  				<label>Title</label>
  				<input style="color:blue;" type="text" name="title" value="<?php echo e($data->title); ?>" required>
  			</div>

  			<div>
  				<label>Price</label>
  				<input style="color:blue;" type="num" name="price" value="<?php echo e($data->price); ?>" required>
  			</div>

  			

  			<div>
  				<label>Description</label>
  				<input style="color:blue;" type="text" name="description" value="<?php echo e($data->description); ?>" required>
  			</div>

  			<div>
  				<label>old Image</label>
  				<img height="200" width="200" src="/foodimage/<?php echo e($data->image); ?>">
  			</div>


  			<div>
  				<label>New Image</label>
  				<input type="file" name="image"  >
  			</div>

  			<div>
  				
  				<input style="color: black" type="submit" value="Save" >
  			</div>


  		</form>



      <div>

  
  </div>

   <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html><?php /**PATH C:\xampp\htdocs\Restaurant-master\resources\views/admin/updateview.blade.php ENDPATH**/ ?>