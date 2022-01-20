
<html>
<head>
	<title>Demo Ckeditor</title>
	<script type="text/javascript" src="asset/ckeditor/ckeditor.js"></script>
</head>
<body>
	<h1 align="center">
		Demo Ckeditor
	</h1>
	<h2>Content 1</h2>
	<textarea id="content-1"></textarea>
	<script type="text/javascript">
	config = {};
	config.entities_latin = false;
	config.language = 'vi';
	CKEDITOR.replace ('content-1',config);
	</script>
	<h2>Content 2</h2>
	<textarea id="content-2"></textarea>
	<script type="text/javascript">
	config = {};
	config.entities_latin = false;
	config.language = 'vi';
	CKEDITOR.replace ('content-2',config);
	</script>
</body>
</html>
