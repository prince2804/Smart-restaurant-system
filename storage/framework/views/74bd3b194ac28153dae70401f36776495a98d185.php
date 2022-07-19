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


  	<div style="position: relative; top: 60px; right: -150px">
  		
  		<form action="<?php echo e(url('/uploadfood')); ?>" method="post" enctype="multipart/form-data">

  			<?php echo csrf_field(); ?>

  			<table style="border :1px solid " >
          <tr>
  			   <td>
  				<label><b>Title</b></label></td>
  				<td><input style="color:blue;" type="text" name="title" placeholder="Write a title" required></td>
      </tr>
      <tr>
  			<td>
  				<label>Price</label></td>
  			<td><input style="color:blue;" type="num" name="price" placeholder="price" required></td>
  			
      </tr>
      <tr>
  			<td>
  				<label>Image</label></td>
  				<td><input type="file" name="image"  required></td>
      </tr>
      <tr>
  			<td>
  				<label>Description</label></td>
  				<td><input style="color:blue;" type="text" name="description" placeholder="Description" required></td>
      </tr>
      <tr>
        <td></td>
  				<td><input style="color: black; background-color:green ; width:70px; text-align: center;" type="submit" value="Save" ></td>
      </tr>
        </table>
  		</form>
      <div style="overflow: scroll;height: 500px;width: 900px">
        
        <table bgcolor="black">
          <tr>
            <th style="padding: 30px">Food Name</th>
            <th style="padding: 30px">Price</th>
            <th style="padding: 30px">Description</th>
            <th style="padding: 30px">Image</th>
            <th style="padding: 30px">Delete</th>
          <th style="padding: 30px">Update</th>
            
          </tr>



          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <tr align="center">
            
            <td><?php echo e($data->title); ?></td>
            <td>₹ <?php echo e($data->price); ?></td>
            <td><?php echo e($data->description); ?></td>
            <td><img height="100" width="100" src="/foodimage/<?php echo e($data->image); ?>"></td>

            <td><a href="<?php echo e(url('/deletemenu',$data->id)); ?>">Delete</a></td>

            <td><a href="<?php echo e(url('/updateview',$data->id)); ?>">Update</a></td>



         </tr>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <tr></tr>
            <tr></tr>
        </table>


      </div>







  	</div>


    



</div>

   <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html><?php /**PATH C:\xampp\htdocs\Restaurant-master\resources\views/admin/foodmenu.blade.php ENDPATH**/ ?>