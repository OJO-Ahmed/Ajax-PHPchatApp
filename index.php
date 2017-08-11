<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> First chat App</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>
<body>
<div id="container">
	<div id="chat_box">
		
	</div>
	<form method="POST" action='send.php'>
	<input type="text" id="name" name="name" placeholder="Enter name: "/>
	<textarea id="entmsg" name="entmsg" placeholder="Enter Message"></textarea>
	<input type="submit" name="submit" value="Send!" onclick="validate()" />
	</form>
</div>
<script type="text/javascript" src="ajax.js"></script>
</body>
</html>