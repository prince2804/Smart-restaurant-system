<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

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

    </body>
</html>