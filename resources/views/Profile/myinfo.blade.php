<html>

<div class="mrq">
	<marquee >Agriculture is the largest employment sector in Bangladesh. The performance of this sector has an overwhelmig impact on major macroeconomic objectives like employment generation, poverty alleviation, human resources development,food security etc.A plurality of Bangladeshis earn their living from agriculture. Although rice and jute are the primary crops, wheat is assuming greater importance. Tea is grown in the northeast. Because of Bangladesh's fertile soil and normally ample water supply, rice can be grown and harvested three times a year in many areas. Due to a number of factors, Bangladesh's labour-intensive agriculture has achieved steady increases in food grain production despite the often unfavorable weather conditions. These include better flood control and irrigation, a generally more efficient use of fertilizers, and the establishment of better distribution and rural credit networks. With 35.8 million metric tons produced in 2000, rice is Bangladesh's principal crop. National sales of the classes of insecticide used on rice, including granular carbofuran, synthetic pyrethroids, and malathion exceeded 13,000 tons of formulated product in 2003.[1] The insecticides not only represent an environmental threat, but are a significant expenditure to poor rice farmers. The Bangladesh Rice Research Institute is working with various NGOs and international organisations to reduce insecticide use in rice.[2] </marquee>
	</div>
	
   <div class="navigation">
	<ul>
	     
	  
		
		  <li> <a href="/logout" > Logout</a> </li>
		  <li> <a href="{{route('profile')}}">Back to profile</a> </li>

		  
		  
	
	</ul>
	</div>


<div>
					   <img src="" title="Profile Pic" height="150" width="150"><br>
				       <b>First Name :</b> {{$info->First_Name}} <br>
				       <b>Last Name :</b> {{$info->Last_Name }} <br>
					   <b>User Name:</b> {{$info->User_Name}} <br>
					   <b>Password:</b> {{$info->Pass}} <br>
					   <b>Phone :</b> {{$info->Phone }} <br>
				       <b>Location :</b> {{$info->Division}} <br>
					   <b>Email:</b> {{$info->Email }} <br>
					   <b>Gender:</b> {{$info->Gender }} <br>
					   <a href="update_info/<%=ID %>" style="font-size:30px">Update Info</a><span style="font-size:30px">
	
</div>