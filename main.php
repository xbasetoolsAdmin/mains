<?php require"header.php";?>
          <style>
 
.display  td {
    background: var(--color-card);
      color: var(--font-color);

}
.dataTables_wrapper .dataTables_paginate .paginate_button {

    color: var(--font-color);

}
#balance_data_paginate .paginate_button {
color: var(--font-color);

}

.alert-info {
    color: var(--color-info);
    background-color: var(--color-backinfo);
    border-color: var(--color-borderinfo);

}

#balance_data_filter{
  color: var(--font-color);
}
#balance_data_length{
  color: var(--font-color);
}
#balance_data_paginate{
  color: var(--font-color);
}
#balance_data_info{
  color: var(--font-color);
}

    </style>
    
    
    <body class="them">

    
<script>

        function setTheme(themeName) {
            localStorage.setItem('theme', themeName);
            document.documentElement.className = themeName;
        }

        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        }

        // Immediately invoked function to set the theme on initial load
        (function () {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-dark');
                document.getElementById('slider').checked = false;
            } else {
                setTheme('theme-light');
              document.getElementById('slider').checked = true;
            }
        })();

  </script>


<body class="them">


<nav class="navbar navbar-expand-xl navbar  navbar-light " style="
                                                          position:fixed;
                                                          background-color: var(--color-nav);
                                                          z-index:1;
                                                          top:0;
                                                          left:0;
                                                          right:0;
                                                          line-height: 1.5;
                                                          font-family: 'Lato', sans-serif;
                                                          font-size: 15px;
                                                          padding-top: 0.5rem;
                                                          padding-right: 1rem;
                                                          padding-bottom: 0.5rem;
                                                          padding-left: 1rem;
                                                        ">
<a class="navbar-brand" href="main" style="color: var(--font-color);"><img width="40px" src="buyer/layout/images/logo.png"> Odin</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<i class="navbar-toggler-icon"></i>
</button>
<div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">

<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i>
Hosts
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="rdp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-primary"><span id=""></span></span></a>
<a class="dropdown-item" href="cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary"><span id=""></span></span></a>
<a class="dropdown-item" href="shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary"><span id=""></span></span></a>
</div>
</li>







<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-google-play fa-sm text-success"></i>
Send
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="ssh" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> SSH/WHM <span class="badge badge-primary"><span id=""></span></span></a>
<a class="dropdown-item" href="mailer" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Mailers <span class="badge badge-primary"><span id=""></span></span></a>
<a class="dropdown-item" href="smtp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-primary"><span id=""></span></span></a>
</div></li>







<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mail-bulk fa-sm pink-color"></i>
Leads
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="leads" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> 100% Validated Leads <span class="badge badge-primary"><span id=""></span></span></a>
</div></li>







<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>
Bamks Logs
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="banks" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Banks-Logs <span class="badge badge-primary"><span id=""></span></span></a>
</div></li>







<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i>OtherAccounts
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="accounts" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> premium <span class="badge badge-primary"><span id=""></span></span></a>
</div></li>







<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i>Tutorials/Cashout-Methods
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="tutorial" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Tutorials <span class="badge badge-primary"><span id=""></span></span></a>
</div></li>







<li class="nav-item dropdown mr-auto">
<a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i>Spammers Tools
</a>
<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="requests" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Script/Program/ScamPage <span class="badge badge-primary"><span id=""></span></span></a>
</div></li>







<ul class="navbar-nav profile">
</li>







<li class="nav-item dropdown">
<a class="nav-link" href="offers" style="color: var(--font-color);"><i class="fas fa-user-secret text-primary fa-sm"></i> Bulk Offers</a>
</li>
</ul>






<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell text-danger"></i> <span class="badge badge-success"><span id=""></span></a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item" href="#" style="color: var(--font-color);">There is no new notifications</a> </div>
</li>






<li class="nav-item">
<a class="nav-link" href="addBalance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge badge-danger">
<span id="buyer_balance">
<span class="px-2"><i class="fa fa-plus"></i></span></span></a>
</li>






<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ticket <span class="badge badge-success"><span id=""></span></a>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">Report Items</span>
</a>


<a class="dropdown-item" href="tickets" style="color: var(--font-color);"><span class="px-2">My Tickets <span class="badge badge-success"><span id=""></span></span></a>





<a class="dropdown-item" href="reports" style="color: var(--font-color);"><span class="px-2">My Reports <span class="badge badge-success"><span id=""></span></span></a>
<a class="dropdown-item" href="OpenTicket" style="color: var(--font-color);"><span class="px-2">New Ticket</span></a>
</div>
</li>






<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> XBASELEET 
 <i class="fa fa-user-secret" style="color: var(--font-color);"></i>
</a>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
<a class="dropdown-item" href="setting" style="color: var(--font-color);"><span class="px-2">Setting <i class="fa fa-cog"></i></span></a>
<a class="dropdown-item" href="seller-profile" style="color: var(--font-color);"><span class="px-2">Profile <i class="fa fa-user"></i></span></a>
<a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">My Orders <i class="fa fa-shopping-cart"></i></span></a>
<a class="dropdown-item" href="addBalance" style="color: var(--font-color);"><span class="px-2">Add Balance <i class="fa fa-money-bill-alt"></i></span></a>
<a class="dropdown-item" href="logout" style="color: var(--font-color);"><span class="px-2">Logout <i class="fa fa-door-open"></i></span></a>
</div>
</li>






</ul>






</div>







</nav>
<style>
.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body{
	    padding-top: 35px;
}
.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
    max-width: 500px !important;
    margin: 1.75rem auto !important;
    position: relative;
    width: auto !important;
    pointer-events: none;
}
a.closearb {
    position: absolute;
    top: 2.5px;
    right: 2.5px;
    display: block;
    width: 30px;
    height: 30px;
    text-indent: -9999px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==);
}
</style> 


<div class="d-flex flex-row-reverse mt-0">
<div class="p-2">
<label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round">
</span>
</label>
</div>
</div>







<div class="alert alert-info text-left" role="alert" style="margin: 15px;">
<ul>
monthly pageviews, Alexa Ranks , unique visitors, site revenue (from advertising)<img style="width: 40px;" src="layout/images/new-icon.jpg"> </li>
<li> Click on Plus <i class="fas fa-plus-circle"></i> button to list full information </b> such as domain name and technologies <i class="fab fa-wordpress fa-1x"></i> <i class="fas fa-blog"></i> <i class="fab fa-drupal"></i> <i class="fab fa-php"></i> <i class="fab fa-vuejs"></i> <i class="fab fa-python"></i> <i class="fab fa-laravel"></i> <i class="fab fa-js"></i> <i class="fab fa-joomla"></i> <i class="fab fa-java"></i> <i class="fab fa-node"></i> </li>
<li> Click on check button <i class="fas fa-check-circle"></i> before buy any cPanel to know if it's work or not.</li>
<li> Click on Seo info <i class="fas fa-info"></i> button to check for available <b> SEO </b> info </li>
<li> Click on CHECK BLACKLIST <i class="fas fa-check-circle"></i> before buy any <b> cPanel </b> to check if the host reported as phishing or clean </li>
<li>There is <b> 18038 </b> cPanels Available.</li>
</ul>
</div>






<div class="row m-3 pt-1" style="color: var(--font-color);">
    
    
    
    
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
    
    
    
    
<label for="country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
<select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
    
    
    
<option value="">All Countries</option>
<option value=""></option>



