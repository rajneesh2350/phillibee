<!DOCTYPE html>
<html lang="en-US" class="no-js">

<!-- Mirrored from www.fortune-it.com/Contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Nov 2016 08:03:44 GMT -->
<head>
<meta charset="utf-8" />
<meta name="google-site-verification" content="-IiBuoVQzJnuCnfByeeDA2GgDyaLKV-OzEIAP-e0voc" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="Infrastructure" />
<meta name="description" content="Infrastructure" />
<meta property="og:type" content="Infrastructure" />
<meta property="og:title" content="Welcome to Phillibee Infrastructure" />
<meta property="og:site_name" content="Phillibee Infrastructure Pvt Ltd" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Welcome to Phillibee Infrastructure</title>
<!--css starts-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/banner-slider.css" rel="stylesheet" type="text/css" media="all" />
<!--css ends-->


<!--stylesheets ends-->
<!--javascripts start-->

<script src="js/jquery.1.11.3.min.js"></script>

		<script type="text/javascript">

$(document).ready(function() {
	$( ".mnu-icon" ).click(function() {
  $( ".mobile-mnu" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});
});
 </script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $('#support-sts').on('change',function() {
        $('.cont-address .service-center-dtls').show().not(".class-" + this.value).hide();
    });
});

</script>


<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>


<!--javascripts ends-->

</head>
<body>
<div class="wrapper">

<!--header starts-->

<header>
<?php
   include ("header.php") ;
?>
</header>

<!--header ends-->


<!--container start-->

<div class="container">

<!--banner start-->
  <div class="banner">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27996.510153102292!2d77.16738705518016!3d28.70269315149985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfe751e46fd9f%3A0x8ef552f7bff844ee!2sPHILLIBEE+INFRASTRUCTURE+Pvt.Ltd!5e0!3m2!1sen!2sin!4v1495170430383" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
  <!--banner ends-->

  <!--content part start-->


    <!--about us start-->

    <div class="inner-div">
	 <div class="query-from">
	 <h3>Quick Contact</h3>
	       <form action="mailquerry.php" method="get" name="form1" class="ines" id="form1">
	      <label>Your Name*</label>
		  <input name="person" type="text" id="lastname" value="" onblur="MM_validateForm('person','','R');return document.MM_returnValue"   />
		       <label>Your Email-ID*</label>
		  <input name="email" type="text" id="email" onblur="MM_validateForm('tel','','NisNum','email','','RisEmail');return document.MM_returnValue" value=""  />

		      <label>Mobile No*</label>
		  <input  name="tel" type="text" id="lastname" value="" onblur="MM_validateForm('tel','','RisNum','email','','NisEmail');return document.MM_returnValue" />

		   <label>Subject</label>
		  <input name="subject" type="text" id="Subject" value="" />

		   <label>Your Message</label>
		  <textarea name="Message"  id="about" onblur="MM_validateForm('about','','R');return document.MM_returnValue"></textarea>
		  <input name="Submit" type="submit" id="Submit"  value="Send" onclick="MM_validateForm('person','','R','address','','R','city','','R','email','','R');return document.MM_returnValue" class="go-btn animate" style="border:0;   font-size: 18px;  padding: 8px 27px; "/>

	 </form>
	 </div>
		<div class="cont-address">
		<h3>Phillibee Infrastructe (P) Ltd.</h3>
<p>F-195, GROUND FLOOR, GANDHI VIHAR, NEW DELHI-110009</p>
 <p ><b>Mobile</b> : +91 - 9910310506</p>
		 <p ><b>Email</b> : phillibee.infrastructure@gmail.com</p>

		 
		 
  <div class="other-brancher-add">
		  
		 	<h3>Other Branches</h3>
	  <select id="support-sts" name="support-sts">
	    <option>Select State</option>
	    <option value="1">Ahmedabad</option>
	    <option value="2">Bangalore</option>
	    <option value="3">Bhubaneswar</option>
	    <option value="4">Chandigarh</option>
	    <option value="5">Chennai</option>
	    <option value="6">Cochin - Kerala</option>
	    <option value="7">Dehradun</option>
	    <option value="8">Ghaziabad</option>
	    <option value="9">Guwahati</option>
	    <option value="10">Hyderabad</option>
	    <option value="11">Indore</option>
	    <option value="12">Jaipur</option>
	    <option value="13">Kolkata</option>
	    <option value="14">Lucknow</option>
	    <option value="15">Ludhiana</option>
	    <option value="16">Mumbai</option>
	    <option value="17">Nagpur</option>
	    <!--<option value="18">Patna</option>-->
	    <option value="19">Pune</option>
	    <option value="20">Raipur</option>
	  </select>
	  <div class="service-center-dtls class-1" >
     </div>

	  </div>

		</div>


	<div class="clear"></div>

		</div>

   <!--about us ends-->

  <!--content part ends-->

</div>

<!--container ends-->
<div class="clear"></div>

<!--footer starts-->

<?php
   include ("footer.php") ;
?>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

</body>

<!-- Mirrored from www.fortune-it.com/Contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Nov 2016 08:03:44 GMT -->
</html>
