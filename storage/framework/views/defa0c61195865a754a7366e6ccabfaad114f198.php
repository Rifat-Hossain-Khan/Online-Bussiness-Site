<!DOCTYPE html>
<head>
<title>Login</title>
</head>
<body>
<form id="loginform" name="loginform" method="post">
	<?php echo e(csrf_field()); ?>

	<div class="mrq">
	<marquee >Agriculture is the largest employment sector in Bangladesh. The performance of this sector has an overwhelmig impact on major macroeconomic objectives like employment generation, poverty alleviation, human resources development,food security etc.A plurality of Bangladeshis earn their living from agriculture. Although rice and jute are the primary crops, wheat is assuming greater importance. Tea is grown in the northeast. Because of Bangladesh's fertile soil and normally ample water supply, rice can be grown and harvested three times a year in many areas. Due to a number of factors, Bangladesh's labour-intensive agriculture has achieved steady increases in food grain production despite the often unfavorable weather conditions. These include better flood control and irrigation, a generally more efficient use of fertilizers, and the establishment of better distribution and rural credit networks. With 35.8 million metric tons produced in 2000, rice is Bangladesh's principal crop. National sales of the classes of insecticide used on rice, including granular carbofuran, synthetic pyrethroids, and malathion exceeded 13,000 tons of formulated product in 2003.[1] The insecticides not only represent an environmental threat, but are a significant expenditure to poor rice farmers. The Bangladesh Rice Research Institute is working with various NGOs and international organisations to reduce insecticide use in rice.[2] </marquee>
	</div>
     <input type="text" class="input" name="uname" onkeyup="validation()" placeholder="Username" /> <br> <br>
	
     <input type="password" class="input" name="pass" onkeyup="validation()" placeholder="Password" /> <br> <br>

     <input type="submit" class="loginbutton" onclick="return validation()" value="Login" /><br> <br>
	 
	 
	 

<a href="#" style="font-size:20px ">Sing Up</a><br> <br>
<a href="#" style="font-size:20px ">Back to Home</a>

</form>
<?php if($errors->any()): ?>
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($err); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
<?php endif; ?>

<?php if(session('message')): ?>
	<?php echo e(session('message')); ?>

<?php endif; ?>

</body>

</html>