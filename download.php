<html>
	<head>
		<title>Download File</title>
	</head>
<body>
	<h2>Download File</h2>
	<a href="download.php?file=bhushanCV.pdf">CLICK HERE</a>
</body>
</html>
<?php
	if(!empty($_GET['file']))
	{
		$filename=basename($_GET['file']);
		$filepath=$filename;
		if(!empty($filename) && file_exists($filepath))
		{
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$filename");
			header("Content-Type: application/zip");
			header("Content-Transfer-Encoding: binary");
			readfile($filepath);
			exit;
		}
		else
		{
			echo"This file doesn't exist.";
		}
	}
?>
	