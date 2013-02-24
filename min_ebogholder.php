<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include "scripts/helpers/kontaktos.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>

<title>eBogholderen.dk - Min eBogholder</title>

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
<script src="scripts/plugins/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>

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

<body class="saadan det_dar_du min_ebogholder <?php echo $sent?>">

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
<div id="banner">

<div id="slide1">



<div id="text1">
<p class="text_a">din helt egen bogholder</p>
<p class="text_b">du altid har adgang til</p>
</div>

<div id="text2">
<p>
Du sender dine bilag – enten med email eller gennem vores app.<br/>
Og så har du det hele samlet og lige til at finde frem igen
</p>
</div>

</div>

</div>
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
    <img src="images/phone.jpg" alt="phone"/>
    <h1>Din helt egen konto</h1>   

    
    <p>Som bruger hos eBogholderen, får du din helt egen konto med egen adgang på vores hjemmeside.</p>

<p>“Min eBogholder” er dit personlige rum og adgang til eBogholderens ydelser, og stedet hvor du løbende vil få adgang til dine bilag, dine momsopgørelser og dit årsregnskab.</p>

<p>Ved at klikke på “Min eBogholder” vil du som bruger, fremover få adgang til dit eget lager af bilagsbilleder, så du i princippet kan smide dine kvitteringer væk, efter at have fotograferet dem med din eBogholder-app.</p>

<p>Vi anbefaler dog at du fortsat gemmer dine bilag, indtil du kan se at de er blevet bogført i “min eBogholder”.</p>

<p>Du vil ligeledes få dit eget bilagsarkiv på din smartphone, så du altid har dine kvitteringer med dig, hvis du skulle få brug for dem, f.eks. hvis du skal have byttet nogle varer eller lignende.</p>

</div>

</div>

<!--........... col2 -->
<div id="col2">
    
</div>
<div class="colon kontakt-div <?php echo $sent?>">
    <p class="<?php echo $sent?>">Vil du gerne oprettes som bruger hos eBogholderen, eller ønsker du blot at høre mere om vores ydelser og muligheder, så udfyld nedenstående formular, og vi kontakter dig helt uforpligtende.
</p>
    <div id="confirm-msg" class="<?php echo $sent?>">
        <h3>Tak for din besked, du hører snarest fra os</h3>
    </div>
<form name="kontakt" id="kontakt" method="post" action="" class="<?php echo $sent?>">
    <div id="download-title"><p>Udfyld formularen, så kontakter vi dig helt uforpligtende</p></div>
    <div id="download-app">
        <table>
            <tr><td class="labels">Virksomhedens navn: *</td><td><input type="text" name="virksomhedens" class="required"/></td></tr>
            <tr><td class="labels">CVR nr: *</td><td><input type="text" name="cvr" class="required"/></td></tr>       
            <tr><td class="labels">Kontaktperson: *</td><td><input type="text" name="contact" class="required"/></td></tr>
            <tr><td class="labels">Telefonnummer: *</td><td><input type="text" name="phone" class="required"/></td></tr>
            <tr><td class="labels">E-mail:*</td><td><input type="email" name="email" class="required"/></td></tr>
            <tr><td class="labels">Eventuel besked:</td><td><textarea name="message" rows="3" ></textarea></td></tr>
        </table>
        <p class="comment <?php echo $sent?>">Alle felter markeret med * skal udfyldes</p>
        <button type="submit" class="btn" href="#">Send</button>
        <div class="clearfix"></div>
    </div>
</form>
<p>Husk, at du altid kan prøve eBogholderen gratis i én måned, for at opleve hvor let det er...</p>
<div class="sep"></div>
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
