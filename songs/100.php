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
}
.content li{
	padding: 0px;
}
.content{
	padding: 5px;
}
<?(!$s_tabs)? print ".guitar{display: none;}":"" ?>
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
<? $s_tabs?print to_string("G                D           G<br/>"):"" ?>
							Hallelujah, Hallelujah, Hallelujah!<br />
<? $s_tabs?print to_string("                 D            G<br/>"):"" ?>
							Hallelujah, Hallelujah, Hallelujah!<br />
<? $s_tabs?print to_string("G     D     D7    G<br/>"):"" ?>
							Hallelujah, Hallelujah!<br />
<? $s_tabs?print to_string("G           D           G           C<br/>"):"" ?>
							Hallelujah, Hallelujah, Hallelujah, Hallelujah!<br />
		</li><br />
		<li>
<? $s_tabs?print to_string("G           C     G<br/>"):"" ?>
							Amen! Amen! Hallelujah!<br />
<? $s_tabs?print to_string("D     G    C<br/>"):"" ?>
							Amen! Hallelujah!<br />
<? $s_tabs?print to_string("G<br/>"):"" ?>
							Amen! Hallelujah!<br />
<? $s_tabs?print to_string("D<br/>"):"" ?>
							Amen! Hallelujah!<br />
<? $s_tabs?print to_string("G                 D  G<br/>"):"" ?>
							Amen! Hallelujah! Amen!<br />
		</li>
	</ul>
</div>

<?php include "../footer.php" ?>
</body>
</html>