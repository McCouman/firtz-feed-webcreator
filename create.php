<html>
<head>
</head>
<body>
<?php
/**
*	Firtz - Markdown Feed Creator
*	by Michael McCouman jr.
*	2013 (MIT Lizenz)
*	Version 0.0.1
*/
/*
The MIT License (MIT)

Copyright (c) 2013 <copyright by Michael McCouman jr.>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

//Vars
$newFile = @$_POST['podcastname'];
$userDir = './feeds/'.$newFile. '/';

if($newFile) {
	mkdir($userDir, 0777, true);
	
	echo 'Dein Podcast wurde soeben ertellt!';
}
$del 	 = @$_POST['del'];
$sub 	 = @$_POST['Submit'];

if($del){
	#$del = 'dashboard.php';
	$del = str_replace("..", "", $del);
	
	chmod($del, 0777);
	
	if(@unlink($del)){
		echo "<script language=\"javascript\" type=\"text/javascript\">alert('File deleted.');</script>";
	} else {
		echo "<script language=\"javascript\" type=\"text/javascript\">alert('Error deleting file. Are you sure it's not a directory?');</script>";
	}
}
	
############ ceate new file	
if($sub){
		
	$information = '#: Dies ist Konfigurationsdatei für die allgemeinen Daten des Feeds'. "\n\n".
	
	'title:'. "\n".
	@$_POST['title']. "\n\n".

	'description:'. "\n".
	@$_POST['description']. "\n\n".
	
	'formats:'. "\n".
	@$_POST['formats']. @$_POST['mp3']. " ". @$_POST['torrent']. " ". @$_POST['mpg']. " ". @$_POST['m4a']. " ". @$_POST['m4v']. " ". @$_POST['oga']. " ". @$_POST['ogg']. " ". @$_POST['ogv']. " ". @$_POST['webm']. " ". @$_POST['flac']. " ". @$_POST['opus']. " ". @$_POST['mka']. " ". @$_POST['mkv']. " ". @$_POST['pdf']. " ". @$_POST['epub']. " ". @$_POST['png']. " ". @$_POST['jpg']. 
	"\n\n".
	
	'author:'. "\n".
	@$_POST['author']. "\n\n".
	
	'summary:'. "\n".
	@$_POST['summary']. "\n\n".

	'image:'. "\n".
	@$_POST['image']. "\n\n".

	'keywords:'. "\n".
	@$_POST['keywords']. "\n\n".

	'category:'. "\n".
	@$_POST['category']. "\n".
	@$_POST['category-two']. "\n".
	@$_POST['category-more']. "\n\n".

	'email:'. "\n".
	@$_POST['email']. "\n\n".

	'language:'. "\n".
	@$_POST['language']. "\n\n".

	'explicit:'. "\n".
	@$_POST['explicit']. "\n\n".

	'itunes:'. "\n".
	@$_POST['itunes']. "\n\n".


	'#: hast Du einen Account bei disqus? Dann hier den forumshortname (oder wie das heißt) rein.' . "\n\n".
	'disqus:'. "\n".
	@$_POST['disqus']. "\n\n".

	'flattrid:'. "\n".
	@$_POST['flattrid']. "\n\n".

	'twitter:'. "\n".
	@$_POST['twitter']. "\n\n".

	'adn:'. "\n".
	@$_POST['adn']. "\n\n".

	'licensename:'. "\n".
	@$_POST['licensename']. "\n\n".

	'licenseurl:'. "\n".
	@$_POST['licenseurl']. "\n\n".


	'#:'. "\n".
	'#: Hier können Farben eingestellt werden!'. "\n".
	'#:'. "\n\n".
	
	'color:'. "\n".
	@$_POST['color']. "\n\n".

	'dark:'. "\n".
	@$_POST['dark']. "\n\n".

	'light:'. "\n".
	@$_POST['light']. "\n\n".

	'background:'. "\n".
	@$_POST['background']. "\n\n".

	'#:' . "\n".
	'#: Überschriften Farbe'. "\n".
	'#:'. "\n\n".
	
	'header:'. "\n".
	@$_POST['header']. "\n\n".

	'#:' . "\n".
	'#: jumbotron + icon' . "\n".
	'#:' . "\n\n".
	
	'jumbotron:'. "\n".
	@$_POST['jumbotron']. "\n\n".

	'jumbocolor:'. "\n".
	@$_POST['jumbocolor']
	
	. "\n";
	
	
	$name = 'feed.cfg';
	$name = str_replace("../", "", $name);
	$name = $userDir . $name;

	$ourFileHandle = fopen($name, 'w') or die("Creation failed!");
	fwrite($ourFileHandle,$information);
	fclose($ourFileHandle);

	echo "<br>Find the file: <code>" . $userDir . "feed.cfg</code>";
	#echo "<meta http-equiv=\"REFRESH\" content=\"2; url=dashboard.php\">";
	
} else{
?>
<div class="hero-buttons container-fluid">
	<div class="container">
		<div class="row">
			<div class="text-center span12">
<?php
include("create/form.php");
?>
			</div>
		</div>
	</div>
</div>
<br />
<?php
}


/*	
############ file table
	
	$myDirectory = opendir($userDir);
		while($entryName = readdir($myDirectory)) {
    		$dirArray[] = $entryName;
		}
	closedir($myDirectory);
		$indexCount = count($dirArray);
		sort($dirArray);

echo '<div class="container">
				<div class="row">
					<div class="span10 offset1">';

	print("<TABLE border=1 cellpadding=5 cellspacing=0 class=whitelinks>\n");
	print("<TR><TH>File <font size=2>(click the view)</font></TH><TH>Edit</TH><TH>Delete</TH></TR>\n");

	for($index=0; $index < $indexCount; $index++) {
        if (substr("$dirArray[$index]", 0, 1) != "."){
        	print("<TR><TD><a href=\"$userDir$dirArray[$index]\">$dirArray[$index]</a></td>");    
        	print("<TD><a href=\"editor.php?file=$dirArray[$index]\">Edit</a></TD>");
        	print("<TD><a href=\"dashboard.php?del=$dirArray[$index]\">Delete</TD>");
        	print("</TR>\n");
    	}
	}

	print("</TABLE>\n");
	
echo '			</div>
			</div>
		</div>';
*/
?>
</div>


</body>
</html>