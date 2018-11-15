<html>

<form>
{{ csrf_field() }}

<div class="mrq">
	
	<marquee >Agriculture is the largest employment sector in Bangladesh. The performance of this sector has an overwhelmig impact on major macroeconomic objectives like employment generation, poverty alleviation, human resources development,food security etc.A plurality of Bangladeshis earn their living from agriculture. Although rice and jute are the primary crops, wheat is assuming greater importance. Tea is grown in the northeast. Because of Bangladesh's fertile soil and normally ample water supply, rice can be grown and harvested three times a year in many areas. Due to a number of factors, Bangladesh's labour-intensive agriculture has achieved steady increases in food grain production despite the often unfavorable weather conditions. These include better flood control and irrigation, a generally more efficient use of fertilizers, and the establishment of better distribution and rural credit networks. With 35.8 million metric tons produced in 2000, rice is Bangladesh's principal crop. National sales of the classes of insecticide used on rice, including granular carbofuran, synthetic pyrethroids, and malathion exceeded 13,000 tons of formulated product in 2003.[1] The insecticides not only represent an environmental threat, but are a significant expenditure to poor rice farmers. The Bangladesh Rice Research Institute is working with various NGOs and international organisations to reduce insecticide use in rice.[2] </marquee>
	</div>
	
   <div class="navigation">
	<ul>
	     <li> <a href="../home" > Home </a></li>
	     
		
		  <li> <a href="../logout" > Logout</a> </li>

		  
		  
	
	</ul>
	</div>



<div>
				       
				       <h1> User Name : {{$user->First_Name}} {{$user->Last_Name}}</h1> <br>
				       <a href="{{route('adpost')}}" style="font-size:30px">Add Post</a><span style="font-size:30px"> || </span><a href="{{route('information',['id'=>$user->ID])}}" style="font-size:30px"> My Information </a>
				     
	
</div>

  @if($add)

<div class="dbtable">
		<h2><u>My Adds :</u></h2>
		@foreach($add as $info)

		<table border=1px>	
		    <tr>  
		      	<td>
		      		<div class="dbinfo">
		      			<b>Product ID :</b> {{$info->adid }} <br>
				       <b>Product Name :</b> {{$info->product_name}} <br>
				       <b>Product Quantity :</b> {{$info->quantity}} <br>
					   <b> Price Per Unit:</b> {{$info->price_per_unit}} <br>
					   <b> Location:</b> {{$info->division}} <br>
					   <b> Phone:</b> {{$info->phone}} <br>
					   <a href="{{route('delete_view',['id'=> $info->adid])}}">Delete</a>
	
					</div>
				</td>
				<td><img src="{{$info->image}}" height="150" width="150"></td>
				
			</tr>
			<tr><br><br></tr>	
		</table>	

		@endforeach


				
		</div>

		@endif


		</form>