<option value="Algeria">Algeria</option><option value="Angola">Angola</option><option value="Argentina">Argentina</option><option value="Australia">Australia</option><option value="Azerbaijan">Azerbaijan</option><option value="Bangladesh">Bangladesh</option><option value="Belgium">Belgium</option><option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="Bulgaria">Bulgaria</option><option value="Cambodia">Cambodia</option><option value="Canada">Canada</option><option value="Chile">Chile</option><option value="Colombia">Colombia</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Czechia">Czechia</option><option value="Denmark">Denmark</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="Estonia">Estonia</option><option value="Finland">Finland</option><option value="France">France</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Hong Kong SAR China">Hong Kong SAR China</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Kenya">Kenya</option><option value="Latvia">Latvia</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Moldova">Moldova</option><option value="Mongolia">Mongolia</option><option value="Morocco">Morocco</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Nigeria">Nigeria</option><option value="Pakistan">Pakistan</option><option value="Palestinian Territories">Palestinian Territories</option><option value="Panama">Panama</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Serbia">Serbia</option><option value="Singapore">Singapore</option><option value="Slovenia">Slovenia</option><option value="South Africa">South Africa</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Suriname">Suriname</option><option value="Switzerland">Switzerland</option><option value="Taiwan">Taiwan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Vietnam">Vietnam</option><option value="Zimbabwe">Zimbabwe</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="hosting" style="margin-bottom: 10px; margin-top: 5px">Hosting :</label>
<select name="detect_hosting" id="detect_hosting" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value=""></option><option value=", Infrastructure">, Infrastructure</option><option value="1 GRID (PTY) LTD">1 GRID (PTY) LTD</option><option value="1515 ROUNDTABLE DR PROPERTY, LLC">1515 ROUNDTABLE DR PROPERTY, LLC</option><option value="23VNet Kft.">23VNet Kft.</option><option value="24 SHELLS">24 SHELLS</option><option value="305 Stream, Inc.">305 Stream, Inc.</option><option value="360 Internet Inc Ltd.">360 Internet Inc Ltd.</option><option value="7ion.co.id">7ion.co.id</option><option value="A2 Hosting, Inc.">A2 Hosting, Inc.</option><option value="Aamra Networks Limited">Aamra Networks Limited</option><option value="Abazarhaye Farsi Shabakeh (Persian Tools) Co.,LTD.">Abazarhaye Farsi Shabakeh (Persian Tools) Co.,LTD.</option><option value="Ace Data Centers, Inc.">Ace Data Centers, Inc.</option><option value="ACENET, INC.">ACENET, INC.</option><option value="ACL. COM. E SERV. E EMP. LTDA.">ACL. COM. E SERV. E EMP. LTDA.</option><option value="ADENTRO DATA CENTER SOLUTIONS LTDA">ADENTRO DATA CENTER SOLUTIONS LTDA</option><option value="Advanced Internet Technologies, Inc.">Advanced Internet Technologies, Inc.</option><option value="Advanced Online Solutions, Inc.">Advanced Online Solutions, Inc.</option><option value="Advika Web Developments Hosting Pvt Ltd">Advika Web Developments Hosting Pvt Ltd</option><option value="Adylnet Telecom">Adylnet Telecom</option><option value="AE-HOSTSAILOR9-20180920">AE-HOSTSAILOR9-20180920</option><option value="Aerotek Bilisim Sanayi ve Ticaret AS">Aerotek Bilisim Sanayi ve Ticaret AS</option><option value="Afrihost (Pty) Ltd">Afrihost (Pty) Ltd</option><option value="AgileRack Inc.">AgileRack Inc.</option><option value="ahmed mohammed">ahmed mohammed</option><option value="AIRE NETWORKS DEL MEDITERRANEO SL UNIPERSONAL">AIRE NETWORKS DEL MEDITERRANEO SL UNIPERSONAL</option><option value="Akamai Technologies, Inc.">Akamai Technologies, Inc.</option><option value="AktasWeb internet Hizmetleri">AktasWeb internet Hizmetleri</option><option value="Akton d.o.o.">Akton d.o.o.</option><option value="Al-Safi Samer">Al-Safi Samer</option><option value="Alastyr Telekomunikasyon A.S.">Alastyr Telekomunikasyon A.S.</option><option value="Alfanet LLC">Alfanet LLC</option><option value="ALGAR TELECOM S/A">ALGAR TELECOM S/A</option><option value="Allstream Corp.">Allstream Corp.</option><option value="Allytech S.A.">Allytech S.A.</option><option value="ALMOUROLTEC SERVICOS DE INFORMATICA E INTERNET LDA">ALMOUROLTEC SERVICOS DE INFORMATICA E INTERNET LDA</option><option value="Alpha dot Net Australia Pty Ltd">Alpha dot Net Australia Pty Ltd</option><option value="AltusHost B.V.">AltusHost B.V.</option><option value="Amazon Technologies Inc. (AMAZON)">Amazon Technologies Inc. (AMAZON)</option><option value="Amazon Technologies Inc. (EC2)">Amazon Technologies Inc. (EC2)</option><option value="Amazon Technologies Inc. (GLOBALACCELERATOR, Global)">Amazon Technologies Inc. (GLOBALACCELERATOR, Global)</option><option value="Amazon.com, Inc.">Amazon.com, Inc.</option><option value="Amito Ltd">Amito Ltd</option><option value="ANACONDAWEB S.A.">ANACONDAWEB S.A.</option><option value="Angel Ricardo, Benites Tapia">Angel Ricardo, Benites Tapia</option><option value="Annarsy SRL">Annarsy SRL</option><option value="ANS ACADEMY LIMITED">ANS ACADEMY LIMITED</option><option value="APIK Media Networks">APIK Media Networks</option><option value="Aptum Technologies">Aptum Technologies</option><option value="Aptum Technologies (UK) Limited">Aptum Technologies (UK) Limited</option><option value="ARDH GLOBAL INDONESIA, PT">ARDH GLOBAL INDONESIA, PT</option><option value="Argon Data Communication">Argon Data Communication</option><option value="Aria Shatel Company Ltd">Aria Shatel Company Ltd</option><option value="Ariana Gostar Spadana (PJSC)">Ariana Gostar Spadana (PJSC)</option><option value="Arigo Technologies">Arigo Technologies</option><option value="Artnet Sp. z o.o.">Artnet Sp. z o.o.</option><option value="Aruba S.p.A.">Aruba S.p.A.</option><option value="Arvid Logicum OÃ">Arvid Logicum OÃ</option><option value="Arvid Logicum OU">Arvid Logicum OU</option><option value="AS de CAFE Informatique">AS de CAFE Informatique</option><option value="Asia Pacific Network Information Centre">Asia Pacific Network Information Centre</option><option value="Asiatech Data Transmission company">Asiatech Data Transmission company</option><option value="Asociatia Interlan">Asociatia Interlan</option><option value="Asre Pardazeshe Ettelaate Amin Institute">Asre Pardazeshe Ettelaate Amin Institute</option><option value="AT&T Services, Inc.">AT&T Services, Inc.</option><option value="Atak Domain Hosting Internet ve Bilgi Teknolojileri Ltd. Sti.">Atak Domain Hosting Internet ve Bilgi Teknolojileri Ltd. Sti.</option><option value="Atha Media Prima CV.">Atha Media Prima CV.</option><option value="Athenix Inc.">Athenix Inc.</option><option value="ATI - Agence Tunisienne Internet">ATI - Agence Tunisienne Internet</option><option value="Atlantic Metro Communications II, Inc.">Atlantic Metro Communications II, Inc.</option><option value="Atlantic.Net - New York, NY">Atlantic.Net - New York, NY</option><option value="Atman Sp. z o.o.">Atman Sp. z o.o.</option><option value="Automattic, Inc">Automattic, Inc</option><option value="Avalon d.o.o.">Avalon d.o.o.</option><option value="awandata.co.id">awandata.co.id</option><option value="Awareness Software Limited">Awareness Software Limited</option><option value="AXARNET COMUNICACIONES, S.L.">AXARNET COMUNICACIONES, S.L.</option><option value="AXGN">AXGN</option><option value="B2 Net Solutions Inc.">B2 Net Solutions Inc.</option><option value="Bach Kim Network solutions Join stock company">Bach Kim Network solutions Join stock company</option><option value="Balasai Net Pvt. Ltd.">Balasai Net Pvt. Ltd.</option><option value="Banglanet">Banglanet</option><option value="Beanfield Technologies Inc.">Beanfield Technologies Inc.</option><option value="Behin Ertebatat Faragir Co. Ltd">Behin Ertebatat Faragir Co. Ltd</option><option value="Benites, Angel">Benites, Angel</option><option value="BigScoots">BigScoots</option><option value="Bijoy Online Ltd">Bijoy Online Ltd</option><option value="BIZNET NETWORKS">BIZNET NETWORKS</option><option value="Blacknight Internet Solutions Limited">Blacknight Internet Solutions Limited</option><option value="BLZNET SERVICOS DE INTERNET LTDA - ME">BLZNET SERVICOS DE INTERNET LTDA - ME</option><option value="Brain NET">Brain NET</option><option value="Branch of BachKim Network solutions jsc">Branch of BachKim Network solutions jsc</option><option value="Brasil Site Informatica LTDA">Brasil Site Informatica LTDA</option><option value="Brasil Web Host">Brasil Web Host</option><option value="Brasil Web Host - ServiÃ§os Web">Brasil Web Host - ServiÃ§os Web</option><option value="Braychuk, Bohdan">Braychuk, Bohdan</option><option value="Broadband Network Services">Broadband Network Services</option><option value="BrownArc Enterprises Private Limited">BrownArc Enterprises Private Limited</option><option value="BWF Hosting Ltd">BWF Hosting Ltd</option><option value="CAFE Informatique et telecommunications">CAFE Informatique et telecommunications</option><option value="Canaca-com Inc.">Canaca-com Inc.</option><option value="Canfone.com Inc.">Canfone.com Inc.</option><option value="CARI Internet Sdn Bhd">CARI Internet Sdn Bhd</option><option value="CARIBBEAN COMMUNICATION SERVICES">CARIBBEAN COMMUNICATION SERVICES</option><option value="CariNet, Inc.">CariNet, Inc.</option><option value="Castlegem SRL">Castlegem SRL</option><option value="Caucasus Online Ltd.">Caucasus Online Ltd.</option><option value="cbncloud.co.id">cbncloud.co.id</option><option value="CeFlix Scepter LTD">CeFlix Scepter LTD</option><option value="CEFLIX-SCEPTER LIMITED">CEFLIX-SCEPTER LIMITED</option><option value="Cellcom Fixed Line Communication L.P">Cellcom Fixed Line Communication L.P</option><option value="centratm.com">centratm.com</option><option value="Centro de Tecnologia Armazem Datacenter Ltda.">Centro de Tecnologia Armazem Datacenter Ltda.</option><option value="CenturyLink Communications, LLC">CenturyLink Communications, LLC</option><option value="Cenuta Telekomunikasyon Anonim Sirketi">Cenuta Telekomunikasyon Anonim Sirketi</option><option value="CETIN Hungary Zrt.">CETIN Hungary Zrt.</option><option value="Cgest S.A.">Cgest S.A.</option><option value="CHILECOM DATACENTER LIMITADA">CHILECOM DATACENTER LIMITADA</option><option value="ChiliCloud, S.A. de C.V.">ChiliCloud, S.A. de C.V.</option><option value="China Telecom">China Telecom</option><option value="Chunghwa Telecom Co., Ltd.">Chunghwa Telecom Co., Ltd.</option><option value="CILNET Comunicacao e Informatica LTDA.">CILNET Comunicacao e Informatica LTDA.</option><option value="City Net Telecom">City Net Telecom</option><option value="CityNet Host">CityNet Host</option><option value="CIZGI TELEKOMUNIKASYON ANONIM SIRKETI">CIZGI TELEKOMUNIKASYON ANONIM SIRKETI</option><option value="Claranet Limited">Claranet Limited</option><option value="CLAUS WEB srl">CLAUS WEB srl</option><option value="CLDIN B.V.">CLDIN B.V.</option><option value="CLIENTE ANTEL URUGUAY">CLIENTE ANTEL URUGUAY</option><option value="Cloud 9 Ltd.">Cloud 9 Ltd.</option><option value="Cloud Holding International inc">Cloud Holding International inc</option><option value="Cloud Host Pte Ltd">Cloud Host Pte Ltd</option><option value="CloudCone, LLC">CloudCone, LLC</option><option value="CloudFlare">CloudFlare</option><option value="Cloudflare, Inc.">Cloudflare, Inc.</option><option value="CMC Telecom Infrastructure Company">CMC Telecom Infrastructure Company</option><option value="Code For Host Inc Ltd">Code For Host Inc Ltd</option><option value="Codero">Codero</option><option value="colo.co.id">colo.co.id</option><option value="Colocation America Corporation">Colocation America Corporation</option><option value="Colocation Cloud">Colocation Cloud</option><option value="CoLoCity Ltd">CoLoCity Ltd</option><option value="ColoCone">ColoCone</option><option value="ColoCone Limited">ColoCone Limited</option><option value="ColoCrossing">ColoCrossing</option><option value="Colombia Hosting">Colombia Hosting</option><option value="Columbus Networks Panama">Columbus Networks Panama</option><option value="Companhia de Telecomunicacoes do Brasil Central">Companhia de Telecomunicacoes do Brasil Central</option><option value="COMPUTADORES E SISTEMAS LTDA">COMPUTADORES E SISTEMAS LTDA</option><option value="Compuweb Communications Services Limited">Compuweb Communications Services Limited</option><option value="COMSATS">COMSATS</option><option value="Contabo Asia Private Limited">Contabo Asia Private Limited</option><option value="Contabo Asia Private LTD">Contabo Asia Private LTD</option><option value="Contabo GmbH">Contabo GmbH</option><option value="Contabo Inc">Contabo Inc</option><option value="Contabo Inc.">Contabo Inc.</option><option value="Core Network">Core Network</option><option value="Coreix Ltd">Coreix Ltd</option><option value="creativeON">creativeON</option><option value="CREATTIVA INTERNET LTDA">CREATTIVA INTERNET LTDA</option><option value="CrocWeb">CrocWeb</option><option value="CtrlS">CtrlS</option><option value="CtrlS Datacenters Ltd.">CtrlS Datacenters Ltd.</option><option value="CV. Argon Data Network">CV. Argon Data Network</option><option value="CV. JOGJACAMP">CV. JOGJACAMP</option><option value="CV. Saranaindo">CV. Saranaindo</option><option value="Cyber Wurx">Cyber Wurx</option><option value="Cyber Wurx LLC">Cyber Wurx LLC</option><option value="cyberdata.co.id">cyberdata.co.id</option><option value="Cyberdine Informatica LTDA">Cyberdine Informatica LTDA</option><option value="Cynergic Pty Ltd">Cynergic Pty Ltd</option><option value="Dade Pardazan Fahim Shahin Shahr (Ltd)">Dade Pardazan Fahim Shahin Shahr (Ltd)</option><option value="Dade Pardazi Mobinhost Co LTD">Dade Pardazi Mobinhost Co LTD</option><option value="Dallas Infrastructure Services LLC">Dallas Infrastructure Services LLC</option><option value="Database Mart, LLC">Database Mart, LLC</option><option value="Datacamp Limited">Datacamp Limited</option><option value="DATAHOST">DATAHOST</option><option value="DataKeepers (Pty) Ltd">DataKeepers (Pty) Ltd</option><option value="DataKeepers Ltd">DataKeepers Ltd</option><option value="DataKL Solutions Sdn Bhd">DataKL Solutions Sdn Bhd</option><option value="Daticum AD">Daticum AD</option><option value="Dattatec.com">Dattatec.com</option><option value="DC Host INC">DC Host INC</option><option value="DCH COMPAÃIA DE COMUNICACIONES E INMOBILIARIA LTDA">DCH COMPAÃIA DE COMUNICACIONES E INMOBILIARIA LTDA</option><option value="dedicated co-located servers or virtual servers">dedicated co-located servers or virtual servers</option><option value="Dedicated Servers">Dedicated Servers</option><option value="Dedicated.com">Dedicated.com</option><option value="DediPath">DediPath</option><option value="DediPath LLC">DediPath LLC</option><option value="Delta Centric LLC">Delta Centric LLC</option><option value="Delta HighTech Ltd.">Delta HighTech Ltd.</option><option value="DFI Service SA">DFI Service SA</option><option value="DFW Datacenter">DFW Datacenter</option><option value="DFW Datacenter;">DFW Datacenter;</option><option value="DHAKACOLO (PVT.) LIMITED.">DHAKACOLO (PVT.) LIMITED.</option><option value="DIAMATRIX C.C">DIAMATRIX C.C</option><option value="Diana Host Ltd">Diana Host Ltd</option><option value="DIGITAL SINGULARITY S.R.L">DIGITAL SINGULARITY S.R.L</option><option value="Digital Space Group Limited">Digital Space Group Limited</option><option value="Digital Synapse">Digital Synapse</option><option value="DigitalOcean, LLC">DigitalOcean, LLC</option><option value="Digiweb ltd">Digiweb ltd</option><option value="DIMENOC SERVICOS DE INFORMATICA LTDA">DIMENOC SERVICOS DE INFORMATICA LTDA</option><option value="Dimension Data">Dimension Data</option><option value="Dinas Perhubungan Kominfo Provinsi Sumatera Selatan">Dinas Perhubungan Kominfo Provinsi Sumatera Selatan</option><option value="Ditcom Internet Ltda.">Ditcom Internet Ltda.</option><option value="Dm Lot Infotech Solutions Private Limited">Dm Lot Infotech Solutions Private Limited</option><option value="DMLWEB SL DMLWEB SL">DMLWEB SL DMLWEB SL</option><option value="DMNS - DOMINIOS, S.A.">DMNS - DOMINIOS, S.A.</option><option value="DoclerWeb Informatikai Kft.">DoclerWeb Informatikai Kft.</option><option value="DOCTORDATA INFORMATICA LTDA">DOCTORDATA INFORMATICA LTDA</option><option value="Domain names registrar REG.RU, Ltd">Domain names registrar REG.RU, Ltd</option><option value="dominios.pt">dominios.pt</option><option value="DotRoll">DotRoll</option><option value="Dream Fusion - IT Services, Lda">Dream Fusion - IT Services, Lda</option><option value="DreamIT Host, Abuse">DreamIT Host, Abuse</option><option value="Dreamscape Networks PTY LTD">Dreamscape Networks PTY LTD</option><option value="Drik ICT Ltd">Drik ICT Ltd</option><option value="Drustvo za telekomunikacije Orion telekom doo Beograd-Zemun">Drustvo za telekomunikacije Orion telekom doo Beograd-Zemun</option><option value="Dwarven Holdings, LLC">Dwarven Holdings, LLC</option><option value="E2E Networks Limited">E2E Networks Limited</option><option value="ECONET VIETNAM CORPORATION">ECONET VIETNAM CORPORATION</option><option value="edigitech">edigitech</option><option value="EgyProTech - EgyProHost Ltd">EgyProTech - EgyProHost Ltd</option><option value="ELSERVER S.R.L">ELSERVER S.R.L</option><option value="EMAX GLOBAL MEDIA PVT. LTD">EMAX GLOBAL MEDIA PVT. LTD</option><option value="EMIRATES TELECOMMUNICATIONS GROUP COMPANY (ETISALAT GROUP) PJSC">EMIRATES TELECOMMUNICATIONS GROUP COMPANY (ETISALAT GROUP) PJSC</option><option value="ENGETRONICS INTERNET DATACENTER">ENGETRONICS INTERNET DATACENTER</option><option value="Enix Ltd">Enix Ltd</option><option value="Enzu Inc.">Enzu Inc.</option><option value="Equinix (EMEA) Acquisition Enterprises B.V.">Equinix (EMEA) Acquisition Enterprises B.V.</option><option value="EQUINIX BRASIL">EQUINIX BRASIL</option><option value="ESDS Software Solution Limited.">ESDS Software Solution Limited.</option><option value="EtelligentHost">EtelligentHost</option><option value="Ethernic LLC">Ethernic LLC</option><option value="eUKhost LTD">eUKhost LTD</option><option value="EUROTA INTERNET SERVICES LTD">EUROTA INTERNET SERVICES LTD</option><option value="EVEO Serviï¿½os de Internet Ltda.">EVEO Serviï¿½os de Internet Ltda.</option><option value="Everdata Technologies Pvt Ltd">Everdata Technologies Pvt Ltd</option><option value="Evionyx Solutions UG (haftungsbeschraenkt)">Evionyx Solutions UG (haftungsbeschraenkt)</option><option value="Exa Bytes Network Sdn.Bhd.">Exa Bytes Network Sdn.Bhd.</option><option value="Exabytes Cloud Sdn.Bhd.">Exabytes Cloud Sdn.Bhd.</option><option value="Exabytes Network (Singapore) Pte. Ltd.">Exabytes Network (Singapore) Pte. Ltd.</option><option value="Exim Host SRL">Exim Host SRL</option><option value="ExonHost">ExonHost</option><option value="Extreme Broadband">Extreme Broadband</option><option value="EZIT Cloud Services">EZIT Cloud Services</option><option value="FALBOX S.L. trading as NIXVAL">FALBOX S.L. trading as NIXVAL</option><option value="Fanavari Serverpars Argham Gostar Company Ltd.">Fanavari Serverpars Argham Gostar Company Ltd.</option><option value="Fannavari Etelaate Samane Kavoshgar Ide Ltd.">Fannavari Etelaate Samane Kavoshgar Ide Ltd.</option><option value="Faraso Samaneh Pasargad Ltd.">Faraso Samaneh Pasargad Ltd.</option><option value="Fast Serv Networks, LLC">Fast Serv Networks, LLC</option><option value="Fasthosts Internet Inc.">Fasthosts Internet Inc.</option><option value="Fasthosts Internet Limited">Fasthosts Internet Limited</option><option value="Fatollahi sis Ahad">Fatollahi sis Ahad</option><option value="Ferenz Networks">Ferenz Networks</option><option value="Ficolo Oy">Ficolo Oy</option><option value="firstcolo GmbH">firstcolo GmbH</option><option value="Flarezen Ltd.">Flarezen Ltd.</option><option value="Flokinet Ltd">Flokinet Ltd</option><option value="Foroquimica SL">Foroquimica SL</option><option value="FPT Telecom Company">FPT Telecom Company</option><option value="FranTech Solutions">FranTech Solutions</option><option value="Freethought Internet Limited">Freethought Internet Limited</option><option value="G-Core Labs S.A.">G-Core Labs S.A.</option><option value="Garrison Network Solutions LLC">Garrison Network Solutions LLC</option><option value="GB Network Solutions Sdn. Bhd.">GB Network Solutions Sdn. Bhd.</option><option value="GBLINK NETWORK SOLUTIONS PRIVATE LIMITED">GBLINK NETWORK SOLUTIONS PRIVATE LIMITED</option><option value="GBLIX EIRELI - ME">GBLIX EIRELI - ME</option><option value="GDY-US-EAST">GDY-US-EAST</option><option value="Genious Communications">Genious Communications</option><option value="Georgian Research and Educational Networking Association (GRENA)">Georgian Research and Educational Networking Association (GRENA)</option><option value="Gigabit Hosting Sdn Bhd">Gigabit Hosting Sdn Bhd</option><option value="GIGAS HOSTING">GIGAS HOSTING</option><option value="GINERNET S.L.">GINERNET S.L.</option><option value="GK2 CLOUD EIRELI">GK2 CLOUD EIRELI</option><option value="GKG.NET, INC">GKG.NET, INC</option><option value="Globalhost d.o.o.">Globalhost d.o.o.</option><option value="GLOBALTELEHOST CORP.">GLOBALTELEHOST CORP.</option><option value="GloboTech Communications">GloboTech Communications</option><option value="GMO INTERNET PTE. LTD. 20 ANSON ROAD # 09-02 TWENTY ANSON">GMO INTERNET PTE. LTD. 20 ANSON ROAD # 09-02 TWENTY ANSON</option><option value="GMO-Z.COM PTE. LTD.">GMO-Z.COM PTE. LTD.</option><option value="GMO-Z.com Runsystem Joint Stock Company">GMO-Z.com Runsystem Joint Stock Company</option><option value="GNET Internet Telekomunikasyon A.S.">GNET Internet Telekomunikasyon A.S.</option><option value="Go Daddy Netherlands B.V.">Go Daddy Netherlands B.V.</option><option value="GO-DADDY-COM-LLC">GO-DADDY-COM-LLC</option><option value="GoDaddy.com, LLC">GoDaddy.com, LLC</option><option value="Google LLC">Google LLC</option><option value="Gotic Matej">Gotic Matej</option><option value="GovNET Inc">GovNET Inc</option><option value="GREEK INTERNET SERVICES">GREEK INTERNET SERVICES</option><option value="Green Web Samaneh Novin Co Ltd">Green Web Samaneh Novin Co Ltd</option><option value="Groupe Barizco Inc.">Groupe Barizco Inc.</option><option value="Groupe LWS SARL">Groupe LWS SARL</option><option value="GRUPO CG LIMITADA">GRUPO CG LIMITADA</option><option value="GRUPO ZGH SPA">GRUPO ZGH SPA</option><option value="GTHost">GTHost</option><option value="GTS Telecom SRL">GTS Telecom SRL</option><option value="Gujarat Telelink Pvt Ltd">Gujarat Telelink Pvt Ltd</option><option value="Guzel Hosting GNET Internet Telekomunikasyon A.S.">Guzel Hosting GNET Internet Telekomunikasyon A.S.</option><option value="H4Y Technologies LLC">H4Y Technologies LLC</option><option value="H88 WEB HOSTING S.R.L.">H88 WEB HOSTING S.R.L.</option><option value="H88 Web Hosting SRL">H88 Web Hosting SRL</option><option value="Habari Node Public Limited">Habari Node Public Limited</option><option value="Hadara Technologies Private Shareholding Company">Hadara Technologies Private Shareholding Company</option><option value="Handy Networks, LLC">Handy Networks, LLC</option><option value="Hawk Host Inc.">Hawk Host Inc.</option><option value="Hayal Host Internet Ve Bilisim Teknolojileri Sanayi Ticaret Limited Sirketi">Hayal Host Internet Ve Bilisim Teknolojileri Sanayi Ticaret Limited Sirketi</option><option value="Hetzner Online GmbH">Hetzner Online GmbH</option><option value="hetzner.com">hetzner.com</option><option value="Hivelocity Ventures Corp">Hivelocity Ventures Corp</option><option value="HIVELOCITY, Inc.">HIVELOCITY, Inc.</option><option value="Holdus Group">Holdus Group</option><option value="HOS-1354333">HOS-1354333</option><option value="HOS-141369">HOS-141369</option><option value="HOS-152400">HOS-152400</option><option value="HOS-172073">HOS-172073</option><option value="HOS-232727">HOS-232727</option><option value="HOS-543248">HOS-543248</option><option value="HOS-745730">HOS-745730</option><option value="Host Africa (Pty) Ltd">Host Africa (Pty) Ltd</option><option value="Host Color">Host Color</option><option value="Host Department NJ, LLC">Host Department NJ, LLC</option><option value="Host Europe GmbH">Host Europe GmbH</option><option value="HOST GATE SRL">HOST GATE SRL</option><option value="Host Lincoln Limited">Host Lincoln Limited</option><option value="Host More Brasil, Host More Brasil">Host More Brasil, Host More Brasil</option><option value="HOST NETWORKS">HOST NETWORKS</option><option value="Host Papa Inc.">Host Papa Inc.</option><option value="Host Papa, Inc.">Host Papa, Inc.</option><option value="Host Sailor Ltd">Host Sailor Ltd</option><option value="Host Universal Pty Ltd">Host Universal Pty Ltd</option><option value="Host4Geeks LLC">Host4Geeks LLC</option><option value="HOSTART LLC">HOSTART LLC</option><option value="HOSTDIME COM. CO S.A.S.">HOSTDIME COM. CO S.A.S.</option><option value="HostDime.com, Inc.">HostDime.com, Inc.</option><option value="HOSTEAZA SRL">HOSTEAZA SRL</option><option value="HOSTERION SRL">HOSTERION SRL</option><option value="HOSTEUR SAS">HOSTEUR SAS</option><option value="Hostgator.com LLC">Hostgator.com LLC</option><option value="HostGo">HostGo</option><option value="Hosting Servers">Hosting Servers</option><option value="Hosting Services, Inc.">Hosting Services, Inc.</option><option value="HOSTING.CL">HOSTING.CL</option><option value="Hostinger International Limited">Hostinger International Limited</option><option value="HOSTINGET TELEKOMUNIKASYON TICARET LTD. STI.">HOSTINGET TELEKOMUNIKASYON TICARET LTD. STI.</option><option value="hostingsource.com">hostingsource.com</option><option value="HostLAB Bilisim Teknolojileri A.S.">HostLAB Bilisim Teknolojileri A.S.</option><option value="HostMF">HostMF</option><option value="Hostopia Australia Web Pty Ltd">Hostopia Australia Web Pty Ltd</option><option value="HostPapa">HostPapa</option><option value="HostRocket Web Services">HostRocket Web Services</option><option value="HOSTSEO-LTD">HOSTSEO-LTD</option><option value="Hostssd | 2009-2022 - ServiÃ§os de Internet">Hostssd | 2009-2022 - ServiÃ§os de Internet</option><option value="Hostssd | 2009-2022 - Serviï¿½os de Internet">Hostssd | 2009-2022 - Serviï¿½os de Internet</option><option value="HostUS">HostUS</option><option value="HostUS Solutions LLC">HostUS Solutions LLC</option><option value="Hostwinds LLC.">Hostwinds LLC.</option><option value="HRC Technologies Ltd">HRC Technologies Ltd</option><option value="Hrvatski Telekom d.d.">Hrvatski Telekom d.d.</option><option value="HUAWEI INTERNATIONAL PTE. LTD.">HUAWEI INTERNATIONAL PTE. LTD.</option><option value="Hudson Valley Host">Hudson Valley Host</option><option value="Hurricane Electric LLC">Hurricane Electric LLC</option><option value="Hydra Communications Ltd">Hydra Communications Ltd</option><option value="Hyperhost LTD">Hyperhost LTD</option><option value="I Fastnet Ltd">I Fastnet Ltd</option><option value="IBEE Software Solutions Pvt. Ltd.">IBEE Software Solutions Pvt. Ltd.</option><option value="iConvergence">iConvergence</option><option value="ICORE TECHNOLOGY">ICORE TECHNOLOGY</option><option value="IDC TELECOM LTDA">IDC TELECOM LTDA</option><option value="IDC19 - WDI SOLUCOES EM TEC INFORMACAO LTDA">IDC19 - WDI SOLUCOES EM TEC INFORMACAO LTDA</option><option value="idcloudhost.com">idcloudhost.com</option><option value="IFX NETWORKS COLOMBIA">IFX NETWORKS COLOMBIA</option><option value="IHS Kurumsal Teknoloji Hizmetleri A.S">IHS Kurumsal Teknoloji Hizmetleri A.S</option><option value="Iksir Internet Hizmetleri A.S.">Iksir Internet Hizmetleri A.S.</option><option value="Inc. ServerAdda">Inc. ServerAdda</option><option value="Incapsula Inc">Incapsula Inc</option><option value="INCOMIT SOLUTION">INCOMIT SOLUTION</option><option value="INCX Global, LLC">INCX Global, LLC</option><option value="INDAX SPA">INDAX SPA</option><option value="INDO Internet, PT">INDO Internet, PT</option><option value="Indonesia Network Information Center">Indonesia Network Information Center</option><option value="iNET Solutions for computer Co.">iNET Solutions for computer Co.</option><option value="InMotion Hosting, Inc.">InMotion Hosting, Inc.</option><option value="INNOVATION GROUP HOSTING">INNOVATION GROUP HOSTING</option><option value="Innowacyjne Rozwiazania Informatyczne.pl sp. z o.o.">Innowacyjne Rozwiazania Informatyczne.pl sp. z o.o.</option><option value="Input Output Flood LLC">Input Output Flood LLC</option><option value="Inq. Digital Limited">Inq. Digital Limited</option><option value="Insidesign Tecnologia Ltda EPP">Insidesign Tecnologia Ltda EPP</option><option value="Instra Corporation Pty Ltd">Instra Corporation Pty Ltd</option><option value="Intech Online Private Limited">Intech Online Private Limited</option><option value="IntechDC">IntechDC</option><option value="INTER-K Internet Service">INTER-K Internet Service</option><option value="InterBS S.R.L. (BAEHOST)">InterBS S.R.L. (BAEHOST)</option><option value="INTERNEXA Brasil Operadora de Telecomunicaï¿½ï¿½es S.A">INTERNEXA Brasil Operadora de Telecomunicaï¿½ï¿½es S.A</option><option value="INTERNEXA S.A. E.S.P">INTERNEXA S.A. E.S.P</option><option value="Interserver, Inc">Interserver, Inc</option><option value="INTRA Network Systems Ltd">INTRA Network Systems Ltd</option><option value="Invision Seven Solutions">Invision Seven Solutions</option><option value="Invitech ICT Services Kft.">Invitech ICT Services Kft.</option><option value="IOMART CLOUD SERVICES LIMITED">IOMART CLOUD SERVICES LIMITED</option><option value="IOMART HOSTING LIMITED">IOMART HOSTING LIMITED</option><option value="IONOS Inc.">IONOS Inc.</option><option value="IP Range Snel.com">IP Range Snel.com</option><option value="IP ServerOne Solutions Sdn Bhd">IP ServerOne Solutions Sdn Bhd</option><option value="IP Volume inc">IP Volume inc</option><option value="IPS Inc.">IPS Inc.</option><option value="IPXO LIMITED">IPXO LIMITED</option><option value="IPXO LLC">IPXO LLC</option><option value="Iran Telecommunication Company PJS">Iran Telecommunication Company PJS</option><option value="IROKO Networks Corporation">IROKO Networks Corporation</option><option value="Is Net Elektonik Bilgi Uretim Dagitim Ticaret ve Iletisim Hizmetleri A.S.">Is Net Elektonik Bilgi Uretim Dagitim Ticaret ve Iletisim Hizmetleri A.S.</option><option value="Islamic University of Gaza">Islamic University of Gaza</option><option value="IT CONCEPT SRL">IT CONCEPT SRL</option><option value="ITMNETWORKS LTDA">ITMNETWORKS LTDA</option><option value="iWeb CO Servers">iWeb CO Servers</option><option value="iWeb Dedicated CL">iWeb Dedicated CL</option><option value="iWeb Dedicated CL2">iWeb Dedicated CL2</option><option value="iWeb Dedicated NE">iWeb Dedicated NE</option><option value="iWeb Technologies Inc.">iWeb Technologies Inc.</option><option value="iWeb VPN Services">iWeb VPN Services</option><option value="JALAnet - connecting U">JALAnet - connecting U</option><option value="JasTel Network">JasTel Network</option><option value="JAWA POS NATIONAL NETWORK MEDIALINK, PT">JAWA POS NATIONAL NETWORK MEDIALINK, PT</option><option value="jbmserver - IPv4 Network">jbmserver - IPv4 Network</option><option value="Jimat Technology Solution">Jimat Technology Solution</option><option value="jogjacamp.co.id">jogjacamp.co.id</option><option value="Jogjahost - Hosting">Jogjahost - Hosting</option><option value="John Smith">John Smith</option><option value="Jordan Data Communications Company LLC">Jordan Data Communications Company LLC</option><option value="Jordan Tech SRL">Jordan Tech SRL</option><option value="Jose Antonio Vazquez Quian">Jose Antonio Vazquez Quian</option><option value="Jumpline Inc">Jumpline Inc</option><option value="Kareh Anas">Kareh Anas</option><option value="Keliweb S.R.L">Keliweb S.R.L</option><option value="Kenyaweb.com, Nairobi Kenya">Kenyaweb.com, Nairobi Kenya</option><option value="key-systems.net">key-systems.net</option><option value="KGIX">KGIX</option><option value="Khoo Jansen">Khoo Jansen</option><option value="KIUBIX S.A. DE C.V.">KIUBIX S.A. DE C.V.</option><option value="KPN B.V.">KPN B.V.</option><option value="Krystal Hosting Ltd">Krystal Hosting Ltd</option><option value="Krysztof Dziewonski trading as EHOST">Krysztof Dziewonski trading as EHOST</option><option value="KT Computer and Network">KT Computer and Network</option><option value="Kualo Limited">Kualo Limited</option><option value="KVC Hosting">KVC Hosting</option><option value="kwt360">kwt360</option><option value="LankaHost Web Solutions (Pvt) Ltd">LankaHost Web Solutions (Pvt) Ltd</option><option value="Latin American and Caribbean IP address Regional Registry">Latin American and Caribbean IP address Regional Registry</option><option value="LeapSwitch Networks Pvt Ltd">LeapSwitch Networks Pvt Ltd</option><option value="Leaseweb Asia Pacific pte. ltd.">Leaseweb Asia Pacific pte. ltd.</option><option value="Leaseweb Deutschland GmbH">Leaseweb Deutschland GmbH</option><option value="LEASEWEB HONG KONG LIMITED">LEASEWEB HONG KONG LIMITED</option><option value="LeaseWeb Netherlands B.V.">LeaseWeb Netherlands B.V.</option><option value="LEASEWEB UK LIMITED">LEASEWEB UK LIMITED</option><option value="Leaseweb USA, Inc.">Leaseweb USA, Inc.</option><option value="LeaseWeb USA, Inc. New York">LeaseWeb USA, Inc. New York</option><option value="LetsHost">LetsHost</option><option value="Level 3 Parent, LLC">Level 3 Parent, LLC</option><option value="LGNET SERVICOS DE TELECOMUNICACOES LTDA">LGNET SERVICOS DE TELECOMUNICACOES LTDA</option><option value="Limestone Networks, Inc.">Limestone Networks, Inc.</option><option value="Linha Livre Internet Ltda">Linha Livre Internet Ltda</option><option value="Linode, LLC">Linode, LLC</option><option value="Lintas Data Prima, PT">Lintas Data Prima, PT</option><option value="Liquid Web B.V.">Liquid Web B.V.</option><option value="Liquid Web, L.L.C">Liquid Web, L.L.C</option><option value="LiquidNet Ltd">LiquidNet Ltd</option><option value="LiquidNet US LLC">LiquidNet US LLC</option><option value="Lir.bg EOOD">Lir.bg EOOD</option><option value="Lite Speed Technologies Inc.">Lite Speed Technologies Inc.</option><option value="Locaweb Serviï¿½os de Internet S/A">Locaweb Serviï¿½os de Internet S/A</option><option value="LogicWeb Inc.">LogicWeb Inc.</option><option value="Long Van Soft Solution JSC">Long Van Soft Solution JSC</option><option value="Long Van System Solution JSC">Long Van System Solution JSC</option><option value="LoopHOST Datacenter">LoopHOST Datacenter</option><option value="Lopiconcepto SA de CV">Lopiconcepto SA de CV</option><option value="Ltd GoCheapWeb.Com">Ltd GoCheapWeb.Com</option><option value="M-net Telekommunikations GmbH">M-net Telekommunikations GmbH</option><option value="M/S HARVIL MEDIA">M/S HARVIL MEDIA</option><option value="madRooster.com">madRooster.com</option><option value="Magticom Ltd.">Magticom Ltd.</option><option value="Mahdiar Rafiee">Mahdiar Rafiee</option><option value="Mainstream Consulting Group, Inc">Mainstream Consulting Group, Inc</option><option value="Majestic Hosting Solutions, LLC">Majestic Hosting Solutions, LLC</option><option value="Mammoth Media Pty Ltd">Mammoth Media Pty Ltd</option><option value="Mantra Tech Ventures Pvt Ltd">Mantra Tech Ventures Pvt Ltd</option><option value="MARKAHOST TELEKOMUNIKASYON VE TICARET LIMITED SIRKETI">MARKAHOST TELEKOMUNIKASYON VE TICARET LIMITED SIRKETI</option><option value="MARKAS BESAR KEPOLISIAN REPUBLIK INDONESIA">MARKAS BESAR KEPOLISIAN REPUBLIK INDONESIA</option><option value="MAV DESIGN DES. PROJ. INFO LTDA">MAV DESIGN DES. PROJ. INFO LTDA</option><option value="MBA DATACENTERS S.L.">MBA DATACENTERS S.L.</option><option value="mCloud doo">mCloud doo</option><option value="MDDHosting LLC">MDDHosting LLC</option><option value="MEDIAWEB SPA">MEDIAWEB SPA</option><option value="Mega Cable, S.A. de C.V.">Mega Cable, S.A. de C.V.</option><option value="MEGA PROVEDOR - SERVICOS DE INTERNET LTDA - ME">MEGA PROVEDOR - SERVICOS DE INTERNET LTDA - ME</option><option value="MegaVelocity Inc.">MegaVelocity Inc.</option><option value="Mellowhost">Mellowhost</option><option value="Melsa-i-net AS">Melsa-i-net AS</option><option value="MEO - SERVICOS DE COMUNICACOES E MULTIMEDIA S.A.">MEO - SERVICOS DE COMUNICACOES E MULTIMEDIA S.A.</option><option value="Mercantile Communications Pvt Ltd">Mercantile Communications Pvt Ltd</option><option value="MeriT Technology Partners">MeriT Technology Partners</option><option value="Michael Sebastian Schinzel trading as IP-Projects GmbH & Co. KG">Michael Sebastian Schinzel trading as IP-Projects GmbH & Co. KG</option><option value="Micro Hosting Private Limited">Micro Hosting Private Limited</option><option value="Micron21 Datacentre Pty Ltd">Micron21 Datacentre Pty Ltd</option><option value="MICROSOFT-CORP-MSN-AS-BLOCK">MICROSOFT-CORP-MSN-AS-BLOCK</option><option value="Microtronix ESolutions, LLC">Microtronix ESolutions, LLC</option><option value="MilesWeb Internet Services Pvt Ltd">MilesWeb Internet Services Pvt Ltd</option><option value="MKTWEB Servicios InformÃ¡ticos SPA">MKTWEB Servicios InformÃ¡ticos SPA</option><option value="MLAN Consulting">MLAN Consulting</option><option value="MOBCOM SOLUï¿½ï¿½ES EM TECNOLOGIA LTDA - ME">MOBCOM SOLUï¿½ï¿½ES EM TECNOLOGIA LTDA - ME</option><option value="Mobin Net Communication Company (Private Joint Stock)">Mobin Net Communication Company (Private Joint Stock)</option><option value="Mochanin Corp.">Mochanin Corp.</option><option value="Moura, Andre">Moura, Andre</option><option value="MTDS">MTDS</option><option value="MULTACOM CORPORATION">MULTACOM CORPORATION</option><option value="multinetwork.co.id">multinetwork.co.id</option><option value="mvnet.co.id">mvnet.co.id</option><option value="myLoc managed IT AG">myLoc managed IT AG</option><option value="Mymanga Networks">Mymanga Networks</option><option value="Name Hero, LLC">Name Hero, LLC</option><option value="Namecheap, Inc.">Namecheap, Inc.</option><option value="Nao Servers">Nao Servers</option><option value="Naser Shaiste par">Naser Shaiste par</option><option value="National Information Technology Authority Uganda">National Information Technology Authority Uganda</option><option value="National Information Technology Center">National Information Technology Center</option><option value="National Telecommunication Corporation">National Telecommunication Corporation</option><option value="Neerja Softwares Pvt Ltd">Neerja Softwares Pvt Ltd</option><option value="NET DESIGN SRL">NET DESIGN SRL</option><option value="NetActuate, Inc">NetActuate, Inc</option><option value="NETBUDUR TELEKOMUNIKASYON LIMITED SIRKETI">NETBUDUR TELEKOMUNIKASYON LIMITED SIRKETI</option><option value="netcup GmbH">netcup GmbH</option><option value="Netinternet Bilisim Teknolojileri AS">Netinternet Bilisim Teknolojileri AS</option><option value="NetMagic Solutions Pvt Ltd">NetMagic Solutions Pvt Ltd</option><option value="Netsons s.r.l.">Netsons s.r.l.</option><option value="NetSource Communications, Inc.">NetSource Communications, Inc.</option><option value="NetStream Technology Joint-Stock Private Ltd.">NetStream Technology Joint-Stock Private Ltd.</option><option value="Netway Communication Co., Ltd">Netway Communication Co., Ltd</option><option value="Network Data Center Host, Inc.">Network Data Center Host, Inc.</option><option value="Network Redux, LLC">Network Redux, LLC</option><option value="NETWORK TRANSIT HOLDINGS LLC">NETWORK TRANSIT HOLDINGS LLC</option><option value="Neubox">Neubox</option><option value="New Century InfoComm Tech Co., Ltd.">New Century InfoComm Tech Co., Ltd.</option><option value="New Sprout Pty Ltd">New Sprout Pty Ltd</option><option value="Newfold Digital, Inc.">Newfold Digital, Inc.</option><option value="NewMedia Express Pte Ltd">NewMedia Express Pte Ltd</option><option value="NextArray LLC.">NextArray LLC.</option><option value="NEXTRA TELESERVICES PVT. LTD.">NEXTRA TELESERVICES PVT. LTD.</option><option value="Nexus Technologies Private Limited">Nexus Technologies Private Limited</option><option value="nFrame">nFrame</option><option value="NhanHoa Software company">NhanHoa Software company</option><option value="Nicalia Internet, S.L.U">Nicalia Internet, S.L.U</option><option value="Nindo">Nindo</option><option value="NINET Company Nis d.o.o.">NINET Company Nis d.o.o.</option><option value="Nitro Cloud">Nitro Cloud</option><option value="NIXI">NIXI</option><option value="NOAVARAN SHABAKEH SABZ MEHREGAN (Ltd.)">NOAVARAN SHABAKEH SABZ MEHREGAN (Ltd.)</option><option value="Nocser Technology">Nocser Technology</option><option value="Node4 Limited">Node4 Limited</option><option value="Nodestop L.L.C.">Nodestop L.L.C.</option><option value="Noor Data Networks ASN">Noor Data Networks ASN</option><option value="NOS COMUNICACOES, S.A.">NOS COMUNICACOES, S.A.</option><option value="NovaTrend Services GmbH">NovaTrend Services GmbH</option><option value="NovoServe B.V.">NovoServe B.V.</option><option value="NS1">NS1</option><option value="nschoster.com">nschoster.com</option><option value="NSHOST-SRL">NSHOST-SRL</option><option value="NSS S.A.">NSS S.A.</option><option value="NTT Global Data Centers EMEA UK Ltd.">NTT Global Data Centers EMEA UK Ltd.</option><option value="NUT HOST SRL">NUT HOST SRL</option><option value="Nuvem Hospedagem Soluï¿½ï¿½es Web">Nuvem Hospedagem Soluï¿½ï¿½es Web</option><option value="O.M.C. COMPUTERS & COMMUNICATIONS LTD">O.M.C. COMPUTERS & COMMUNICATIONS LTD</option><option value="O2SWITCH SARL">O2SWITCH SARL</option><option value="OC1-Mochahost, LLC">OC1-Mochahost, LLC</option><option value="OC1-WebHostingBuzz LLC">OC1-WebHostingBuzz LLC</option><option value="ODEAWEB Bilisim Teknolojileri Sanayi ve Ticaret Limited Sirketi">ODEAWEB Bilisim Teknolojileri Sanayi ve Ticaret Limited Sirketi</option><option value="ODS Joint Stock Company">ODS Joint Stock Company</option><option value="Om Sai Technnologies">Om Sai Technnologies</option><option value="Omega Sistemas">Omega Sistemas</option><option value="Onetra Bilisim Teknolojileri San. Tic. LTD. STI.">Onetra Bilisim Teknolojileri San. Tic. LTD. STI.</option><option value="Onlinehorizons Inc">Onlinehorizons Inc</option><option value="Onur Ekren">Onur Ekren</option><option value="Ooredoo Q.S.C.">Ooredoo Q.S.C.</option><option value="OPQ Net">OPQ Net</option><option value="Optify Systems (Pty) Ltd">Optify Systems (Pty) Ltd</option><option value="Optimus IT d.o.o.">Optimus IT d.o.o.</option><option value="Optimus Technologies">Optimus Technologies</option><option value="Oracle Corporation">Oracle Corporation</option><option value="Orange Espagne SA">Orange Espagne SA</option><option value="Orbis Internet Services">Orbis Internet Services</option><option value="Orion Telekom Tim d.o.o.Beograd">Orion Telekom Tim d.o.o.Beograd</option><option value="Oso Grande IP Services, LLC">Oso Grande IP Services, LLC</option><option value="OVH (NWK)">OVH (NWK)</option><option value="OVH BV">OVH BV</option><option value="OVH GmbH">OVH GmbH</option><option value="OVH Hispano">OVH Hispano</option><option value="OVH Hosting, Inc.">OVH Hosting, Inc.</option><option value="OVH Ltd">OVH Ltd</option><option value="OVH SAS">OVH SAS</option><option value="OVH Singapore PTE. LTD">OVH Singapore PTE. LTD</option><option value="OVH Sp. z o. o.">OVH Sp. z o. o.</option><option value="OVH Srl">OVH Srl</option><option value="OVH US LLC">OVH US LLC</option><option value="OVH.CZ s.r.o.">OVH.CZ s.r.o.</option><option value="OVHTECH R&D (INDIA) PRIVATE LIMITED">OVHTECH R&D (INDIA) PRIVATE LIMITED</option><option value="Ovi Hosting Pvt Ltd">Ovi Hosting Pvt Ltd</option><option value="P.D.R Solutions FZC">P.D.R Solutions FZC</option><option value="Panelbox">Panelbox</option><option value="Parallel Web Cloud Services">Parallel Web Cloud Services</option><option value="Pars Online PJS">Pars Online PJS</option><option value="Pars Parva System LLC">Pars Parva System LLC</option><option value="Pars Shabakeh Azarakhsh LLC">Pars Shabakeh Azarakhsh LLC</option><option value="Parsian High Tech Company PJSC">Parsian High Tech Company PJSC</option><option value="Pars_Shabakeh_Azarakhsh">Pars_Shabakeh_Azarakhsh</option><option value="PDR">PDR</option><option value="PDR Ltd.">PDR Ltd.</option><option value="Pedro Barbosa de Mendonca neto">Pedro Barbosa de Mendonca neto</option><option value="Penki Kontinentai, Ltd.">Penki Kontinentai, Ltd.</option><option value="PENTECH BILISIM TEKNOLOJILERI SANAYI VE TICARET LIMITED SIRKETi">PENTECH BILISIM TEKNOLOJILERI SANAYI VE TICARET LIMITED SIRKETi</option><option value="Performive LLC">Performive LLC</option><option value="Persian Gulf Network, LLC">Persian Gulf Network, LLC</option><option value="PHOENIX NAP, LLC.">PHOENIX NAP, LLC.</option><option value="PhoenixNAP LLC">PhoenixNAP LLC</option><option value="PLANET SATELLITE ISP Internet">PLANET SATELLITE ISP Internet</option><option value="PlanetHoster">PlanetHoster</option><option value="PlanetHoster Cloud">PlanetHoster Cloud</option><option value="PLANHOST Servicios Informaticos S.L.">PLANHOST Servicios Informaticos S.L.</option><option value="Plus Hosting Grupa d.o.o.">Plus Hosting Grupa d.o.o.</option><option value="Plus Shared Hosting Servers">Plus Shared Hosting Servers</option><option value="POSLuH d.o.o, za informaticke usluge i trgovinu">POSLuH d.o.o, za informaticke usluge i trgovinu</option><option value="PowerHost Telecom SPA">PowerHost Telecom SPA</option><option value="Premis ehf">Premis ehf</option><option value="PRETECS NETWORKS INC.">PRETECS NETWORKS INC.</option><option value="Private Customer">Private Customer</option><option value="PrivateSystems Networks EU Ltd">PrivateSystems Networks EU Ltd</option><option value="PrivateSystems Networks GA">PrivateSystems Networks GA</option><option value="PrivateSystems Networks WA">PrivateSystems Networks WA</option><option value="PromoHost Web Solutions Lanka">PromoHost Web Solutions Lanka</option><option value="Protocol Internet Technology Limited">Protocol Internet Technology Limited</option><option value="PSINet, Inc.">PSINet, Inc.</option><option value="Psychz Networks">Psychz Networks</option><option value="PT Apik Media Inovasi">PT Apik Media Inovasi</option><option value="PT ARDETAMEDIA GLOBAL KOMPUTINDO">PT ARDETAMEDIA GLOBAL KOMPUTINDO</option><option value="PT Awan Media Semesta">PT Awan Media Semesta</option><option value="PT Berkah Solusi Teknologi Informasi">PT Berkah Solusi Teknologi Informasi</option><option value="PT Biznet Gio Nusantara">PT Biznet Gio Nusantara</option><option value="PT CITRAWEB DIGITAL MULTISOLUSI">PT CITRAWEB DIGITAL MULTISOLUSI</option><option value="PT Cloud Hosting Indonesia">PT Cloud Hosting Indonesia</option><option value="PT Cloud Teknologi Nusantara">PT Cloud Teknologi Nusantara</option><option value="PT Deneva">PT Deneva</option><option value="PT DES Teknologi Informasi">PT DES Teknologi Informasi</option><option value="PT Dewa Bisnis Digital">PT Dewa Bisnis Digital</option><option value="PT DEWAWEB">PT DEWAWEB</option><option value="PT Dian Nuswantoro Teknologi">PT Dian Nuswantoro Teknologi</option><option value="PT Ikubaru Indonesia">PT Ikubaru Indonesia</option><option value="PT Industri Kreatif Digital">PT Industri Kreatif Digital</option><option value="PT Jala Lintas Media">PT Jala Lintas Media</option><option value="PT JC Indonesia">PT JC Indonesia</option><option value="PT Master Web Network">PT Master Web Network</option><option value="PT MITRA VISIONER PRATAMA">PT MITRA VISIONER PRATAMA</option><option value="PT NettoCyber Indonesia">PT NettoCyber Indonesia</option><option value="PT Poros Network Nusantara">PT Poros Network Nusantara</option><option value="PT Pusat Media Indonesia">PT Pusat Media Indonesia</option><option value="PT Quantum Tera Network">PT Quantum Tera Network</option><option value="PT Qwords Company International">PT Qwords Company International</option><option value="PT Semut Data Indonesia">PT Semut Data Indonesia</option><option value="PT Shangkuriang Telekomunikasi Indonesia">PT Shangkuriang Telekomunikasi Indonesia</option><option value="PT Suraloka Digital Kreatif">PT Suraloka Digital Kreatif</option><option value="PT Warna Data Multimedia">PT Warna Data Multimedia</option><option value="PT. Arjuna Global Teknologi Indonesia">PT. Arjuna Global Teknologi Indonesia</option><option value="PT. Awan Kilat Semesta">PT. Awan Kilat Semesta</option><option value="PT. Beon Intermedia">PT. Beon Intermedia</option><option value="PT. Berdikari Prima Mandiri">PT. Berdikari Prima Mandiri</option><option value="PT. Cyberindo Mega Persada">PT. Cyberindo Mega Persada</option><option value="PT. Cybertechtonic Pratama">PT. Cybertechtonic Pratama</option><option value="PT. DATA Utama Dinamika">PT. DATA Utama Dinamika</option><option value="PT. EXABYTES NETWORK INDONESIA">PT. EXABYTES NETWORK INDONESIA</option><option value="PT. Jupiter Jala Arta">PT. Jupiter Jala Arta</option><option value="PT. Maxindo Content Solution">PT. Maxindo Content Solution</option><option value="PT. Mediatama Telematika Nusantara">PT. Mediatama Telematika Nusantara</option><option value="PT. MEGA ARTHA LINTAS DATA">PT. MEGA ARTHA LINTAS DATA</option><option value="PT. Raja Sepadan Abadi">PT. Raja Sepadan Abadi</option><option value="PT. SUITEN INOVASI SUKSES">PT. SUITEN INOVASI SUKSES</option><option value="PT. Tujuh Ion Indonesia">PT. Tujuh Ion Indonesia</option><option value="PT. Uninet Media Sakti (ISP)">PT. Uninet Media Sakti (ISP)</option><option value="PT. Usaha Adisanggoro">PT. Usaha Adisanggoro</option><option value="PTISP IP SPACE">PTISP IP SPACE</option><option value="Public domain registry Operations">Public domain registry Operations</option><option value="Pulsant (Scotland) Ltd">Pulsant (Scotland) Ltd</option><option value="Purple IT Ltd">Purple IT Ltd</option><option value="Q Technologies Limited">Q Technologies Limited</option><option value="qiu, huang">qiu, huang</option><option value="QServers Network Limited">QServers Network Limited</option><option value="QuadraNet Enterprises LLC">QuadraNet Enterprises LLC</option><option value="QuadraNet, Inc">QuadraNet, Inc</option><option value="QuickPacket, LLC">QuickPacket, LLC</option><option value="R1 Host">R1 Host</option><option value="R4 Informï¿½tica Ltda">R4 Informï¿½tica Ltda</option><option value="Raafat Remon">Raafat Remon</option><option value="Rabisu Game Server Hosting Providers">Rabisu Game Server Hosting Providers</option><option value="Rackforest Zrt.">Rackforest Zrt.</option><option value="Rackh Lintas Asia, pt">Rackh Lintas Asia, pt</option><option value="Radore Veri Merkezi Hizmetleri A.S.">Radore Veri Merkezi Hizmetleri A.S.</option><option value="Raiola Networks S.L.">Raiola Networks S.L.</option><option value="RAMNODE">RAMNODE</option><option value="Raya Negar Radin Namdar Information and Technology Company (LTD)">Raya Negar Radin Namdar Information and Technology Company (LTD)</option><option value="RCS & RDS SA">RCS & RDS SA</option><option value="Readyspace Network Pte Ltd">Readyspace Network Pte Ltd</option><option value="Rebel Networks">Rebel Networks</option><option value="Red Cientifica Peruana">Red Cientifica Peruana</option><option value="REGISTER S.P.A.">REGISTER S.P.A.</option><option value="ReliableSite.Net LLC">ReliableSite.Net LLC</option><option value="Remzi Ozkarabulut">Remzi Ozkarabulut</option><option value="RENTVPS UK A">RENTVPS UK A</option><option value="Respina Networks & Beyond PJSC">Respina Networks & Beyond PJSC</option><option value="revision alpha">revision alpha</option><option value="Ribosoft Tech">Ribosoft Tech</option><option value="RIPE Network Coordination Centre">RIPE Network Coordination Centre</option><option value="roberto, sotelo">roberto, sotelo</option><option value="ROMARG SRL">ROMARG SRL</option><option value="Roshangar Rayaneh Tehran Co. Ltd.">Roshangar Rayaneh Tehran Co. Ltd.</option><option value="ROTA LESTE INFORMï¿½TICA LTDA">ROTA LESTE INFORMï¿½TICA LTDA</option><option value="Royal Clouds">Royal Clouds</option><option value="RoyaleHosting BV">RoyaleHosting BV</option><option value="Rumahweb">Rumahweb</option><option value="rumahweb.com">rumahweb.com</option><option value="Saba Hour Yeganeh Co. ( Private Joint Stock)">Saba Hour Yeganeh Co. ( Private Joint Stock)</option><option value="Safaricom Limited">Safaricom Limited</option><option value="Safenames Ltd.">Safenames Ltd.</option><option value="Sahara Network">Sahara Network</option><option value="SALIH-KARA-NET">SALIH-KARA-NET</option><option value="Saltsync">Saltsync</option><option value="SAMPLING LINE-SERVICOS E INTERNET, LDA">SAMPLING LINE-SERVICOS E INTERNET, LDA</option><option value="SAN MARTIN Y COMPAÃÃA LIMITADA (FRONTEC)">SAN MARTIN Y COMPAÃÃA LIMITADA (FRONTEC)</option><option value="Sarps Technologies Pvt. Ltd.">Sarps Technologies Pvt. Ltd.</option><option value="Sasahost Limited">Sasahost Limited</option><option value="Sat-Trakt D.O.O.">Sat-Trakt D.O.O.</option><option value="Saveincloud Hospedagem na Internet Ltda">Saveincloud Hospedagem na Internet Ltda</option><option value="SC-ROSPOT-SRL">SC-ROSPOT-SRL</option><option value="SC.M.G.A. CONSTRUCT SRL">SC.M.G.A. CONSTRUCT SRL</option><option value="Scala Hosting LLC">Scala Hosting LLC</option><option value="Scaleway">Scaleway</option><option value="SECRELNET INFORMATICA LTDA">SECRELNET INFORMATICA LTDA</option><option value="SECURED SERVERS LLC">SECURED SERVERS LLC</option><option value="SEDO GmbH">SEDO GmbH</option><option value="Sefroyek Pardaz Engineering Co. LTD">Sefroyek Pardaz Engineering Co. LTD</option><option value="Serbia BroadBand-Srpske Kablovske mreze d.o.o.">Serbia BroadBand-Srpske Kablovske mreze d.o.o.</option><option value="sered hosting sl">sered hosting sl</option><option value="Serv.Ge Ltd">Serv.Ge Ltd</option><option value="Server Central Network">Server Central Network</option><option value="Server D">Server D</option><option value="Server Lodge S.A.">Server Lodge S.A.</option><option value="Server Mania Inc.">Server Mania Inc.</option><option value="Server Plan S.r.l.">Server Plan S.r.l.</option><option value="ServerDo Serviços de Informática Ltda">ServerDo Serviços de Informática Ltda</option><option value="Serverius Holding B.V.">Serverius Holding B.V.</option><option value="ServerPlus Internet Sunucu Hizmetleri">ServerPlus Internet Sunucu Hizmetleri</option><option value="Serverprofis GmbH">Serverprofis GmbH</option><option value="Serverpronto">Serverpronto</option><option value="Serverpronto - Dedicated Servers">Serverpronto - Dedicated Servers</option><option value="Servers Australia Pty. Ltd">Servers Australia Pty. Ltd</option><option value="Servers Digital Servers">Servers Digital Servers</option><option value="Service Internet  Arboreta">Service Internet Arboreta</option><option value="SERVICIOS DE DATACENTER DATANETWORKS LIMITADA">SERVICIOS DE DATACENTER DATANETWORKS LIMITADA</option><option value="SERVICOS DE COMUNICACAO LTDA">SERVICOS DE COMUNICACAO LTDA</option><option value="Servicos de Infraestrutura e Datacenter">Servicos de Infraestrutura e Datacenter</option><option value="Servikus d.o.o.">Servikus d.o.o.</option><option value="SETCOR d.o.o.">SETCOR d.o.o.</option><option value="SH ONLINE ILETISIM ANONIM SIRKETI">SH ONLINE ILETISIM ANONIM SIRKETI</option><option value="Shahadat Hossain">Shahadat Hossain</option><option value="Shinjiru Technology Sdn Bhd">Shinjiru Technology Sdn Bhd</option><option value="Shock Hosting LLC">Shock Hosting LLC</option><option value="SIA Digitalas Ekonomikas Attistibas Centrs">SIA Digitalas Ekonomikas Attistibas Centrs</option><option value="Simbanet (T) Limited">Simbanet (T) Limited</option><option value="SimpliQ Tech SRL">SimpliQ Tech SRL</option><option value="Simply Transit Ltd">Simply Transit Ltd</option><option value="SingleHop BV">SingleHop BV</option><option value="SingleHop LLC">SingleHop LLC</option><option value="Sitios Hispanos S.R.L">Sitios Hispanos S.R.L</option><option value="SKB Enterprise B.V.">SKB Enterprise B.V.</option><option value="SKSA Technology Sdn Bhd">SKSA Technology Sdn Bhd</option><option value="Smartweb Limited">Smartweb Limited</option><option value="SnTHostings">SnTHostings</option><option value="SOC. COMERCIAL WIRENET CHILE LTDA.">SOC. COMERCIAL WIRENET CHILE LTDA.</option><option value="Sociedade Mutuï¿½ria Rio Preto S/C Ltda">Sociedade Mutuï¿½ria Rio Preto S/C Ltda</option><option value="SoftLayer Dutch Holdings B.V.">SoftLayer Dutch Holdings B.V.</option><option value="SoftLayer Technologies Inc.">SoftLayer Technologies Inc.</option><option value="SoftLayer Technologies, Inc.">SoftLayer Technologies, Inc.</option><option value="Soluciones web on line s.l.">Soluciones web on line s.l.</option><option value="SolusData - Cloud Solutions">SolusData - Cloud Solutions</option><option value="SoundStack Technologies, LLC">SoundStack Technologies, LLC</option><option value="SourceDNS">SourceDNS</option><option value="Sparkstation Pte Ltd">Sparkstation Pte Ltd</option><option value="Spartan Host LLC">Spartan Host LLC</option><option value="Spatros, Aps">Spatros, Aps</option><option value="SpectraIP B.V.">SpectraIP B.V.</option><option value="Speedy Group Corporation Limited">Speedy Group Corporation Limited</option><option value="Sri Lanka Telecom Ltd">Sri Lanka Telecom Ltd</option><option value="Strasmore, Inc.">Strasmore, Inc.</option><option value="Sucuri">Sucuri</option><option value="Sun Network (Hong Kong) Limited">Sun Network (Hong Kong) Limited</option><option value="Superhosting doo">Superhosting doo</option><option value="SuperHosting.BG Ltd.">SuperHosting.BG Ltd.</option><option value="Superonline Iletisim Hizmetleri A.S.">Superonline Iletisim Hizmetleri A.S.</option><option value="suraloka.com">suraloka.com</option><option value="Surid, Shayan">Surid, Shayan</option><option value="Sybell Informatika Kft">Sybell Informatika Kft</option><option value="SYNERGY WHOLESALE PTY LTD">SYNERGY WHOLESALE PTY LTD</option><option value="Tactica ehf">Tactica ehf</option><option value="TalkTalk Communications Limited">TalkTalk Communications Limited</option><option value="TARHELY-NET">TARHELY-NET</option><option value="Tarhely.Eu Szolgaltato Kft.">Tarhely.Eu Szolgaltato Kft.</option><option value="TechAvenue Sdn Bhd">TechAvenue Sdn Bhd</option><option value="TECNOERA-CORE">TECNOERA-CORE</option><option value="TECNOERA-WEBHOSTING">TECNOERA-WEBHOSTING</option><option value="TECNOWEB PERU SAC">TECNOWEB PERU SAC</option><option value="TEKNOTEL TELEKOMUNIKASYON SANAYI VE TICARET A.S.">TEKNOTEL TELEKOMUNIKASYON SANAYI VE TICARET A.S.</option><option value="TekTonic">TekTonic</option><option value="TELECOMUNICACIONES HOSTINGNET SpA">TELECOMUNICACIONES HOSTINGNET SpA</option><option value="TELEFï¿½NICA BRASIL S.A">TELEFï¿½NICA BRASIL S.A</option><option value="Telefonica del Sur S.A.">Telefonica del Sur S.A.</option><option value="TELEKOM SRBIJA a.d.">TELEKOM SRBIJA a.d.</option><option value="Telekomunikasi Indonesia (PT)">Telekomunikasi Indonesia (PT)</option><option value="Telemach d.o.o.">Telemach d.o.o.</option><option value="Telepoint Ltd">Telepoint Ltd</option><option value="TELESYSTEM-SRL">TELESYSTEM-SRL</option><option value="Terrakom d.o.o.">Terrakom d.o.o.</option><option value="TH.PAPAMICHAIL VAINAS - G.PSALTAKIS G.P">TH.PAPAMICHAIL VAINAS - G.PSALTAKIS G.P</option><option value="The Constant Company, LLC">The Constant Company, LLC</option><option value="The Egyptian company for IT Cloud services">The Egyptian company for IT Cloud services</option><option value="The Jnet">The Jnet</option><option value="Tier 4 Cloud Services">Tier 4 Cloud Services</option><option value="Tier.Net Technologies LLC">Tier.Net Technologies LLC</option><option value="TierPoint, LLC">TierPoint, LLC</option><option value="TM Net Sdn Bhd">TM Net Sdn Bhd</option><option value="tmzVPS">tmzVPS</option><option value="tolga tolga">tolga tolga</option><option value="Tomattos Technologies Ltd.">Tomattos Technologies Ltd.</option><option value="Totaaldomein BV">Totaaldomein BV</option><option value="TotalChoice Hosting, LLC">TotalChoice Hosting, LLC</option><option value="Trunkoz Technologies Pvt. Ltd.">Trunkoz Technologies Pvt. Ltd.</option><option value="TTSL-ISP DIVISION">TTSL-ISP DIVISION</option><option value="Turnkey Internet Inc.">Turnkey Internet Inc.</option><option value="twnic.net.tw">twnic.net.tw</option><option value="Tzulo-TOR">Tzulo-TOR</option><option value="UAB Baltnetos komunikacijos">UAB Baltnetos komunikacijos</option><option value="UAB Interneto vizija">UAB Interneto vizija</option><option value="UAB Rakrejus">UAB Rakrejus</option><option value="UK Dedicated Servers Limited">UK Dedicated Servers Limited</option><option value="UK-2 Limited">UK-2 Limited</option><option value="UK-NC-NET3">UK-NC-NET3</option><option value="UKDedicated LTD">UKDedicated LTD</option><option value="Ukrainian Internet Names Center LTD">Ukrainian Internet Names Center LTD</option><option value="Under Servicos de Internet Ltda">Under Servicos de Internet Ltda</option><option value="Unified Layer">Unified Layer</option><option value="UNIFIEDWEB, INC.">UNIFIEDWEB, INC.</option><option value="Unitas Global">Unitas Global</option><option value="United Internet Ltd.">United Internet Ltd.</option><option value="UNITEL SA">UNITEL SA</option><option value="Universo Online S.A.">Universo Online S.A.</option><option value="Unlimited Web Hosting UK LTD">Unlimited Web Hosting UK LTD</option><option value="UpCloud Ltd">UpCloud Ltd</option><option value="UpCloud USA San Jose">UpCloud USA San Jose</option><option value="US Website Design and Hosting, LLC">US Website Design and Hosting, LLC</option><option value="Utande Internet Services (Pvt) Ltd">Utande Internet Services (Pvt) Ltd</option><option value="V-Connect Systems And Services Pvt. Ltd.">V-Connect Systems And Services Pvt. Ltd.</option><option value="Vargonen Teknoloji ve Bilisim Sanayi Ticaret Anonim Sirketi">Vargonen Teknoloji ve Bilisim Sanayi Ticaret Anonim Sirketi</option><option value="Various Registries (Maintained by ARIN)">Various Registries (Maintained by ARIN)</option><option value="VeeroTech Systems LLC">VeeroTech Systems LLC</option><option value="Veganet Teknolojileri ve Hizmetleri LTD STI">Veganet Teknolojileri ve Hizmetleri LTD STI</option><option value="VegasNAP, LLC">VegasNAP, LLC</option><option value="velia.net (HK) Ltd">velia.net (HK) Ltd</option><option value="VeloxServ Communications Ltd">VeloxServ Communications Ltd</option><option value="Vera Le">Vera Le</option><option value="Veridyen Bilisim Teknolojileri Sanayi ve Ticaret Limited Sirketi">Veridyen Bilisim Teknolojileri Sanayi ve Ticaret Limited Sirketi</option><option value="Verigom Datacenter Services">Verigom Datacenter Services</option><option value="Verizon Business">Verizon Business</option><option value="VHosting Solution srl">VHosting Solution srl</option><option value="VIDOLU Group Pty Ltd-Web4Africa">VIDOLU Group Pty Ltd-Web4Africa</option><option value="Vietel - CHT Compamy Ltd">Vietel - CHT Compamy Ltd</option><option value="Vietnam Online Network Solution Joint Stock Compnay">Vietnam Online Network Solution Joint Stock Compnay</option><option value="Vietnam Posts and Telecommunications (VNPT)">Vietnam Posts and Telecommunications (VNPT)</option><option value="VIETNAM POSTS AND TELECOMMUNICATIONS GROUP">VIETNAM POSTS AND TELECOMMUNICATIONS GROUP</option><option value="Viettel Group">Viettel Group</option><option value="Virtual Hosting Department - Fast Serv Networks, LLC">Virtual Hosting Department - Fast Serv Networks, LLC</option><option value="virtual solution srl">virtual solution srl</option><option value="Virtual Systems LLC">Virtual Systems LLC</option><option value="VirtuaServer Informatica Ltda">VirtuaServer Informatica Ltda</option><option value="Virtucom Networks S.A">Virtucom Networks S.A</option><option value="VIVID-HOSTING LLC">VIVID-HOSTING LLC</option><option value="VNPT Corp">VNPT Corp</option><option value="Vodien Internet Solutions Pte Ltd">Vodien Internet Solutions Pte Ltd</option><option value="VOICEetc">VOICEetc</option><option value="Voxility LLP">Voxility LLP</option><option value="VPLS, Inc.">VPLS, Inc.</option><option value="vpls.com">vpls.com</option><option value="Wananchi Group (K) LTD">Wananchi Group (K) LTD</option><option value="Wave Broadband">Wave Broadband</option><option value="We Provide Lda">We Provide Lda</option><option value="Web Host Nepal Pvt. Ltd.">Web Host Nepal Pvt. Ltd.</option><option value="WEB HOST RAJ">WEB HOST RAJ</option><option value="Web Hosting Canada">Web Hosting Canada</option><option value="Web Server Live (Pvt) Ltd">Web Server Live (Pvt) Ltd</option><option value="Web Werks India Pvt. Ltd.">Web Werks India Pvt. Ltd.</option><option value="Web-hosting.com">Web-hosting.com</option><option value="Webair">Webair</option><option value="Webglobe, s.r.o.">Webglobe, s.r.o.</option><option value="Webhosting Bilisim Teknolojileri A.S">Webhosting Bilisim Teknolojileri A.S</option><option value="Webhosting.Net, Inc.">Webhosting.Net, Inc.</option><option value="Webhostpython LLC">Webhostpython LLC</option><option value="Webico Company Limited">Webico Company Limited</option><option value="Webin Brasil">Webin Brasil</option><option value="Webline Services Inc">Webline Services Inc</option><option value="WebNX, Inc.">WebNX, Inc.</option><option value="webside.pt">webside.pt</option><option value="Website Buddy Corp">Website Buddy Corp</option><option value="Website Hosting">Website Hosting</option><option value="WEBSITEWELCOME.COM">WEBSITEWELCOME.COM</option><option value="WebSP - Comercio e Prestacao de Servicos Informaticos, Lda">WebSP - Comercio e Prestacao de Servicos Informaticos, Lda</option><option value="Websupport Magyarorszag Kft.">Websupport Magyarorszag Kft.</option><option value="WebSupport s.r.o.">WebSupport s.r.o.</option><option value="websupport.sk">websupport.sk</option><option value="Webtasy, d.o.o.">Webtasy, d.o.o.</option><option value="webtropia vServers by http://www.webtropia.com">webtropia vServers by http://www.webtropia.com</option><option value="Webx Networks">Webx Networks</option><option value="WestHost, Inc.">WestHost, Inc.</option><option value="WHG Hosting Services Ltd">WHG Hosting Services Ltd</option><option value="White Label">White Label</option><option value="WhiteLabel IT Solutions Corp">WhiteLabel IT Solutions Corp</option><option value="Whittaker Broadcasting Corporation">Whittaker Broadcasting Corporation</option><option value="WholeSale Internet, Inc.">WholeSale Internet, Inc.</option><option value="Wolast Technologies">Wolast Technologies</option><option value="WorldStream B.V.">WorldStream B.V.</option><option value="Wow Internet Indonesia">Wow Internet Indonesia</option><option value="Wowrack.com">Wowrack.com</option><option value="WZ Communications Inc.">WZ Communications Inc.</option><option value="X4B">X4B</option><option value="XeonBD">XeonBD</option><option value="Xneelo (Pty) Ltd">Xneelo (Pty) Ltd</option><option value="xneelo-tscolo">xneelo-tscolo</option><option value="XOFTMADE Web Solutions Sarfraz">XOFTMADE Web Solutions Sarfraz</option><option value="Xtudio Networks S.L.U.">Xtudio Networks S.L.U.</option><option value="Yen Anastasia">Yen Anastasia</option><option value="YetFix Limited">YetFix Limited</option><option value="YONCA DURAN">YONCA DURAN</option><option value="YOTTA NETWORK SERVICES PRIVATE LIMITED">YOTTA NETWORK SERVICES PRIVATE LIMITED</option><option value="Yuan-Jhen Info., Co., Ltd">Yuan-Jhen Info., Co., Ltd</option><option value="Yunus Emre Atilgan trading as Poyraz Hosting">Yunus Emre Atilgan trading as Poyraz Hosting</option><option value="Zach Angleton">Zach Angleton</option><option value="ZAM LTDA.">ZAM LTDA.</option><option value="Zanzibar Information Communication Technology Infrastructure Agency (ZICTIA)">Zanzibar Information Communication Technology Infrastructure Agency (ZICTIA)</option><option value="zColo">zColo</option><option value="Zonat Sarl">Zonat Sarl</option><option value="Zybosys Networks India Private Limited">Zybosys Networks India Private Limited</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="hosting_type" style="margin-bottom: 10px ; margin-top: 5px">SSL :</label>
<select name="hosting_type" id="hosting_type" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value="http">http</option><option value="https">https</option> </select>
</div>
<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
<label for="domaine" style="margin-bottom: 10px; margin-top: 5px">TLD :</label>
<input type="search" class="form-control" id="domaine" style="color: var(--font-color); background-color: var(--color-card);">
</div>
<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
<label for="cms" style="margin-bottom: 10px ; margin-top: 5px">CMS :</label>
<select name="cms" id="cms" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
<option value="0">0</option><option value="Adobe Dreamweaver">Adobe Dreamweaver</option><option value="Adobe Experience Manager">Adobe Experience Manager</option><option value="Adobe Muse">Adobe Muse</option><option value="BigCommerce">BigCommerce</option><option value="Blogger">Blogger</option><option value="ClickFunnels">ClickFunnels</option><option value="CodeIgniter">CodeIgniter</option><option value="CS-Cart">CS-Cart</option><option value="DataLife Engine">DataLife Engine</option><option value="Django Framework">Django Framework</option><option value="Drupal">Drupal</option><option value="Duda">Duda</option><option value="EditPlus">EditPlus</option><option value="Everweb">Everweb</option><option value="Flutter">Flutter</option><option value="FrontPage">FrontPage</option><option value="Gatsby">Gatsby</option><option value="GoDaddy Website Builder">GoDaddy Website Builder</option><option value="GoodBarber">GoodBarber</option><option value="Google Sites">Google Sites</option><option value="Hugo">Hugo</option><option value="iWeb">iWeb</option><option value="Joomla">Joomla</option><option value="Kentico">Kentico</option><option value="Koken">Koken</option><option value="Laravel">Laravel</option><option value="Lauyan TOWeb">Lauyan TOWeb</option><option value="LeadPages">LeadPages</option><option value="Magento">Magento</option><option value="Microsoft Word">Microsoft Word</option><option value="Mobirise">Mobirise</option><option value="Modx CMS">Modx CMS</option><option value="Moodle">Moodle</option><option value="N/A">N/A</option><option value="Next.js">Next.js</option><option value="October CMS">October CMS</option><option value="Odoo">Odoo</option><option value="Open Journal Systems">Open Journal Systems</option><option value="OpenCart">OpenCart</option><option value="Osclass">Osclass</option><option value="osTicket">osTicket</option><option value="phpBB">phpBB</option><option value="PrestaShop">PrestaShop</option><option value="RapidWeaver">RapidWeaver</option><option value="Ruby on Rails">Ruby on Rails</option><option value="Sandvox">Sandvox</option><option value="Shopify">Shopify</option><option value="SiteCore">SiteCore</option><option value="SitePad">SitePad</option><option value="Squarespace">Squarespace</option><option value="Tiendanube">Tiendanube</option><option value="Tumblr">Tumblr</option><option value="vBulletin">vBulletin</option><option value="Visualsoft">Visualsoft</option><option value="Web Page Maker">Web Page Maker</option><option value="WebAcappella">WebAcappella</option><option value="Webflow">Webflow</option><option value="Webnode">Webnode</option><option value="Website X5">Website X5</option><option value="WebsiteBuilder">WebsiteBuilder</option><option value="Weebly">Weebly</option><option value="WHMCS">WHMCS</option><option value="Wild Apricot">Wild Apricot</option><option value="Wix">Wix</option><option value="WooCommerce">WooCommerce</option><option value="WordPress">WordPress</option><option value="WYSIWYG Web Builder">WYSIWYG Web Builder</option><option value="Xara">Xara</option><option value="XenForo">XenForo</option><option value="Yola">Yola</option><option value="Zen Cart">Zen Cart</option><option value="Zendesk">Zendesk</option>



 </select>
