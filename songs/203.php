<?php
	//Initialize variables
	$h_num = basename($_SERVER['PHP_SELF'], ".php"); //Hymn number
	$s_col; //Column number
	$s_tabs = false; //Show chords
	$s_lang = "en"; //Language - default is English
	
	if(isset($_GET['lang'])){
		$s_lang = $_GET['lang'];
	}
	if(isset($_GET['tabs'])){
		$s_tabs = $_GET['tabs'];
	}
	if(isset($_GET['col'])){
		$s_col = $_GET['col'];
	}
?>
<head>

<style>
span{
	padding: 0px;
	margin: 0px;
	white-space: pre-wrap;
}
.content li{
	padding: 0px;
}
.content{
	padding: 5px;
}
<?(!$s_tabs)? print ".guitar{display: none;}":print "" ?>
<?($s_tabs)? print ".content {font-family:Consolas,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New, monospace;}":"" ?>
.spacer{
	height: 20px;
}
</style>

</head>
<body>
<?php include "../header.php" ?>
<div class=spacer></div>
<div class=content>
	<ul>
		<li>
<? $s_tabs?print to_string("A                D<br/>"):"" ?>
							I love You, Lord Jesus;<br/>
<? $s_tabs?print to_string("A                D<br/>"):"" ?>
							I love You, Lord, precious One.<br/>
<? $s_tabs?print to_string("A        F#m     Bm      E<br/>"):"" ?>
							No other one compares to You.<br/>
		</li><br />
		<li>
<? $s_tabs?print to_string("A                D<br/>"):"" ?>
							I love You, Lord Jesus;<br/>
<? $s_tabs?print to_string("A                D<br/>"):"" ?>
							I love You, Lord, precious One.<br/>
<? $s_tabs?print to_string("A        F#m     Bm      E<br/>"):"" ?>
							No other one compares to You.<br/>
		</li><br />
		<li>
<? $s_tabs?print to_string("A           E<br/>"):"" ?>
							Jesus Lord, Jesus;<br/>
<? $s_tabs?print to_string("B               C#m<br/>"):"" ?>
							Dear Lord, most lovely One,<br/>
<? $s_tabs?print to_string("D          E        A<br/>"):"" ?>
							Nothing compares to You!<br/>
		</li><br />
	</ul>
</div>

<?php include "../footer.php" ?>
</body>
</html>