<?php include "header.php";?>

<body class="them"><style>
 
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

<div class="d-flex flex-row-reverse mt-0" style="z-index: 999999;position: absolute; right: 0; ">
<div class="p-2"><label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label>
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
              <th data-priority="13">Added on
              </th>
              <th class="all">Send Test</th>
              <th data-priority="4">DA</th>
              <th data-priority="5">PA</th>
              <th class="all">Buy</th>
            </tr>
          </thead>
        </tfoot>
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
              <th data-priority="13">Added on
              </th>
              <th class="all">Send Test</th>
              <th data-priority="4">DA</th>
              <th data-priority="5">PA</th>
              <th class="all">Buy</th>
            </tr>
       </table>
      </div>
    </div>
    <div class="modal fade" id="TrafficInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centere modal-notify cascading-modal" role="document">
        <div class="modal-content">
          <div class="modal-header light-blue darken-3 white-text">
            <h4 class="title" id="exampleModalLabel">
              <i class="fas fa-info"></i>
              Traffic INFO</h4>
            <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id="Trafficinfobody">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary white-text" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
     <div id="mainDiv">
      
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" id="modelbody">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- div footer -->
    <div class="modal fade" id="showmagseyesorno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
        <div class="modal-content text-center">
          <div class="modal-header d-flex justify-content-center">
            <p class="heading">will be deducted 0.10$ from the balance of the service cost?</p>
          </div>
          <div class="modal-body">
            <i class="fas fa-search fa-4x animated rotateIn"></i>
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
            <h4 class="title" id="exampleModalLabel">
              <i class="fas fa-info"></i>
              SEO INFO</h4>
            <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
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
            <h4 class="title" id="exampleModalLabel">
              <i class="fas fa-info"></i>
              TECH INFO</h4>
            <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
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
              <span aria-hidden="true" class="white-text">×</span>
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
            <i class="fas fa-shopping-cart fa-4x animated rotateIn"></i>
          </div>
          <div class="modal-footer flex-center">
            <a onclick="confirmbye()" class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
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
              <img src="buyer/layout/images/balance.png">
              <span class="pt-3 mx-4" style="font-size: 14 px">
                <b>No enough balance !</b>
                Please refill your balance</span>
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
                        url:"divPage6.html",
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
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="alfacoins-site-verification" content=" ">
<meta name="revisit-after" content="2 days">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>AddBalance</title>
<link rel="stylesheet" href="buyer/layout/css/all.min.css" />
<link rel="stylesheet" href="buyer/buyer/layout/css/main.css?v=12.9" />
<link rel="stylesheet" href="buyer/layout/css/util.css" />
<style>body{padding-top:80px}</style>
<script src="buyer/layout/js/jquery-3.4.1.min.js"></script>
<script src="buyer/layout/js/main.js"></script>
<script src="buyer/layout/js/clipboard.min.js"></script>
<script src="buyer/layout/js/bootstrap.min.js"></script>
<script src="buyer/layout/js/bootbox.min.js"></script>
<link rel="stylesheet" href="buyer/layout/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="buyer/layout/css/flags.css" />

<body class="them">
<style>
    .navbar-nav .dropdown-menu
    {
      margin:0 !important
    }
    .theme-light {
  --color-primary: #0060df;
  --color-secondary: #ffffff;
   --color-secondary2: #ecf0f1;
  --color-accent: #fd6f53;
  --font-color: #000000;
  --color-nav: #ffffff;
  --color-dropdown: #ffffff;
  --color-card: #ffffff;
   --color-card2: #d1ecf1;
  --color-info: #0c5460;
  --color-backinfo: #d1ecf1;
  --color-borderinfo: #bee5eb;

}
.theme-dark {
  --color-primary: #17ed90;
  --color-secondary: #353B50;
  --color-secondary2: #353B50;
  --color-accent: #12cdea;
  --font-color: #ffffff;
  --color-nav: #363947;
  --color-dropdown: rgba(171, 205, 239, 0.3);
  --color-card: #262A37;
   --color-card2: #262A37;
   --color-info: #4DD0E1;
  --color-backinfo: #262A37;
  --color-borderinfo: #262A37;
}
.them {

  background: var(--color-secondary);
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.them h1 {
  color: var(--font-color);
  font-family: sans-serif;
}
.card-body {
     color: var(--font-color);
    }
.them button {
  color: var(--font-color);
  background-color: #ffffff;
  padding: 10px 20px;
  border: 0;
  border-radius: 5px;
}
.navbar.navbar-light .navbar-toggler {
    color: var(--font-color);
}

/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 40px;
  width: 40px;
  left: 0px;
  bottom: 4px;
  top: 0;
  bottom: 0;
  margin: auto 0;
  -webkit-transition: 0.4s;
  transition: 0.4s;
  box-shadow: 0 0px 15px #2020203d;
  background: white url('https://i.ibb.co/FxzBYR9/night.png');
  background-repeat: no-repeat;
  background-position: center;
}