</div>



<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
    
    
    
    
<label for="type" style="margin-bottom: 10px; margin-top: 5px">Type :</label>
<select name="source" id="source" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
    
    
    
    
<option value="">All</option>
<option value="cracked">cracked</option>
<option value="created">created</option>


 </select>
</div>


<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
    
     
<label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
<select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
    
    
<option value="">All</option>


<option value="Seller369">Seller369</option>

<option value="Seller450">Seller450</option><option value="Seller468">Seller468</option><option value="Seller428">Seller428</option><option value="Seller382">Seller382</option><option value="Seller376">Seller376</option><option value="Seller389">Seller389</option><option value="Seller481">Seller481</option><option value="Seller484">Seller484</option><option value="Seller281">Seller281</option><option value="Seller415">Seller415</option><option value="Seller296">Seller296</option><option value="Seller476">Seller476</option><option value="Seller425">Seller425</option><option value="Seller269">Seller269</option><option value="Seller397">Seller397</option><option value="Seller461">Seller461</option><option value="Seller478">Seller478</option><option value="Seller329">Seller329</option><option value="Seller436">Seller436</option><option value="Seller251">Seller251</option><option value="Seller473">Seller473</option><option value="Seller341">Seller341</option><option value="Seller474">Seller474</option><option value="Seller460">Seller460</option><option value="Seller483">Seller483</option><option value="Seller348">Seller348</option><option value="Seller477">Seller477</option><option value="Seller316">Seller316</option><option value="Seller470">Seller470</option><option value="Seller471">Seller471</option><option value="Seller452">Seller452</option><option value="Seller439">Seller439</option><option value="Seller309">Seller309</option><option value="Seller353">Seller353</option><option value="Seller301">Seller301</option><option value="Seller300">Seller300</option><option value="Seller254">Seller254</option><option value="Seller393">Seller393</option><option value="Seller423">Seller423</option><option value="Seller289">Seller289</option><option value="Seller451">Seller451</option><option value="Seller383">Seller383</option><option value="Seller420">Seller420</option><option value="Seller438">Seller438</option><option value="Seller465">Seller465</option><option value="Seller365">Seller365</option> 



