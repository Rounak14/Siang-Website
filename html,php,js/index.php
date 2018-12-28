<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'rootpassword');
define('DB_DATABASE', 'database');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$sql="SELECT * FROM newsevents";
$record=mysqli_query($db,$sql);
$sql="SELECT * FROM achievements";
$records=mysqli_query($db,$sql);



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Department of Design (DoD)</title>
<style type="text/css">
<!--
@import url("towards_better_interaction.css");
-->
</style>
<style>
div:active, div:focus, div:hover {
    outline-style: none; -moz-outline-style:none;
}
#container #main_header_text #news_events table tr .main_header_text p a {
	color: #900;
}
</style>
<script src="TPanelSpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="NewsAwardPanelSpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="TPanelSpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="NewsAwardPanelSpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<script src="MenuSpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="MenuSpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<style type="text/css">

body,td,th {
	color: #F00;
}
a:visited {
	color: #333;
	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
}

#header table tr td table tr td {
	font-size: 9px;
	color: #000;
}
#header table tr td p a {
	font-family: Arial, Helvetica, sans-serif;
	color: #CCC;
}
#header table tr td p a em {
	font-size: 9px;
}
#header table tr .text p a strong {
	color: #F00;
}
.r {
	color: #F00;
}
#header table tr .text p a strong {
	color: #F00;
}
#header table tr .text a strong {
	color: #F00;
	font-family: Arial, Helvetica, sans-serif;
}
</style>
<link href="HomePage_Slider/js-image-slider.css" rel="stylesheet" type="text/css" />
<style type="text/css">


body {
	background-color: #FFF;
}
a:hover {
	color: #F00;
}
</style>
<script src="HomePage_Slider/js-image-slider.js" type="text/javascript"></script>
</head>

<body text="#FF0000">
<center>
<div id="container">
<div id="black_header">
<table width="100%" height="80px">
    <td align="left" bgcolor="#FFFFFF" width="100%"><img src="images/dod_logo.JPG" width="524" height="80" alt="logo" /></td>
</table>
<table width="100%">
<td bgcolor="#800015" width="20%"></td>
<td align="center" bgcolor="#F68121" width="15%" height="10px"></td>
<td align="left" bgcolor="#00A761" width="15%"></td>
<td align="left" bgcolor="#005599" width="15%"></td>
<td align="left" bgcolor="#991A97" width="15%"></td>
<td bgcolor="#800015" width="20%"></td>
</table>

<table width="100%">
  <td width="20%" align="left" height="20px">&nbsp;</td>

<td align="center" class="main_header_text_about_us" width="60%" bgcolor="#FFFFFF"><ul id="MenuBar2" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="index.html" id="id1">Home</a>
    <ul>
      <li ><a id="idfirst" href="About_us.html">Our mission</a></li>
</ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu" id="id2">People</a>
    <ul>
      <li><a id="idsecond" href="Student.html?Phds">Students</a></li>
      <li><a id="idsecond" href="Faculty.html?CurFaculty">Faculty</a></li>
      <li><a id="idsecond" href="Staff.html">Staff</a></li>
      <li><a id="idsecond" href="Alumni.html?Phds">Alumni</a></li>
    </ul>
  </li>
   <li><a class="MenuBarItemSubmenu" href="#" id="id3">Research</a>
    <ul>
      <li><a id="idthird" href="http://iitg.ac.in/drf/">Design Researchers Forum</a></li>
       <li><a id="idthird" href="Research.html?Phds">Projects</a></li>
      <li><a id="idthird" href="publications.html">Publications</a></li>
</ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu" id="id4">Academics</a>
    <ul>
      <li><a id="idfourth" href="Overview.html">Overview</a></li>
      <li><a id="idfourth" href="Facilities.html">Facilities</a></li>
      <li><a id="idfourth" href="Courses.html">Courses</a></li>
      <li><a id="idfourth" href="Admissions.html">Admissions</a></li>
      <li><a id="idfourth" href="Placements.html">Placements</a></li>
      <li><a id="idfourth" href="Workshops.html">Workshops</a></li>
    </ul>
  </li>
</ul></td>

<td align="center" width="20%" bgcolor="#FFFFFF"></td>
</table>
</div>

