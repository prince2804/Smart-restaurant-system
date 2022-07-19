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
   
   <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
  </head>
  <body>
    
   <div class="container-scroller">
     
  	<?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  	<form action="<?php echo e(url('/uploadchef')); ?>" method="Post" enctype="multipart/form-data">
  		
  		<?php echo csrf_field(); ?>
    <table>
      <tr>
			<td>
			<label>Name</label></td>
      <td>
			<input style="color:blue;" type="text"  name="name" required="" placeholder="Enter name">
    </td>

  </tr>
  <tr>
		<td>
			
			<label>Speciality</label></td>
			<td><input style="color:blue;" type="text"  name="speciality" required="" placeholder="Enter the speciality"></td>


	
</tr>
<tr>

		<td>
			
			<label>Image</label></td>
      <td>
			<input  type="file"  name="image" required="" ></td>


	
</tr>
<tr>
	<td>
			
			
			<input style="color:blue;color: black; background-color:green ; width:70px; text-align: center;" type="submit"   value="Save">
<td>

</tr>


  	</form>



  	<table bgcolor="black">
  		
  		<tr>
  			<th style="padding:30px; ">Chef Name</th>
  			<th style="padding:30px; ">Speciality</th>
  			<th style="padding:30px; ">Image</th>
  			<th style="padding:30px; ">Update</th>
  			<th style="padding:30px; ">Delete</th>

  		</tr>


<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  		<tr align="center">
  		
  			<td><?php echo e($data->name); ?></td>
  			<td><?php echo e($data->speciality); ?></td>
  			<td><img height="100" width="100" src="/chefimage/<?php echo e($data->image); ?>"></td>
  			<td><a href="<?php echo e(url('/updatechef',$data->id)); ?>">Update</a></td>


  			<td><a href="<?php echo e(url('/deletechef',$data->id)); ?>">Delete</a></td>
  		</tr>

  		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




  	</table>

  
  </div>

   <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html><?php /**PATH C:\xampp\htdocs\Restaurant-master\resources\views/admin/adminchef.blade.php ENDPATH**/ ?>