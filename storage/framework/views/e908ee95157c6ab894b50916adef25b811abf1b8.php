<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div>
				       <img src="/../../../<?php echo e($detail->image); ?>" height="150" width="150"><br>
				       <b>Product Id :</b> <?php echo e($detail->adid); ?> <br>
				       <b>Product Name :</b> <?php echo e($detail->product_name); ?> <br>
				       <b>Product Quantity :</b> <?php echo e($detail->quantity); ?> <br>
					   <b> Price Per Unit:</b><?php echo e($detail->price_per_unit); ?> <br>
					   <b> Location:</b> <?php echo e($detail->division); ?>  <br>
					   <b> Phone:</b> <?php echo e($detail->phone); ?> <br>
					   <a href="<?php echo e(route('home')); ?>">Back to home</a>

					  


	
</div>

</body>
</html>

