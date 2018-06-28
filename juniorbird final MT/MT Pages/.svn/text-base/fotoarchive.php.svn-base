<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="generator" content="Adobe GoLive" />
		<title>Juniorbird.com &mdash; Moblog Archive</title>
		
		<script src="/js/popmoblog.js" type="text/javascript"></script>
		
		<link rel="shortcut icon" href="/favicon.ico" />
		
		<style type="text/css">
			@import "/css/moblog.css";
		</style>
	</head>
	
	<body>

	<div id="main">
		<div class="banner">
			<div id="home">
				<a href="/"><img src="/images/junior.gif" alt="Juniorbird.com"></a>
			</div>
			
			<div class="formozilla"></div>
		</div>
			
		<?php
			
			$array_files = array();
			
			$dirName = "/home/.flea/juniorbird/juniorbird/foto/archive";
			
		   if(!is_dir($dirName))
		       return false;
		   $dirHandle = opendir($dirName);
		   while(false !== ($incFile = readdir($dirHandle))) {
		       if($incFile != "."
		           && $incFile != "..") {
		           if(is_file("$dirName/$incFile"))
		              $array_files[] = "$dirName/$incFile";
		       }
		   }
		   closedir($dirHandle);
		   
		   rsort($array_files);
		   
		   foreach($array_files as $string_file)	{
		   	include_once($string_file);
		   	}
		   
		 ?>
		
	
	</div>
	
	</body>
</html>