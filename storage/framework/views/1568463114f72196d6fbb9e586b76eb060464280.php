<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>Delete Added Post</h2>
	<a href="<?php echo e(route('profile')); ?>">Back to Profile</a>
	<br/><br/>
	
	
		<div>
			<img src="/../../../<?php echo e($details->image); ?>" height="150" width="150">
			<span><h2>Product Name:<u><?php echo e($details->product_name); ?></u></h2></span>  	
		
			<span><h2>Product Category:<u><?php echo e($details->product_category); ?></u></h2></span>
		
		</div>
	
	<h3>This cannot be undone. Are you sure?</h3>

	<form method="post">
		<?php echo e(csrf_field()); ?>

		<input type="submit" value="Confirm">
		<input type="hidden" name="adid" value="<?php echo e($details->adid); ?>">
	</form>
</body>
</html>