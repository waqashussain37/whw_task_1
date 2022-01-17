<!DOCTYPE html>
<html>
<head>
	<title>Remove Spacing and count character</title>
</head>
<body>
	<h3>Remove Spacing and count character</h3>
	<form action="{{url('remove/space')}}" method="POST">
		@csrf
		<textarea cols="30" rows="5" name="remove_spacing"></textarea><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>