</select>
</div>


<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
    
    
<label for="type" style="margin-bottom: 10px; margin-top: 5px">
    
    
    <abbr title="Domain Authority">DA :</abbr></label>
    
    
<select name="da" id="da" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
    
    
    
    
<option value="">All</option>





<option value=""></option>


<option value="1">1</option>



<option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="2">2</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="3">3</option><option value="30">30</option><option value="33">33</option><option value="36">36</option><option value="37">37</option><option value="4">4</option><option value="43">43</option><option value="5">5</option><option value="54">54</option><option value="55">55</option><option value="57">57</option><option value="58">58</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="81">81</option><option value="82">82</option><option value="9">9</option>




 </select>
</div>



<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
    
    
    
    
<label for="type" style="margin-bottom: 10px; margin-top: 5px">
    
    <abbr title="Page Authority">PA :</abbr></label>





<select name="pa" id="pa" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
    
    
    
<option value="">All</option>



<option value=""></option>

<option value="1">1</option>

<option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="3">3</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="4">4</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="5">5</option><option value="50">50</option><option value="51">51</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option> </select>
</div>
</div>
<div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 table-responsive">
<table id="cpanel_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);" ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Country</th>
            <th>Type</th>
            <th>TLD</th>
            <th>Domain</th>
            <th>Hosting</th>
            <th>CMS</th>
            <th>Ip Blacklist</th>
            <th>Seo Info</th>
            <th>Source</th>
            <th>Technologies</th>
            <th>Seller</th>
            <th>Check</th>
            <th>Price</th>
            <th>Added on </th>
            <th>Send Test</th>
            <th>DA</th>
            <th>PA</th>
            <th>Buy</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>ID</th>
            <td>Country</td>
            <td>Type</td>
            <td>TLD</td>
            <td>Domain</td>
            <td>Hosting</td>
            <td>CMS</td>
            <td>Ip Blacklist</td>
            <td>Source</td>
            <td>Technologies</td>
            <td>Seller</td>
            <td>Check</td>
            <td>Price</td>
            <td>Added on </td>
            <td>Send Test</td>
            <td>PA</td>
            <td>Buy</td>
        </tr>
    </tbody>
