<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div>
				       <img src="/../../../{{$detail->image}}" height="150" width="150"><br>
				       <b>Product Id :</b> {{$detail->adid}} <br>
				       <b>Product Name :</b> {{$detail->product_name}} <br>
				       <b>Product Quantity :</b> {{$detail->quantity}} <br>
					   <b> Price Per Unit:</b>{{$detail->price_per_unit}} <br>
					   <b> Location:</b> {{$detail->division}}  <br>
					   <b> Phone:</b> {{$detail->phone}} <br>
					   <a href="{{route('home')}}">Back to home</a>

					  


	
</div>

</body>
</html>

