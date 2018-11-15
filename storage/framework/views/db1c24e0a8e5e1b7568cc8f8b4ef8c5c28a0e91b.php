<html>
<body class="main">
	
	
	<div class="mrq">
	<marquee >Agriculture is the largest employment sector in Bangladesh. The performance of this sector has an overwhelmig impact on major macroeconomic objectives like employment generation, poverty alleviation, human resources development,food security etc.A plurality of Bangladeshis earn their living from agriculture. Although rice and jute are the primary crops, wheat is assuming greater importance. Tea is grown in the northeast. Because of Bangladesh's fertile soil and normally ample water supply, rice can be grown and harvested three times a year in many areas. Due to a number of factors, Bangladesh's labour-intensive agriculture has achieved steady increases in food grain production despite the often unfavorable weather conditions. These include better flood control and irrigation, a generally more efficient use of fertilizers, and the establishment of better distribution and rural credit networks. With 35.8 million metric tons produced in 2000, rice is Bangladesh's principal crop. National sales of the classes of insecticide used on rice, including granular carbofuran, synthetic pyrethroids, and malathion exceeded 13,000 tons of formulated product in 2003.[1] The insecticides not only represent an environmental threat, but are a significant expenditure to poor rice farmers. The Bangladesh Rice Research Institute is working with various NGOs and international organisations to reduce insecticide use in rice.[2] </marquee>
	</div>
	
   <div class="navigation">
	<ul>
	    
		
		  <li> <a href="/logout" > Logout</a> </li>
		  <li> <a href="<?php echo e(route('profile')); ?>">Back to profile</a> </li>

		  
		  
	
	</ul>
	</div>

	
	
	

	<form action="" class="add" method="post" name="adpost" enctype="multipart/form-data">

		<?php echo e(csrf_field()); ?>


		<div class="pname">
			<label>Product Name:
			<input type="text"  id="pname" name="pname" onkeyup="validation()" ></label>
			<span id="msg1"></span>

		</div>
		</br>
		<div>
			<label>Product Category:
				<select id="" name="product_category" onkeyup="validation()">

					<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($cat->cname); ?>"><?php echo e($cat->cname); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					  


				</select></label>
				<span id="msg2"></span>
		</div>
		</br>
		<div>
			<label>Product Image:</label>

		<input type="file" name="image">

		</div>
	
		
		<span id="msg3"></span>
		
		</br>
		
		<div>
		<label>Quantity:
		<input type="text"  id="pquality" name="quantity" onkeyup="validation()" ></label>
		<span id="msg4"></span>
		</div>
		</br>
		<div>
		<label>Price Per Unit:
		<input type="text"  id="pprice" name="price_per_unit" onkeyup="validation()"  ></label>
		<span id="msg5"></span>
		</div>
		</br>
		<div>
		<label>Description:
		<input type="text"  id="pdiscribetion" name="product_description" onkeyup="validation()" ></label>
		<span id="msg6"></span>
		</div>
		</br>
		<div>
		<label>Phone:
		<input type="text"  id="pphone" name="phone" onkeyup="validation()" ></label>
		<span id="msg7"></span>
		</div>
		</br>
		<div>
		<label>Division:
				<select id="" name="product_division" onkeyup="validation()">
					  <option value="Chittagong">Chittagong</option>
					  <option value="Rajshahi">Rajshahi</option>
					  <option value="Meat">Khulna</option>
					  <option value="Barisal">Barisal</option>
					  <option value="Dhaka">Dhaka</option>
					  <option value="Comilla">Comilla</option>


				</select></label>
				<span id="msg8"></span>
		</div>
		</br>
		
		<label><div><input type="submit" class="button" onclick="return validation()" value="Submit" /></div></label>
		

		

	</form>
	
	</body>
	
