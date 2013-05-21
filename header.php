<?php
	//Set ranges
	$rangeStart = array(0,100,200,300,400,500,600,700,800,900,1000,1100);
	$rangeEnd =   array(0,144,237,345,432,581,652,749,809,946,1020,1128);
	$h_prev = $h_num - 1;
	$h_next = $h_num + 1;
	$i = floor($h_num/100);
	if($h_num > 100 && $h_num < 1120){
		if($h_prev < $rangeStart[$i]){
			$h_prev = $rangeEnd[$i-1];
		}
		if($h_next > $rangeEnd[$i]){
			$h_next = $rangeStart[$i+1];
		}
	} else {
		if($h_num <= 100)
			$h_prev = 0;
		if($h_num >= 1128)
			$h_next = 0;
		if($h_num < 100)
			$h_next = 100;
	}
	
	function to_string ($str){
		return str_replace(' ','&nbsp;',$str);
	}
	
?>
<style>
#.header .number{
	padding: 0px 5px;
}
.header div{
	padding: 1px 0px;
}
.header{
	#background-color: #29E636;
	#color: white;
	padding: 5px;
}
a:visited{
	#color: white;
}
a{
	text-decoration:none;
	border-bottom:1px dotted; 
}
ul{
    list-style-type: none;
	margin: 0px;
	padding: 0px;
}
ol{
	list-style-type: decimal;
}
.header ul li{
	padding: 5px;
	margin: 0px;
	display: inline;
}
</style>

<div class="header">
	<div class="header number">
		<strong>Hymn #<?print $h_num?> </strong>
	</div>
	<!--------- Placeholder for future use
	<div class="language">
		<ul>
			<li><? //($s_lang!="en")?print"<a href=\"?lang=en\">Eng</a>":print"Eng"?></li>
			<li><? //($s_lang!="es")?print"<a href=\"?lang=es\">Spa</a>":print"Spa"?></li>
		</ul>
	</div>
	------------>
	<div>
		<ul>
			<li><? ($h_prev!=0)?print"<a href=\"".$h_prev.".php\">Previous</a>":print"Previous" ?></li>
			<li><a href="index.php">Index</a></li>
			<li><? ($h_next!=0)?print"<a href=\"".$h_next.".php\">Next</a>":print"Next" ?></li>
		</ul>
	</div>
	<div>
		<ul>
			<li><? ($s_tabs==1)?print"<a href=\"".$h_num.".php\">Hide chords</a>":print"<a href=\"".$h_num.".php?tabs=1\">Show chords</a>" ?></li>
			<!--------Place holder for future use
			<li><a href="">1</a> <a href="">2</a> <a href="">3</a> columns</li>
			-------->
		</ul>
	</div>
</div>