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
	<ol>
		<li>
<? $s_tabs?print to_string("G           Em                     Am       D<br/>"):"" ?>
							More of our heart, dear Lord, we'd give You now;<br/>
<? $s_tabs?print to_string("G         Em                   Am     B7<br/>"):"" ?>
							Even more ground to You, Lord, we'd allow.<br/>
<? $s_tabs?print to_string("Em       EM7                  Em7<br/>"):"" ?>
							All that distracts us we'd despise,<br/>
<? $s_tabs?print to_string("         Em6            Am7<br/>"):"" ?>
							All that draws away our eyes &mdash;<br/>
<? $s_tabs?print to_string("<br/>"):"" ?>
							Lord, do fill our vision,<br/>
<? $s_tabs?print to_string("D                D7<br/>"):"" ?>
							'Til the Morning Star is risen!<br/>
		</li><br/>
	</ol>
	<ul class=chorus>
		<li>
<? $s_tabs?print to_string("   G               Em                     Am  D<br/>"):"" ?>
							We would count all things loss, but Jesus gain,<br/>
<? $s_tabs?print to_string("    G            Em          Am     B7<br/>"):"" ?>
							Our inward parts cry out for You to reign.<br/>
<? $s_tabs?print to_string("Em         EM7              Em7<br/>"):"" ?>
							Worthy You are our heart to claim &mdash;<br/>
<? $s_tabs?print to_string("         Em6             Am7<br/>"):"" ?>
							Come, engrave on us Your name;<br/>
<? $s_tabs?print to_string("              D7          G<br/>"):"" ?>
							We would love You, Jesus, more.<br/>
		</li><br/>
	</ul>
	<ol start=2>
		<li>
<? $s_tabs?print to_string("G             Em               Am     D<br/>"):"" ?>
							Less we would argue, Lord, and go our way;<br/>
<? $s_tabs?print to_string("G             Em            Am       B7<br/>"):"" ?>
							More we would say "Amen" to what You say.<br/>
<? $s_tabs?print to_string("Em         EM7            Em7<br/>"):"" ?>
							Grant us a walk to You conformed,<br/>
<? $s_tabs?print to_string("         Em6             Am7<br/>"):"" ?>
							'Til our living is transformed;<br/>
							We adore You, Jesus &mdash;<br/>
<? $s_tabs?print to_string("D               D7<br/>"):"" ?>
							May a pure love for You seize us.<br/>
		</li><br/>
	</ol>
	<ul class=chorus>
		<li>
<? $s_tabs?print to_string("G     Em                 Am      D<br/>"):"" ?>
							Any unwillingness, Lord, quickly slay,<br/>
<? $s_tabs?print to_string("G       Em             Am      B7<br/>"):"" ?>
							Even by faith we open, all the way &mdash;<br/>
<? $s_tabs?print to_string("Em        EM7               Em7<br/>"):"" ?>
							Rising to heights of love unknown,<br/>
<? $s_tabs?print to_string("           Em6      Am7<br/>"):"" ?>
							Christ our destiny alone,<br/>
<? $s_tabs?print to_string("         D7               G<br/>"):"" ?>
							We would love You, Jesus, more.<br/>
		</li><br/>
	</ul>
</div>

<?php include "../footer.php" ?>
</body>
</html>