<tfoot>
<tr>
<th data-priority="1"></th>
<th class="all">ID</th>
<th data-priority="3">Country</th>
<th data-priority="8">Type</th>
<th data-priority="15">TLD</th>
<th data-priority="14">Domain</th>
<th data-priority="11">Hosting</th>
<th data-priority="12">CMS</th>
<th class="all" style="width:9% !important;">Ip Blacklist</th>
<th class="all">Seo Info</th>
<th data-priority="9">Source</th>
<th class="all">Technologies</th>
<th data-priority="10">Seller</th>
<th class="all">Check</th>
<th class="all">Price</th>
<th data-priority="13">Added on </th>
<th class="all">Send Test</th>
<th data-priority="4">DA</th>
<th data-priority="5">PA</th>
<th class="all">Buy</th>
</tr>
</tfoot>
</table>
</div>
</div>
<div class="modal fade" id="TrafficInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centere modal-notify cascading-modal" role="document">
<div class="modal-content">
<div class="modal-header light-blue darken-3 white-text">
<h4 class="title" id="exampleModalLabel"><i class="fas fa-info"></i> Traffic INFO</h4>
<button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body" id="Trafficinfobody">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary white-text" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="showmagseyesorno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
 
<div class="modal-content text-center">
 
<div class="modal-header d-flex justify-content-center">
<p class="heading">will be deducted 0.10$ from the balance of the service cost?</p>
</div>
 
