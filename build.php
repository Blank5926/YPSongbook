<?php
error_reporting(0);

echo "<pre><code>";

$Document_Title = "Texas YP Songbook";
$Version = 'v. 1.0';
$Path = 'D:\YP SongBook.pdb';

$rangeStart = array(0,100,200,300,400,500,600,700,800,900,1000,1100);
$rangeEnd =   array(0,144,237,345,432,581,652,749,809,946,1020,1120);

print "&lt;?xml version=".$Version."?>
&lt;iSiloXDocumentList>
  &lt;iSiloXDocument>
    &lt;Source>
      &lt;Sources>
	";
for($i=1; $i<=1128; $i++){
	print "&lt;Path>http://localhost/Songbook/songs/$i.php&lt;/Path>
	";
}
print "&lt;Path>http://localhost/Songbook/songs/index.php&lt;/Path>
		&lt;/Sources>
    &lt;/Source>

    &lt;Destination>
      &lt;Title>".$Document_Title."&lt;/Title>
      &lt;Files>
        &lt;Path>".$Path."&lt;/Path>
      &lt;/Files>
    &lt;/Destination>

    &lt;LinkOptions>
      &lt;MaximumDepth             value=\"1\"/>
      &lt;FollowOffsite            value=\"no\"/>
      &lt;MaximumOffsiteDepth      value=\"1\"/>
      &lt;SubDirOnly               value=\"no\"/>
      &lt;UnresolvedDetail         value=\"include\"/>
    &lt;/LinkOptions>

    &lt;ImageOptions>
      &lt;AltText                  value=\"exclude\"/>
      &lt;Images                   value=\"include\"/>
      &lt;ResizeLargeImages        value=\"yes\"/>
      &lt;MaximumWidth             value=\"144\"/>
      &lt;MaximumHeight            value=\"144\"/>
      &lt;ImproveContrast          value=\"yes\"/>
      &lt;Dither                   value=\"yes\"/>
      &lt;Compress                 value=\"yes\"/>
      &lt;LossyLevel               value=\"none\"/>
      &lt;LossyQuality             value=\"75\"/>
      &lt;BitDepth1                value=\"exclude\"/>
      &lt;BitDepth2                value=\"exclude\"/>
      &lt;BitDepth4                value=\"exclude\"/>
      &lt;BitDepth8                value=\"exclude\"/>
      &lt;BitDepth16               value=\"include\"/>
    &lt;/ImageOptions>

    &lt;TableOptions>
      &lt;IgnoreTables             value=\"no\"/>
      &lt;AddSeparators            value=\"no\"/>
      &lt;UseMinimumDepth          value=\"no\"/>
      &lt;MinimumDepth             value=\"1\"/>
      &lt;UseMaximumBottomReach    value=\"no\"/>
      &lt;MaximumBottomReach       value=\"1\"/>
      &lt;UnfoldFullPageTables     value=\"no\"/>
      &lt;IgnorePixelWidths        value=\"no\"/>
    &lt;/TableOptions>

    &lt;ColorOptions>
      &lt;BackgroundColors         value=\"keep\"/>
      &lt;TextColors               value=\"keep\"/>
    &lt;/ColorOptions>

    &lt;MarginOptions>
      &lt;LeftRightMargins         value=\"keep\"/>
      &lt;LeftRightPadding         value=\"keep\"/>
    &lt;/MarginOptions>

    &lt;SecurityOptions>
      &lt;Convert                  value=\"allow\"/>
      &lt;CopyBeam                 value=\"allow\"/>
      &lt;CopyAndPaste             value=\"allow\"/>
      &lt;Modify                   value=\"allow\"/>
      &lt;Print                    value=\"allow\"/>
      &lt;Expiration>
        &lt;Expires                value=\"no\"/>
        &lt;Date                   value=\"20991231\"/>
      &lt;/Expiration>
      &lt;Password>
        &lt;Require                value=\"no\"/>
        &lt;Password>password&lt;/Password>
      &lt;/Password>
    &lt;/SecurityOptions>

    &lt;TextOptions>
      &lt;PreUseMonospaceFont      value=\"yes\"/>
      &lt;PreSingleLineBreaks      value=\"KeepAll\"/>
      &lt;ProcessLineBreaks        value=\"yes\"/>
      &lt;ConvertSingleLineBreaks  value=\"no\"/>
      &lt;Preformatted             value=\"yes\"/>
      &lt;UseMonospaceFont         value=\"yes\"/>
      &lt;MonospaceFontSize        value=\"10\"/>
      &lt;TabStopWidth             value=\"8\"/>
    &lt;/TextOptions>

    &lt;DocumentOptions>
      &lt;PageBounds               value=\"hard\"/>
      &lt;UseDefaultCategory       value=\"no\"/>
      &lt;HomePageNumber           value=\"1129\"/>
      &lt;OpenHomePageOnDateChange value=\"no\"/>
      &lt;CharSet>UTF-8&lt;/CharSet>
    &lt;/DocumentOptions>

    &lt;Bookmarks>
      &lt;Document>
        &lt;UseFile                value=\"no\"/>
      &lt;/Document>
    &lt;/Bookmarks>

    &lt;Messages>
      &lt;Title>Texas YP Songbook&lt;/Title>
      &lt;Version>".$Version."&lt;/Version>
      &lt;Copyright>&lt;/Copyright>
      &lt;Notes>This document is based on Young People's Songbook published 2010&lt;/Notes>
      &lt;AuthorName>Jonathan Tey&lt;/AuthorName>
      &lt;AuthorContact>jontey88@gmail.com&lt;/AuthorContact>
      &lt;AuthorNotes>Email me any corrections or suggestions&lt;/AuthorNotes>
    &lt;/Messages>

    &lt;CookieOptions>
      &lt;SendCookies              value=\"no\"/>
      &lt;ReceiveCookies           value=\"no\"/>
    &lt;/CookieOptions>

  &lt;/iSiloXDocument>
&lt;/iSiloXDocumentList>";

echo "</code></pre>";
?>