input:checked + .slider {
  background-color: #2196f3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196f3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(24px);
  -ms-transform: translateX(24px);
  transform: translateX(24px);
  background: white url('https://i.ibb.co/7JfqXxB/sunny.png');
  background-repeat: no-repeat;
  background-position: center;
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

</style><body class="them">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
</script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="js/jquery.dataTables.min.js">
  
</script><link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="buyer/layout/fonts/iconic/css/material-design-iconic-font.min.css">
<script type="text/javascript"> /* Notice how this gets configured before we load Font Awesomewindow.FontAwesomeConfig = { autoReplaceSvg: false }*/
 </script><style>  @import url(//fonts.googleapis.com/css?family=Roboto:400);
            .navbar-nav .dropdown-menu
            {
            margin:0 !important
            }
</style><style>
  .panel-default {
    border-color: #ecf0f1;
}

.panel {
  background-color: var(--color-card);
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
  .card {
       background-color: var(--color-card);
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    border-color: var(--color-card);
}

.panel-body {
    padding: 15px;
}

.panel-footer {
    padding: 10px 15px;
    background-color: var(--color-secondary2);
    border-top: 1px solid var(--color-secondary2);
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;

}

.panel-footer .label-info {
    background-color: #3498db;
}

.panel-footer .label-danger {
    background-color: #e74c3c;
}
.panel-footer .label-warning {
    background-color: #FFA726;
}


.panel-footer .label {

    display: inline;
    padding: .2em .6em .3em;
    font-size: 100%;
    font-weight: bold;
    line-height: 1;

    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
</style>


</head>
<body class="them"><style>
 
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

<div class="d-flex flex-row-reverse mt-0" style="z-index: 999999;position: absolute; right: 0; ">
<div class="p-2"><label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label></div>
</div>







<div class="row m-3 pt-1" style="color: var(--font-color);">







<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">







<label for="country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>






<select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
   





       <option value="">All Countries</option>
  





        <option value="PrestaShop">PrestaShop</option>
          <option value="RapidWeaver">RapidWeaver</option>
          <option value="Ruby on Rails">Ruby on Rails</option>
          <option value="Sandvox">Sandvox</option>
          <option value="Shopify">Shopify</option>
          <option value="SiteCore">SiteCore</option>
          <option value="SitePad">SitePad</option>
          <option value="Squarespace">Squarespace</option>
          <option value="Tiendanube">Tiendanube</option>
          <option value="Tumblr">Tumblr</option>
          <option value="vBulletin">vBulletin</option>
          <option value="Visualsoft">Visualsoft</option>
          <option value="Web Page Maker">Web Page Maker</option>
          <option value="WebAcappella">WebAcappella</option>
          <option value="Webflow">Webflow</option>
          <option value="Webnode">Webnode</option>
          <option value="Website X5">Website X5</option>
          <option value="WebsiteBuilder">WebsiteBuilder</option>
          <option value="Weebly">Weebly</option>
          <option value="WHMCS">WHMCS</option>
          <option value="Wild Apricot">Wild Apricot</option>
          <option value="Wix">Wix</option>
          <option value="WooCommerce">WooCommerce</option>
          <option value="WordPress">WordPress</option>
          <option value="WYSIWYG Web Builder">WYSIWYG Web Builder</option>
          <option value="Xara">Xara</option>
          <option value="XenForo">XenForo</option>
          <option value="Yola">Yola</option>
          <option value="Zen Cart">Zen Cart</option>
          <option value="Zendesk">Zendesk</option>






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
          <option value="Seller450">Seller450</option>
          <option value="Seller468">Seller468</option>
          <option value="Seller428">Seller428</option>
          <option value="Seller382">Seller382</option>
          <option value="Seller376">Seller376</option>
          <option value="Seller389">Seller389</option>
          <option value="Seller481">Seller481</option>
          <option value="Seller484">Seller484</option>
          <option value="Seller281">Seller281</option>
          <option value="Seller415">Seller415</option>
          <option value="Seller296">Seller296</option>
          <option value="Seller476">Seller476</option>
          <option value="Seller425">Seller425</option>
          <option value="Seller269">Seller269</option>
          <option value="Seller397">Seller397</option>
          <option value="Seller461">Seller461</option>
          <option value="Seller478">Seller478</option>
          <option value="Seller329">Seller329</option>
          <option value="Seller436">Seller436</option>
          <option value="Seller251">Seller251</option>
          <option value="Seller473">Seller473</option>
          <option value="Seller341">Seller341</option>
          <option value="Seller474">Seller474</option>
          <option value="Seller460">Seller460</option>
          <option value="Seller483">Seller483</option>
          <option value="Seller348">Seller348</option>
          <option value="Seller477">Seller477</option>
          <option value="Seller316">Seller316</option>
          <option value="Seller470">Seller470</option>
          <option value="Seller471">Seller471</option>
          <option value="Seller452">Seller452</option>
          <option value="Seller439">Seller439</option>
          <option value="Seller309">Seller309</option>
          <option value="Seller353">Seller353</option>
          <option value="Seller301">Seller301</option>
          <option value="Seller300">Seller300</option>
          <option value="Seller254">Seller254</option>
          <option value="Seller393">Seller393</option>
          <option value="Seller423">Seller423</option>
          <option value="Seller289">Seller289</option>
          <option value="Seller451">Seller451</option>
          <option value="Seller383">Seller383</option>
          <option value="Seller420">Seller420</option>
          <option value="Seller438">Seller438</option>
          <option value="Seller465">Seller465</option>
          <option value="Seller365">Seller365</option>
      





          </select>
      </div>
     





  <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">






 <label for="type" style="margin-bottom: 10px; margin-top: 5px"> <abbr title="Domain Authority">DA :</abbr>  </label>






 <select name="da" id="da" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
          <option value="">All</option>
          <option value=""></option>
          <option value="1">1</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="2">2</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="3">3</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="33">33</option>
          <option value="34">34</option>
          <option value="36">36</option>
          <option value="37">37</option>
          <option value="4">4</option>
          <option value="43">43</option>
          <option value="5">5</option>
          <option value="57">57</option>
          <option value="58">58</option>
          <option value="59">59</option>
          <option value="6">6</option>
          <option value="61">61</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="81">81</option>
          <option value="82">82</option>
          <option value="9">9</option>
  





      </select>
      </div>
   





   <div class="col-xs-6 col-sm-4 col-lg-1" style="display:inline-block">
        <label for="type" style="margin-bottom: 10px; margin-top: 5px"> <abbr title="Page Authority">PA :</abbr></label>
 





       <select name="pa" id="pa" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
          <option value="">All</option>
          <option value=""></option>
          <option value="1">1</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="3">3</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="32">32</option>
          <option value="33">33</option>
          <option value="34">34</option>
          <option value="35">35</option>
          <option value="36">36</option>
          <option value="37">37</option>
          <option value="38">38</option>
          <option value="39">39</option>
          <option value="4">4</option>
          <option value="40">40</option>
          <option value="41">41</option>
          <option value="42">42</option>
          <option value="43">43</option>
          <option value="44">44</option>
          <option value="5">5</option>
          <option value="50">50</option>
          <option value="51">51</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
     </select>
     </div>
    </div>
    <div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
      <div class="col-sm-12 table-responsive">
        <table id="cpanel_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);" "="">
          <thead>
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
              <th data-priority="13">Added on
              </th>
              <th class="all">Send Test</th>
              <th data-priority="4">DA</th>
              <th data-priority="5">PA</th>
              <th class="all">Buy</th>
            </tr>
          </thead>
        </tfoot>
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
              <th data-priority="13">Added on
              </th>
              <th class="all">Send Test</th>
              <th data-priority="4">DA</th>
              <th data-priority="5">PA</th>
              <th class="all">Buy</th>
            </tr>
       </table>
      </div>
    </div>
    <div class="modal fade" id="TrafficInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centere modal-notify cascading-modal" role="document">
        <div class="modal-content">
          <div class="modal-header light-blue darken-3 white-text">
            <h4 class="title" id="exampleModalLabel">
              <i class="fas fa-info"></i>
              Traffic INFO</h4>
            <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id="Trafficinfobody">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary white-text" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
     <div id="mainDiv">
      
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body" id="modelbody">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- div footer -->
    <div class="modal fade" id="showmagseyesorno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm modal-notify modal-info" role="document">
        <div class="modal-content text-center">
          <div class="modal-header d-flex justify-content-center">
            <p class="heading">will be deducted 0.10$ from the balance of the service cost?</p>
          </div>
          <div class="modal-body">
            <i class="fas fa-search fa-4x animated rotateIn"></i>
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
            <h4 class="title" id="exampleModalLabel">
              <i class="fas fa-info"></i>
              SEO INFO</h4>
            <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
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
            <h4 class="title" id="exampleModalLabel">
              <i class="fas fa-info"></i>
              TECH INFO</h4>
            <button type="button" class="light-blue darken-3 white-text close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
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
              <span aria-hidden="true" class="white-text">×</span>
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
            <i class="fas fa-shopping-cart fa-4x animated rotateIn"></i>
          </div>
          <div class="modal-footer flex-center">
            <a onclick="confirmbye()" class="btn btn-outline-info waves-effect" data-dismiss="modal">Yes</a>
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
              <img src="buyer/layout/images/balance.png">
              <span class="pt-3 mx-4" style="font-size: 14 px">
                <b>No enough balance !</b>
                Please refill your balance</span>
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