<div class="modal-body">
<i class='fas fa-search fa-4x animated rotateIn'></i>
</div>
 
<div class="modal-footer flex-center">
</div>
</div>
 
</div>
</div>
<div class="modal fade" id="seoInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centere modal-notify cascading-modal" role="document">
<div class="modal-content">
<div class="modal-header light-blue darken-3 white-text">
<h4 class="title" id="exampleModalLabel"><i class="fas fa-info"></i> SEO INFO</h4>
<button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body" style="height: 650px; overflow: auto;">
<ul class="list-group" id="seoInfoBody"></ul>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary white-text" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="techInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centere modal-notify  cascading-modal" role="document">
<div class="modal-content">
<div class="modal-header light-blue darken-3 white-text">
<h4 class="title" id="exampleModalLabel"><i class="fas fa-info"></i> TECH INFO</h4>
<button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
<ul class="list-group" id="techInfoBody"></ul>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary white-text" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-notify modal-success" role="document">
<div class="modal-content">
<div class="modal-header">
<p class="heading" id="myModalHeader"></p>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true" class="white-text">&times;</span>
</button>
</div>
<div class="modal-body" id="modelbody">
</div>
<div class="modal-footer justify-content-center">
<a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
</div>
</div>
</div>
</div>
 
<div class="modal fade" id="modalConfirmBuy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
 
