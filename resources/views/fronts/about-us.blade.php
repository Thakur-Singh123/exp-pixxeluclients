<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
</head>


<style>
body{margin:0;padding:0}
.container{max-width:1280px;margin:0 auto;padding:0 15px}
.hero-about {text-align: center;margin-top: 50px;}
.about-image img {width: 35%;}
h3.text-center {font-size: 34px;margin: 0;line-height: 47px;}
.dis-message p {font-size: 21px;margin: 0;line-height: 28px;}
.back-btn {text-align: center;margin-top: 25px;}
.back-btn a {color: #333;text-decoration: none;font-size: 23px;background: #f19000;padding: 10px 30px;border-radius: 10px;}
.main-header{width:100%;text-align:center;font-family:Arial,sans-serif}
.mid-header{background:linear-gradient(to bottom,#f8b77b,#8ccf87);padding:10px 0}
.top-section{position:relative;padding:10px 0;display:flex;justify-content:space-between;align-items:center}
.side-logo{width:70px;height:auto}
.center-content{flex:1}
.center-small-logo{width:120px}
.center-small-logo-1{width:120px}
.title{font-size:22px;font-weight:700;margin:5px 0;text-align: center;}
.tagline{font-size:17px;margin-top:-4px;letter-spacing:.4px;text-transform: uppercase;}
.nav-bar{background:#f5f5f5}
.nav-bar ul {list-style: none;margin: 0;padding: 0;display: flex;justify-content: center;align-items: center;gap: 14px;background: #f5f5f5;padding: 5px 0;}
.nav-bar li{font-size:15px;cursor:pointer;margin: 0;}
.home.active{background:#004000;color:#fff}
.tabs{display:flex;padding:0;margin:0;list-style:none;background:#fff}
.tab a{display:block;padding:10px 16px;font-size:15px;text-decoration:none;color:#000;border-bottom:none;transition:.2s}
li.tab.active{display:block;padding:10px 16px;font-size:15px;text-decoration:none;color:#000;border-bottom:none;transition:.2s}
.tab a:hover{background:#e7ffe7}
li.tab.active:hover{background:#e7ffe7}
.tab.active a{background:#004000;color:#fff;border-color:#004000}
.center-content img.center-small-logo{position:absolute;left:16%}
.center-content img.center-small-logo-1{position:absolute;right:16%}
li.login-btn-11 a {
    text-decoration: none;
    color: #000;
    font-size: 15px;
    background: #f19000;
    padding: 10px 12px;
    border-radius: 10px;
}
</style>

<body>


<header class="main-header">
        <div class="mid-header">
            <div class="container">
                <div class="top-section">
                    <img src="public/admin/images/armylogo.png" alt="Logo" class="side-logo">
                    <div class="center-content">
                        <img src="public/admin/images/logoaz.png" alt="Amrit Mahotsav" class="center-small-logo">
                        <img src="public/admin/images/logogo.png" alt="G20india" class="center-small-logo-1">
                        <h1 class="title">VETERAN SAHAYTA KENDRA</h1>
                        <p class="tagline">Military Station <br><span>Station Headquaters Dharamshala</span></p>
                    </div>
                    <img src="public/admin/images/logonew.png" alt="Logo" class="side-logo">
                </div>
            </div>
        </div>
        <nav class="nav-bar">
            <div class="container">
                <ul class="tabs">
                    <li class="tab active">Home</li>

                    <li class="tab"><a href="http://localhost/exp-pixxeluclients/about-us">About us</a></li>
                    <li class="tab"><a href="http://localhost/exp-pixxeluclients/outreach">Outreach</a></li>
                    <li class="tab"><a href="http://localhost/exp-pixxeluclients/forms">Forms</a></li>
                    <li class="tab"><a href="{{ url('doc') }}">Document</a></li>
                    <li class="tab"><a href="{{ url('Baatcheet') }}">Baatcheet</a></li>
                    <li class="tab"><a href="http://localhost/exp-pixxeluclients/data-bank-details">Data Bank</a></li>
                    <li class="login-btn-11">
                        <a target="_blank" href="http://localhost/exp-pixxeluclients/login">
                            VSK Login
                        </a>
                    </li>

                </ul>
            </div>
    </nav></header>
<div class="container">
    <div class="hero-about">
        <div class="about-image">
            <img src="https://indianewsdiary.com/wp-content/uploads/2024/06/1J5A28744AKZ.jpg"
                alt="GENERAL MANOJ PANDE, PVSM, AVSM, VSM, ADC">
        </div>
        <h3 class="title mt-0 mb-10 text-uppercase text-center">
            <span class="cosa-msg">Brief History</span>
        </h3>
        <div class="dis-message">
            <p>Under the auth of HQ 21 Sub Area SOP No 2010/A4 dt 24 Mar 17, Veteran Sahayta Kendra (VSK) was est at Stn
                HQ Dharamsala wef 17 Jul 2017 for registration of veterans and also addressing issues related to welfare
                of ESM including grievances, pension anomalies and other issues etc. Life certificate will be updated on
                1st Nov to 30th Nov every year! The dependency of ESM of this HQ is 10815 approx.</p>
        </div>

    </div>
    <div class="back-btn">
        <a href="{{ url('/') }}">Back</a>
    </div>
</div>


</body>

</html>