<div id="header">
    <div id="sliderFrame">
        <div id="slider">
            <img src="images/HomePage_Slide1.jpg"  />
            <img src="images/HomePage_Slide2.jpg"/>
            <img src="images/HomePage_Slide3.jpg" alt="" />
            <img src="images/HomePage_Slide4.jpg" alt=""/>
            <img src="images/HomePage_Slide5.jpg"/>
            <img src="images/HomePage_Slide6.jpg"/>
            <img src="images/HomePage_Slide7.jpg"/>
            <img src="images/HomePage_Slide8.jpg"/>
        </div>

    </div>
<!--<table width="100%">
<tr>
<td align="left" width="100%"><img src="images/Homepage_banner_01.jpg" width="1000" height="220" alt="b" /></td>
</tr>
</table>-->
<table width="100%">
<tr>
<td align="left" width="100%" height="30px"></td>
</tr>
</table>
<table width="40%" align="left">
<tr>
<td width="100%" colspan="3" align="left" class="text"><p class="text_heading"><strong>The Department of Design (DoD)</strong></p>
  <p align="justify" >The Department of Design(DoD), one of the thirteen departments at IIT Guwahati, was set up with a vision to enkindle some of the brightest technical minds of the country a passion for innovation in technology driven by a firm understanding, appreciation and celebration of design.
  </p>
  <p align="justify">
The department offers an M.Des. degree, a B.Des. degree (the only undergraduate level degree of its kind in an Indian Institute of Technology) and a PhD degree in Design. The focus of the program is on the study, invention, and creative use of technologies to create effective, usable, enjoyable experiences with technology through interdisciplinary research in engineering, design, behavioral and social sciences, and to understand the impact of technology on individuals, groups, and organizations. The department envisions to produce successful graduates who will be capable of leading the changing scenarios of today and tomorrow through thought, innovation and values.</p>

<p align="justify">The institute is situated in North Guwahati, Assam, on the north bank of the river Brahmaputra amidst breathtaking natural beauty and serenity. The full fledged campus sprawls over 285 hectares of gently undulating terrain with several hillocks covered with lush green vegetation, a few lakes and a panoramic view of the mighty river on one side and a ring of blue hills on the other. The Institute is conveniently accessible from all the transport hubs in the Guwahati city.
<p> </td>
</tr>
<tr>
<td align="left" width="33%" height="20px"><a href="Admissions.html" class="main_header_text_home_1">Apply for M.Des</a></td>
<td align="left" width="33%"><a href="Admissions.html" class="main_header_text_home_1">Apply for B.Des</a></td>
<td align="left" width="34%"><a href="Admissions.html" class="main_header_text_home_1">Apply for PhD</a></td>
</tr>
</table>

<table width="4%" align="left">
<tr>
<td align="left" width="100%">&nbsp;</td>
</tr>
</table>



<table width="25%" align="right">
<tr>
<td colspan="2" align="left"></td>
</tr>
<td align="center" width="60%" height="30" class="heading">&nbsp;Achievements</td>

  <tr>
  <?php
    while($serial=mysqli_fetch_assoc($records))
    {
      echo "<tr>";
      echo "<td>".$serial['Achievement']."</td>";
      echo "</tr>";
    }
   ?>
  </tr>
</table>



<table width="25%" align="right">
  <tr>
    <td colspan="2" align="left"></td>
  </tr>
<td width="60%" height="30" align="center" class="heading">&nbsp;News and Events</td>
<tr>

<?php
  while($series=mysqli_fetch_assoc($record))
  {
    echo "<tr>";
    echo "<td>".$series['news']."</td>";
    echo "</tr>";
  }
 ?>

</tr>
</table>



</div>

<table width="100%">
<tr>
<td align="left" width="100%" height="20px"></td>
</tr>
</table>

<div id="projectbar" ></div>

  <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
<li class="TabbedPanelsTab" tabindex="0">

<div id="sub_sub_text_4">
  <table width="100%" align="left">
  <td bgcolor="#800015" width="100%" height="0.5px"></td>
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="20px" class="main_header_text_light" align="center">The Department of Design, IIT Guwahati | <a href="Contact_us.html" class="main_header_text_home_1">Contact Us</a></td>
  </tr>
  <tr>
    <td height="20px" class="main_header_text_light" align="center">&nbsp;</td>
  </tr>
  </table>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12121504-1");
pageTracker._trackPageview();
} catch(err) {}
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2");
swfobject.registerObject("FlashID2");
</script>
</body>
</html>
