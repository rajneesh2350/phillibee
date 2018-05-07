<html>
<body>
<div id="datacontainer" style="position:absolute;left:10px;top:10px;width:100%" onMouseover="scrollspeed=0" onMouseout="scrollspeed=cache">
<!-- ADD YOUR SCROLLER CONTENT INSIDE HERE -->

<b>What's Hot</b>
<p align="left"><strong><font face="Verdana"><small><a href="http://www.phillibeeinfrastructure.com/Solution-design1.php" target="_top">We have Solution Design
</a>&nbsp;</small></font></strong><br>
<font face="Verdana" size="2">We have a Infrastructure planners and architects who have a firm operational grasp of the problem.
this unique script.</font></p>
<p align="left"><strong><font face="Verdana"><small><a href="http://www.phillibeeinfrastructure.com/uoi1.php" target="_top">Urban Design is our Staring
</a>&nbsp;</small></font></strong><br>
<font face="Verdana"><small>We have a Partners and consultants who design infrastructure solutions.
flash!</small></font></p>
<p align="left"><small><strong><font face="Verdana"><a href="http://www.phillibeeinfrastructure.com/Support-Service1.php" target="_top">Support & Servicing at it's Best
Cursor</a>&nbsp;</font></strong></small><br>
<small><font face="Verdana">We have a Business managers who want to understand how the decisions being made both support and affect the business.</font></small></p>
<!-- END SCROLLER CONTENT -->
</div>



<script type="text/javascript">
/***********************************************
* IFRAME Scroller script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
//Specify speed of scroll. Larger=faster (ie: 5)
var scrollspeed=cache=2
//Specify intial delay before scroller starts scrolling (in miliseconds):
var initialdelay=2500
function initializeScroller(){
dataobj=document.all? document.all.datacontainer : document.getElementById("datacontainer")
dataobj.style.top="5px"
setTimeout("getdataheight()", initialdelay)
}
function getdataheight(){
thelength=dataobj.offsetHeight
if (thelength==0)
setTimeout("getdataheight()",10)
else
scrollDiv()
}
function scrollDiv(){
dataobj.style.top=parseInt(dataobj.style.top)-scrollspeed+"px"
if (parseInt(dataobj.style.top)<thelength*(-1))
dataobj.style.top="5px"
setTimeout("scrollDiv()",40)
}

if (window.addEventListener)
window.addEventListener("load", initializeScroller, false)
else if (window.attachEvent)
window.attachEvent("onload", initializeScroller)
else
window.onload=initializeScroller
</script>
</body>
</html>
