<!DOCTYPE html>
<head>
    <title>MySQL file upload example</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
    <form action="add_file.php" method="post" enctype="multipart/form-data">
        Select file to upload:
		<br><br>
		1. <input type="file" name="uploaded_file"><br>
		<br>
        2. <input type="submit" value="Upload File" id="submit">
    </form>
    
	
	<h1>	
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Name of input element determines name in $_FILES array -->
	Send this file:<input name="userfile" type="file"/>
    <input type="submit" value="Send File" />
</form>
</h1>
	

	<p>
        <a href="list_files.php" name="list_file">See all files</a>
    </p>
	<br>
	<p>
<a href="mailto:wongdustin529@gmail.com?Subject=Hello%20again" target="_top">Email the Administrator</a>
	</p>
	
	
	
	
</body>
</html>