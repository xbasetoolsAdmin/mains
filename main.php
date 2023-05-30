<?php require "header.php";?>






          <style>
 
.display  td {
    background: var(--color-card);
      color: var(--font-color);

}
.dataTables_wrapper .dataTables_paginate .paginate_button {

    color: var(--font-color);

}
#lead_data_paginate .paginate_button {
color: var(--font-color);

}

.alert-info {
    color: var(--color-info);
    background-color: var(--color-backinfo);
    border-color: var(--color-borderinfo);

}

#lead_data_filter{
  color: var(--font-color);
}
#lead_data_length{
  color: var(--font-color);
}
#lead_data_paginate{
  color: var(--font-color);
}
#lead_data_info{
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


	</select>
</div>
	
	
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="hosting" style="margin-bottom: 10px; margin-top: 5px">Hosting :</label>
<select name="detect_hosting" id="detect_hosting" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
	
	
	
	</select>
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




</select>
</div>


<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
    
    
<label for="type" style="margin-bottom: 10px; margin-top: 5px">
    
    
    <abbr title="Domain Authority">DA :</abbr></label>
    
    
<select name="da" id="da" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
    
    
    
    
<option value="">All</option>





<option value=""></option>


<option value="1">1</option>



<option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option>



 </select>
</div>



<div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
    
    
    
    
<label for="type" style="margin-bottom: 10px; margin-top: 5px">
    
    <abbr title="Page Authority">PA :</abbr></label>





<select name="pa" id="pa" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
    
    
    
<option value="">All</option>



<option value=""></option>

<option value="1">1</option>

	</select>
	</div>
</div>

<div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 table-responsive">
<table id="lead_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
<thead>
<tr>
<th data-priority="1"></th>
<th class="all">ID</th>
<th data-priority="3">Country</th>
<th data-priority="6">Description</th>
<th data-priority="7">Email N</th>
<th data-priority="8">Seller</th>
<th data-priority="2">Proof</th>
<th data-priority="9">Price</th>
<th data-priority="10">Added on </th>
<th class="all">Buy</th>
</tr>
</thead>
	<tfoot>
	<tr>
<th data-priority="1"></th>
<th class="all">ID</th>
<th data-priority="3">Country</th>
<th data-priority="6">Description</th>
<th data-priority="7">Email N</th>
<th data-priority="8">Seller</th>
<th data-priority="2">Proof</th>
<th data-priority="9">Price</th>
<th data-priority="10">Added on </th>
<th class="all">Buy</th>
</tr>
	</tfoot>
</table>
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

<script>
        $(document).ready(function(){
            var webID;
            load_data();
             function load_data(myarray) {
              $('#lead_data').DataTable({
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
                        url:"divPage2.html",
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
<script>
        $(document).ready(function(){
            var webID;
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
                        url:"divPage2.html",
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
    </script>  
<script type="text/javascript">
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
