<!DOCTYPE html>
<html>
<head>
	<title>Word Count</title>
</head>
<body>
	<h3>Count Word</h3>
	<form action="{{url('words/counts')}}" method="POST">
		@csrf

		<textarea cols="30" rows="5" name="count_word"></textarea><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>