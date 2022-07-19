<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
   
   @include("admin.admincss")
   
  </head>
  <body>
    
   <div class="container-scroller">
     
  	@include("admin.navbar")


  	<div style="position: relative; top: 60px; right: -150px">
  		
  		<form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

  			@csrf

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



          @foreach($data as $data)

          <tr align="center">
            
            <td>{{$data->title}}</td>
            <td>₹ {{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img height="100" width="100" src="/foodimage/{{$data->image}}"></td>

            <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>

            <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>



         </tr>

          @endforeach

            <tr></tr>
            <tr></tr>
        </table>


      </div>







  	</div>


    



</div>

   @include("admin.adminscript")


  </body>
</html>