<div class="modal-content text-center">
 
<div class="modal-header d-flex justify-content-center">
<p class="heading">Are you sure?</p>
</div>
 
<div class="modal-body">
<i class='fas fa-shopping-cart fa-4x animated rotateIn'></i>
</div>
 
<div class="modal-footer flex-center">
<a onClick='confirmbye()' class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
<a type="button" class="btn btn-info" data-dismiss="modal">No</a>
</div>
</div>
 
</div>
</div>
 
 
<div class="modal fade top" id="modalCoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
<div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
<div class="modal-content">
 
<div class="modal-body">
<div class="row d-flex justify-content-center align-items-center">
<img src="layout/images/balance.png">
<span class="pt-3 mx-4" style="font-size: 14 px"><b>No enough balance !</b> Please refill your balance</span>
<a type="button" href="addBalance" onclick="window.open(this.href);return false;" class="btn btn-danger">Add Balance
<i class="fas fa-book ml-1 white-text"></i>
</a>
<a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, thanks</a>
</div>
</div>
</div>
 
</div>
</div>
 
<script type="text/javascript">
 
$(document).ready(function(){
        var shopID;
 
            load_data();
             function load_data(myarray) {
              $('#cpanel_data').DataTable({
                     "processing": true,
                    "serverSide": true,
                    "responsive": true,
 
                    "order": [],
                    "columnDefs": [ {
                             targets: [ 0 ],
                             visible: false }
 
                             ],
                    "lengthMenu": [[10, 25, 50, 100, 500, 1000000], [10, 25, 50, 100, 500, "All"]],
 
 
                    "ajax":{
                        url:"data/objects.txt",
                        type:"POST",
                        data: {data_filter:myarray,
                             draw : 'draw',
                             row : 'start',
                             rowperpage : 'length',
                             columnIndex : 'order',
                             columnName : 'columns',
                             columnSortOrder : 'order',
                             searchValue : 'search'}
                    },
 
                    "columns": [
                                { "data": 0 ,"visible": false},
                                { "data": 1 ,"visible": true },
                                { "data": 2 ,"visible": true},
                                { "data": 3 ,"visible": true},
                                { "data": 4 ,"visible": true},
                                { "data": 5 ,"visible": true},
                                { "data": 6 ,"visible": true},
                                { "data": 7 ,"visible": true},
                                { "data": 8 ,"visible": true},
                                { "data": 9 ,"visible": true},
                                { "data": 10 ,"visible": true},
                                { "data": 11 ,"visible": true},
                                { "data": 12 ,"visible": true},
                                { "data": 13 ,"visible": true},
                                { "data": 14 ,"visible": true},
                                { "data": 15 ,"visible": true},
                                { "data": 16 ,"visible": true},
                                { "data": 17 ,"visible": true},
                                { "data": 18 ,"visible": true},
                                { "data": 19 ,"visible": true}],
 
                    "pageLength": 100
                });
            }
 
 
              $(document).on('change', '.form-control', function(){
                 $('#cpanel_data').DataTable().destroy();
 
                var country = $('#country').val();
                var detectHosting = $('#detect_hosting').val();
                var typehosting = $('#hosting_type').val();
                var source = $('#source').val();
                var domaine = $('#domaine').val();
                 var da= $('#da').val();
                var pa= $('#pa').val();
                 var seller1 = $('#seller').val();
                $idseller = seller1.split("Seller");
                 var seller= $idseller[1];
                 var cms = $('#cms').val();
                 var myarray = {};
                 myarray[0] = country;
                 myarray[1] = detectHosting;
                 myarray[2] = typehosting;
                 myarray[3] = source;
                 myarray[4] = domaine;
                 myarray[5] = seller;
                 myarray[6] = da;
                 myarray[7] = pa;
                  myarray[8] = cms;
 
 
              if(country != '' || detectHosting != '' || typehosting != '' || source != '' || domaine != '' || seller != '' || da != '' || pa != '' || cms != '')
                {
 
                   load_data(myarray);
                }
                else
                {
                    load_data();
                }
 
 
            });
 
 
 
        });
 
        function Trafficinfo(typer,id){
                $("#trafi"+id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();
                $.ajax({
                    type:       'GET',
                    url:        'CheckCpanel'+id,
                    success:    function(data)
                    {
                        if (data.match("Success")) {
                $.ajax({
                    type:       'GET',
                    url:        'gettraffic?typer='+typer+'&id='+id,
                    success:    function(data){
						if(data.match("showmessage")){
$("#showmagseyesorno .modal-footer.flex-center").html('<a onclick="javascript:Trafficinfoyes(\''+typer+'\','+id+')"  class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a><a type="button" class="btn btn-info" data-dismiss="modal">No</a>');
$("#trafi"+id).html('<a onclick="javascript:Trafficinfo(\''+typer+'\','+id+')" class="btn btn-primary text-white btn-sm" style="font-size: 11px; cursor:pointer"><i class="fas fa-info mr-1"></i>Traffic</a>').show();
$("#showmagseyesorno").modal();
						}else{
                                $("#Trafficinfobody").html(data);
                                $("#trafi"+id).html('<a onclick="javascript:Trafficinfo(\''+typer+'\','+id+')" class="btn btn-primary text-white btn-sm" style="font-size: 11px; cursor:pointer"><i class="fas fa-info mr-1"></i>Traffic</a>').show();
                                $("#TrafficInfoModal").modal();
								}
                    }
                });
                          }else{
                            var ide= 'bad-cpanel'+id;
                                $("#trafi"+id).html('<span id=' + ide + ' class="btn btn-danger btn-sm" style="font-size: 12px">Bad!</span>').show();
                            var tr = $("#trafi"+id).parents('tr');
                                 setTimeout(function(){
                                 $('#cpanel_data').DataTable().row(tr).child.hide();
                                 }, 2000);
                            $("#"+ide).parent().parent().parent().delay(3000).hide('slow');
                             }
 
                    }
                });
				}
 
        function Trafficinfoyes(typer,id){
                $.ajax({
                    type:       'GET',
                    url:        'gettraffic?typer='+typer+'&yes&id='+id,
                    success:    function(data)
                    {
                                $("#Trafficinfobody").html(data);
                                $("#TrafficInfoModal").modal();
                    }
                });
				}
 
       function buythistool(id){
         $('#modalConfirmBuy').modal('show');
         webID= id;
 
                        }
 
        function confirmbye(){
               id= webID;
 
                $.ajax({
                            method:"GET",
                            url:"buytool.php?id="+id+"&t=cpanels",
                            dataType:"text",
                            success:function(data){
                            if(data.match("buy")){
                                let lastid = data.split("buy,")[1];
                                ide= "cpanel"+id;
 
                                 $("#cpanel"+id).html('<span id='+ide+' title="buy" type="cpanel"><a onclick=openitem('+lastid+') class="btn btn-success btn-sm" style="font-size: 11px; cursor:pointer">Order #'+lastid+' </a></span>').show();
                            }
                            else{
                                if(data.match("deleted")){
                                $("#cpanel"+id).html('Already sold / Deleted').show();
                                  }else{
                                      $('#modalCoupon').modal('show');
                                }
 
                            }
                            },
                        });
                   }
 
 
        g:xcheck=0;
        function check(id){
            if(xcheck > 4){
                bootbox.alert("<b><i class='fas fa-stroopwafel fa-spin'></i> Wait</b> - Other checking operation is executed!");
            } else {
                xcheck++;
                var type = $("#shop"+id).attr('type')
                 $("#shop"+id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();
                $.ajax({
                    type:       'GET',
                    url:        'CheckCpanel'+id,
                    success:    function(data)
                    {
                        if (data.match("Success")) {
 
                             $("#shop"+id).html(`<span class='btn btn-success btn-sm' style='font-size: 12px'>Working</span>`).show();
 
                          }
                        else{
                            var ide= 'bad-cpanel'+id;
                            $("#shop"+id).html('<span id=' + ide + ' class="btn btn-danger btn-sm" style="font-size: 12px">Bad!</span>').show();
                            var tr = $("#shop"+id).parents('tr');
 
                                 setTimeout(function(){
                                 $('#cpanel_data').DataTable().row(tr).child.hide();
                                 }, 2000);
                            $("#"+ide).parent().parent().parent().delay(3000).hide('slow');
 
                             }
                         xcheck--;
 
                    }
                });
            }
        }
 
           g:xcheck2=0;
        function check2(id){
            if(xcheck2 > 4){
                bootbox.alert("<b><i class='fas fa-stroopwafel fa-spin'></i> Wait</b> - Other checking operation is executed!");
            } else {
                xcheck2++;
                var type = $("#shop2"+id).attr('type')
                 $("#shop2"+id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();
                $.ajax({
                    type:       'GET',
                    url:        'CheckCpanelTest'+id,
                    success:    function(data)
                    {
                        if (data.match("Success")) {
 
                             $("#shop2"+id).html(`<span class='btn btn-success btn-sm' style='font-size: 12px'>Working</span>`).show();
 
                          }
                        else{
                            var ide= 'bad-cpanel'+id;
                            $("#shop2"+id).html('<span id=' + ide + ' class="btn btn-danger btn-sm" style="font-size: 12px">Bad!</span>').show();
 
 
                             }
                         xcheck2--;
 
                    }
                });
            }
        }
 
        g:xcheckbl=0;
        function checkblacklist(id){
            if(xcheckbl > 4){
 
            bootbox.alert("<b><i class='fas fa-stroopwafel fa-spin'></i> Wait</b> - Other checking operation is executed!");
            } else {
                xcheckbl++;
 
                $("#blacklistoutput"+id).html('<b><span class="indigo-text" align="center"> <i class="fas fa-spinner indigo-text fa-pulse fa-3x mx-4"></i></span></b> ').show();
 
                $.ajax({
                    type:       'GET',
                    url:        'check2blacklist.php?id='+id,
                    success: function(data)
                    {
 
                         if (data.match("working")) {
 
                            $("#blacklistoutput"+id).html(`<span class='btn btn-sm btn-success'>Clean</span>`).show();
 
                          }
                        else{
                            var ide= 'bad-cpanel'+id;
                            $("#blacklistoutput"+id).html(`<span class='btn btn-sm btn-danger' id=' + ide  + '>Reported!</span>`).show();
                                  var tr = $("#shop"+id).parents('tr');
 
                                 setTimeout(function(){
                                 $('#cpanel_data').DataTable().row(tr).child.hide();
                                 }, 2000);
                                 $("#"+ide).parent().parent().parent().delay(2000).hide('slow');
 
                             }
 
                        xcheckbl--;
                    }
                });
            }
        }
 
        function techInfo(id){
            $.ajax({
                type:       'GET',
                url:        'CpanelTechInfo'+id,
                success:    function(data)
                {
                    $("#techInfoBody").html('');
                      $("#techInfoBody").append(`
                                <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size: bold;">
                                   <span style="font-size: bold;"> categories </span> <span style="font-size: bold;"> name </span>
                                </li>
                        `   );
 
                    let json = JSON.parse(data);
 
                    for(var i = 0; i < json.length; i++) {
                          var name = json[i].name;
                          var categories = json[i].categories;
                            $("#techInfoBody").append(`
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    ${categories} <span class="badge badge-pill badge-info"> ${name} </span>
                                </li>
                        `   );
 
 
                        }
 
 
 
                    $("#techInfoModal").modal();
                }
            });
 
        }
 
          function seoInfo(id){
            $.ajax({
                type:       'GET',
                url:        'CpanelSeoInfo'+id,
                success:    function(data)
                {
                    $("#seoInfoBody").html('');
 
                    let obj = JSON.parse(data);
 
                    Object.keys(obj).forEach(key => {
                        if(key != 'sr_domain'){
                            $("#seoInfoBody").append(`
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    ${key} <span class="badge badge-pill badge-info"> ${obj[key]} </span>
                                </li>
                        `   );
                        }
                    });
 
                    $("#seoInfoModal").modal();
                }
            });
 
        }
 
        function openitem(order){
 
        $.ajax({
        type:       'GET',
        url:        'showOrder'+order,
        success:    function(data)
        {
          $("#myModalHeader").text('Order #'+order);
        $("#modelbody").append(data);
        $('#myModal').modal();
 
        }});
 
        }
 
$(document).keydown(function(event){
if(event.which=="17") cntrlIsPressed 
= true;                           });
$(document).keyup(  function     (){
cntrlIsPressed    =    false;    });
var cntrlIsPressed      =     false;
$(window).on("popstate", function(e)
{location.replace(document.location);
}); $(window).on('load',function() {
$('.dropdown').hover(     function()
{           $(  '.dropdown-toggle',
 this).trigger('click');          });
 pageDiv(1,'Add Balance - OdinShop',
'',1); var clipboard = new
 Clipboard(      '.copyit'        ); 
 clipboard.on('success', function(e) 
 { setTooltip(e.trigger, 'Copied!');
 hideTooltip (      e.trigger     );
 e.clearSelection();       });   });
function setTooltip(btn, message) {
/*console.log("hide-1");*/
$(btn).tooltip (      'hide'       )
.attr('data-original-title',message)
.tooltip       (      'show'      );
/*console.log("show");*/}  function 
 hideTooltip   (btn)             {
setTimeout(       function   ()   {
$(btn).tooltip    (   'hide'     ); 
/*console.log("hide-2");*/},1000);}
function setTheme( themeName )    {
localStorage.setItem (  '  theme ',
              themeName          ); 
document.documentElement.className
 = themeName; }
 /*function to toggle between light
  and dark theme*/
function toggleTheme () {  if    (
localStorage.getItem ( 'theme'  )
 === 'theme-dark'    ){ setTheme (
 'theme-light');} else {  setTheme
(  'theme-dark'  );     }       }
/*mmediately invoked function to 
set the theme on initial load*/
(function (           ) { if   (
localStorage.getItem('theme') === 
'theme-dark'   ) {   setTheme (
'      theme-dark        '    );
document.getElementById('slider')
.checked = false;   } else     {
setTheme   (  'theme-light'    );
document.getElementById('slider')
.checked = true;  }     })    ();
</script>
</body>
</html>
