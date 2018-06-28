<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="generator" content="Adobe GoLive" />git
		<title>Juniorbird.com &mdash; <?php include "title/index.html"?></title>
		
		<script src="/js/popmoblog.js" type="text/javascript"></script>
		<script src="/js/popcomment.js" type="text/javascript"></script>
		
		<link rel="shortcut icon" href="/favicon.ico" />
		
		<link rel="service.feed" type="application/atom+xml" title="Atom" href="http://juniorbird.com/atom.xml" />
		<link rel="alternate" type="application/rss+xml" title="RSS" href="http://juniorbird.com/index.xml" />
		<link rel="service.feed" type="application/atom+xml" title="Atom" href="http://juniorbird.com/blog/atom.xml" />
		<link rel="alternate" type="application/rss+xml" title="RSS" href="http://juniorbird.com/blog/index.xml" /> 
		
		<style type="text/css">
			@import "/css/homepage.css";
		</style>
	</head>

	<body>
	
		<div id="main">
		
		<div id="banner">
		
			<div id="logo">
				<h1><img src="/images/juniortop.gif" alt="juniorbird.com"></h1>
				<h1><img src="/images/juniorbottom.gif" alt=""></h1>
			</div>
			
			<div id="moblog">
				<?php include "foto/index.html"?>
			</div>
			
			<div class="formozilla"></div>
								
		</div>
		
		<div id="content">
		
			<div id="diary">
			
				<?php include "index.html"?>
					
			</div>
		
			<div id="blog">
				<?php include "blog/index.html"?>
			</div>
		
			<div class="formozilla">
			</div>
		</div>
		
		<div id="footer">
			
			<div id="archives">
				<h3>Archives</h3>
				<p>Search this site:</p>
				<form method="get" action="/mt/mt-search.cgi" id="searchform">
					<input type="hidden" name="IncludeBlogs" value="2,1" />
					<input id="search" name="search" size="27" />
					<input type="submit" value="Go" />
				</form>
				
				<p>Diary and blog: <a href="archives.php">Archives</a></p>				<p>Moblog: <a href="/foto/fotoarchive.php">Photos</a></p>
				
				<h3>About</h3>
				<p><a href="/about/index.html">About Me</a></p>
			</div>
			
			<div id="links">
				<h3>Links</h3>
				
				<div id="notaframe">
					<?php include "links/index.html"?>
				</div>
			</div>
			
			<div id="badges">
				<h3>Feeds</h3>
				
				<p>Diary: <a href="index.xml">RSS</a>, <a href="atom.xml">Atom</a></p>
				<p>Blog: <a href="blog/index.xml">RSS</a>, <a href="blog/atom.xml">Atom</a></p>
				
				<h3>And...</h3>
				<p>Powered by <a href="http://sixapart.com/movabletype">Movable Type</a></p>
				<p>Hosted by <a href="http://www.dreamhost.com/r.cgi?197842">Dreamhost</a></p>
				<p>Copyright &copy; <a href="http://wadearmstrong.com">Me</a></p>
			</div>
			
			<div class="formozilla">
			</div>
			
		</div>
		
		</div>
		
	</body>

</html>