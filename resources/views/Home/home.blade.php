<html>
<head>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body class="main">

    <div class="container"> </div>
	<div class="mrq">
	<marquee >Agriculture is the largest employment sector in Bangladesh. The performance of this sector has an overwhelmig impact on major macroeconomic objectives like employment generation, poverty alleviation, human resources development,food security etc.A plurality of Bangladeshis earn their living from agriculture. Although rice and jute are the primary crops, wheat is assuming greater importance. Tea is grown in the northeast. Because of Bangladesh's fertile soil and normally ample water supply, rice can be grown and harvested three times a year in many areas. Due to a number of factors, Bangladesh's labour-intensive agriculture has achieved steady increases in food grain production despite the often unfavorable weather conditions. These include better flood control and irrigation, a generally more efficient use of fertilizers, and the establishment of better distribution and rural credit networks. With 35.8 million metric tons produced in 2000, rice is Bangladesh's principal crop. National sales of the classes of insecticide used on rice, including granular carbofuran, synthetic pyrethroids, and malathion exceeded 13,000 tons of formulated product in 2003.[1] The insecticides not only represent an environmental threat, but are a significant expenditure to poor rice farmers. The Bangladesh Rice Research Institute is working with various NGOs and international organisations to reduce insecticide use in rice.[2] </marquee>
	</div>
	
    <div class="container"> 
  		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<ul class="navbar-nav">
	     		<li class="nav-item active" > <a href="#" class="nav-link" > Home </a></li>
	     		<li class="nav-item" > <a href="{{route('profile')}}" class="nav-link" > Profile </a></li>
		 		<li class="nav-item"> <a href="#" class="nav-link" > Logout</a> </li>
			</ul>
		</nav>
	</div>

<form action="" method="post" enctype="multipart/form-data" name="user"><br><br><br>

<div class="container">
	<div class="row">
		@foreach($add as $ad)
		<div class="col-sm-6">		
		  	<div  class="card text-center" style="width: 18rem;">

					
				<img src="{{$ad->image}}" class="card-img-top" class="rounded mx-auto d-block" height="150" width="150">
				<div  class="card-body" >
					<b class="card-title" >Product Name :</b>{{$ad->product_name}}<br>
					<b class="card-text"> Location:</b>{{$ad->division}}<br>
					<a href="{{route('add.details',['id'=> $ad->adid])}}" class="btn btn-primary">Details</a>
				</div>	   							
			</div>
			<br><br>
		</div>
		@endforeach		
	</div>	   
</div>		
		
 </form>
 
     
</html>