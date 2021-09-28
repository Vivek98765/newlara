<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>Student Management | Add</title>
</head>
<body>
@if (session('status'))
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  {{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert">×</button>
  {{ session('failed') }}
</div>
@endif
<form action = "/create" method = "post">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <table>
  <tr>
  <td>First Name</td>
  <td><input type='text' name='first_name' /></td>
  <tr>
  <td>Last Name</td>
  <td><input type="text" name='last_name'/></td>
  </tr>
  <tr>
  <td>City Name</td>
  <td>
  <select name="city_name">
  <option value="bbsr">Bhubaneswar</option>
  <option value="cuttack">Cuttack</option>
  </select></td>
  </tr>
  <tr>
  <td>Email</td>
  <td><input type="text" name='email'/></td>
  </tr>

  <tr>
  <td colspan = '2'>
  <input type = 'submit' value = "Add student"/>
  </td>
  </tr>
  </table>
</form>
</body>
</html>