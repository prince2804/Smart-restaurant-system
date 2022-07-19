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


  	<form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
  		
  		@csrf
    <table>
      <tr>
			<td>
			<label>Name</label></td>
      <td>
			<input style="color:blue;" type="text"  name="name" required="" placeholder="Enter name">
    </td>

  </tr>
  <tr>
		<td>
			
			<label>Speciality</label></td>
			<td><input style="color:blue;" type="text"  name="speciality" required="" placeholder="Enter the speciality"></td>


	
</tr>
<tr>

		<td>
			
			<label>Image</label></td>
      <td>
			<input  type="file"  name="image" required="" ></td>


	
</tr>
<tr>
	<td>
			
			
			<input style="color:blue;color: black; background-color:green ; width:70px; text-align: center;" type="submit"   value="Save">
<td>

</tr>


  	</form>



  	<table bgcolor="black">
  		
  		<tr>
  			<th style="padding:30px; ">Chef Name</th>
  			<th style="padding:30px; ">Speciality</th>
  			<th style="padding:30px; ">Image</th>
  			<th style="padding:30px; ">Update</th>
  			<th style="padding:30px; ">Delete</th>

  		</tr>


@foreach($data as $data)

  		<tr align="center">
  		
  			<td>{{$data->name}}</td>
  			<td>{{$data->speciality}}</td>
  			<td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
  			<td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>


  			<td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
  		</tr>

  		@endforeach




  	</table>

  
  </div>

   @include("admin.adminscript")


  </body>
</html>