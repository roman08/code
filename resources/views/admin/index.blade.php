<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin - TK</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="row container">
		<div class="form-group col-md-6">
    		{{Form::label('name','Nombre')}}
    		{{Form::text('name', null ,['class'=>'form-control','placeholder'=>'nombre alternativo del producto', 'autocomplete'=>'off'])}}
		</div>
	</div>
</body>
</html>