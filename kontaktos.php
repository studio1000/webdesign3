<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include "scripts/helpers/kontaktos.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>

<title>eBogholderen.dk - Kontakt os</title>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="style/header.css" type="text/css" />
<link rel="stylesheet" href="style/footer.css" type="text/css" />
<link rel="stylesheet" href="style/index.main.css" type="text/css" />
<!--[if gte IE 6]>
<link rel="stylesheet" href="style/ie.css" type="text/css" />
<![endif]-->
<script src="scripts/lib/jquery-1.9.0.js" type="text/javascript"></script>
<script src="scripts/plugins/jquery.validate.min.js" type="text/javascript"></script>
<script src="scripts/localization/messages_da.js" type="text/javascript"></script>
<script src="scripts/kontaktos.js" type="text/javascript"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38130910-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body class="saadan det_dar_du kontaktos <?php echo $sent?>">

<!--................................................ header -->
<div id="header">
<div id="greenLine">
    <div id="top-cnt">
    <div id="topmenu">
    <a href="min_ebogholder.php">Log ind</a> | <a href="min_ebogholder.php">Bliv bruger</a> | <a href="omos.html">Om os</a>
    </div>
    </div>
</div>
<div id="logo">
<div id="logoImg">
    <a href="index.html" alt="home">
    <img src="images/logo.jpg" width="123" height="122" alt="" />
    </a>
</div>
</div>

<div id="menuBg">
<div id="menu">
<ul>
<li id="firstMenu"><a href="det_far_du.html">Det får du</a></li>
<li><a href="saadan_virker_det.html" >Sådan virker det</a></li>
<li><a href="min_ebogholder.php" class="selected">Min eBogholder</a></li>
</ul>
</div>
</div>

</div>
<!--................................................ main -->
<div id="main">
<!--........... banner -->

<!--........... col1 -->
<div id="col1">
    <a href="komigang.html" alt="KLIK HER OG KOM I GANG PÅ 1 MINUT">
    <div id="box1" >
        <div class="text">
        <p class="text_a">KLIK HER<br /> OG KOM I GANG<br /> PÅ 1 MINUT</p>
        <p class="text_b">eller ring 91 11 11 97</p>
        </div>
        <div class="left"></div>
        <div class="right"></div>
    </div> 
    </a>    
    <a href="det_siger_folk.html" alt="Nyheder - IVÆRKSÆTTEREN - medie for vækst iværksættere">
    <div id="box4" >
        <div class="left"></div>
        <div class="right"></div>
        <div class="text">
        <p class="text_a">"...et revolutionerende koncept inden <br/>for bogføring"</p>
        <p class="text_b">Magasinet Iværksætteren</p>
        
        <div class="btn2">
            <div class="textx">» Hvad folk siger om os </div>
            <div class="leftx"></div>
            <div class="rightx"></div>
        </div>
        </div>
      
    </div> 
    </a>  
<div class="cola">
<div class="colon">
    <div class="etiq">   
    <h1>Kontakt os</h1>
    <h3>eBogholderen.dk</h3>
    <p>Strandboulevarden 23, 2</p>
    <p>2100 København Ø</p>
    <br/>
    <p>Tlf.:  91 11 11 97</p>
    <p>Email: <a href="mailto:kontakt@ebogholderen.dk">kontakt@ebogholderen.dk</a></p>
    </div>
    
    <div id="confirm-msg" class="<?php echo $sent?>">
        <h3>Tak for din besked, du hører snarest fra os</h3>
    </div>
    
<form name="kontakt" id="kontakt" method="post" action="" class="<?php echo $sent?>">
    <div id="download-title"><p>Hvis du ønsker at blive kontaktet af os, skal du blot udfylde formularen</p></div>
    <div id="download-app">
        <table>
            <tr><td class="labels">Virksomhedens navn: *</td><td><input type="text" name="virksomhedens" class="required"/></td></tr>
            <tr><td class="labels">CVR nr: *</td><td><input type="text" name="cvr" class="required"/></td></tr>       
            <tr><td class="labels">Kontaktperson: *</td><td><input type="text" name="contact" class="required"/></td></tr>
            <tr><td class="labels">Telefonnummer: *</td><td><input type="text" name="phone" class="required"/></td></tr>
            <tr><td class="labels">E-mail:*</td><td><input type="email" name="email" class="required"/></td></tr>
            <tr><td class="labels">Eventuel besked:&nbsp;</td><td><textarea name="message" rows="3" ></textarea></td></tr>
        </table>
        <p class="comment <?php echo $sent?>">Alle felter markeret med * skal udfyldes</p>
        <button type="submit" class="btn" href="#">Send</button>
        <div class="clearfix"></div>
    </div>
</form>

</div>     

</div>

</div>

<!--........... col2 -->
<div id="col2">
   
</div>

</div>

<!--................................................ footer -->
<div id="footer">
<div class="footer">
    <a href="cookie_policy.html" id="firstFooter">Cookie policy</a>
    
    <span class="line1" >|</span>
    <a href="juridisk.html" >Juridisk</a>
    <span class="line1" >|</span>
    <a href="kontaktos.php" >Kontakt os</a>
    <!--
    <span class="line1" >|</span>
    <a href="#" >Presse</a>
    -->
    <div id="mark" >&copy;2013 eBogholderen</div>
</div>
</div>

</body>
</html>
