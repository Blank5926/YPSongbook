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
	height: 10px;
}
</style>

</head>
<body>
<?php include "../header.php" ?>
<div class=spacer></div>
<div class=content>
	<ol>
		<li>
<? $s_tabs?print to_string("D                             G  D<br/>"):"" ?>
							Lord, there's always been one person<br />
<? $s_tabs?print to_string("Em       G               D    A<br/>"):"" ?>
							Like Abraham, who ran to meet You.<br />
<? $s_tabs?print to_string("    D   A        D    A<br/>"):"" ?>
							Samuel, he ministered,<br />
<? $s_tabs?print to_string("    F#m   Bm    F#m           Bm<br/>"):"" ?>
							And David had a heart full of praise,<br />
<? $s_tabs?print to_string("    G   F#m Em G Asus  A<br/>"):"" ?>
							But You want many more.<br />
		</li><br />
		<li>
<? $s_tabs?print to_string("D                        G  D<br/>"):"" ?>
							Lord, we want to be that people<br />
<? $s_tabs?print to_string("Em        G          D    A<br/>"):"" ?>
							That minister and refresh You,<br />
<? $s_tabs?print to_string("          D   A               D  A<br/>"):"" ?>
							Meet Your need, and wash Your feet,<br />
<? $s_tabs?print to_string("    F#m   Bm      F#m       Bm<br/>"):"" ?>
							That satisfy Your heart's desire,<br />
<? $s_tabs?print to_string("    G  F#m Em G Asus  A             D - D7<br/>"):"" ?>
							And be a friend to You. What can we do?<br />
		</li><br />
	</ol>
	<ul class=chorus>
		<li>
<? $s_tabs?print to_string("   G                F#7                    Bm<br/>"):"" ?>
							We can call, O Lord; we can praise Your name,<br />
<? $s_tabs?print to_string("                       G                     D<br/>"):"" ?>
							Turn our heart to You, let You rule and reign.<br />
<? $s_tabs?print to_string("             C      G           D<br/>"):"" ?>
							Lord, a single heart that's true,<br />
<? $s_tabs?print to_string("Em          G      Asus A<br/>"):"" ?>
							That's what we desire.<br />
		</li><br />
	</ul>
	<ol start=3>
		<li>
<? $s_tabs?print to_string("D                                 G  D<br/>"):"" ?>
							Lord, You've shown You're rich in mercy<br />
<? $s_tabs?print to_string("Em        G               D    A<br/>"):"" ?>
							To those saints who stand together<br />
<? $s_tabs?print to_string("        D    A        D   A<br/>"):"" ?>
							In Your plan, one new man.<br />
<? $s_tabs?print to_string("   F#m      Bm    F#m    Bm<br/>"):"" ?>
							So grant us all a single heart,<br />
<? $s_tabs?print to_string("  G     F#m  Em   G    Asus A                    D<br/>"):"" ?>
							A heart that just loves You, a heart that's true.<br />
		</li><br />
	</ol>
	<ul class=chorus>
		<li>
<? $s_tabs?print to_string("   G                F#7                    Bm<br/>"):"" ?>
							We can call, O Lord; we can praise Your name,<br />
<? $s_tabs?print to_string("                       G                     D<br/>"):"" ?>
							Turn our heart to You, let You rule and reign.<br />
<? $s_tabs?print to_string("             C      G           D<br/>"):"" ?>
							Lord, a single heart that's true,<br />
<? $s_tabs?print to_string("Em          G      Asus A           D<br/>"):"" ?>
							That's what we desire &mdash; a heart for You.<br />
		</li><br />
	</ul>
</div>

<?php include "../footer.php" ?>
</body>
</html>