<html lang="en">

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Jerux Seller</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../buyer/assets/flags.css">
      <link rel="stylesheet" type="text/css" href="css/tickets.css">
      <script type="text/javascript" src="./assets/jquery.js"></script>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Felux-Shop Login</title>
</head>

   </head>
   <body>
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
    <a class="navbar-brand" href="main" style="color: var(--font-color);"><img width="40px" src="layout/images/logo.png"> Odin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="navbar-toggler-icon"></i>
    </button>
    <div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
           <ul class="navbar-nav profile">
 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell text-danger"></i> <span class="badge badge-success">0</span></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                    <a class="dropdown-item" href="#" style="color: var(--font-color);">There is no new notifications</a>
                </div>
            </li>
 
            <li class="nav-item">
                <a class="nav-link" href="addBalance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge badge-danger">
                        0
                        <span class="px-2"><i class="fa fa-plus"></i></span></span>
                </a>
            </li>
 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ticket <span class="badge badge-success">0</span></a>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                    <a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">Report Items</span></a>
                    <a class="dropdown-item" href="tickets" style="color: var(--font-color);"><span class="px-2">My Tickets <span class="badge badge-success">0</span></span></a>
                    <a class="dropdown-item" href="reports" style="color: var(--font-color);"><span class="px-2">My Reports <span class="badge badge-success">0</span></span></a>
                    <a class="dropdown-item" href="OpenTicket" style="color: var(--font-color);"><span class="px-2">New Ticket</span></a>
                </div>
            </li>
 
 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> hustlersfather <i class="fa fa-user-secret" style="color: var(--font-color);"></i></a>
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

            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i>
                    Hosts
                </a>
                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="rdp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-primary">38</span></span></a>
                    <a class="dropdown-item" href="cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary">18443</span></span></a>
                    <a class="dropdown-item" href="shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary">2480</span></span></a>
                    <a class="dropdown-item" href="ssh" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-linux"></i> SSH/WHM <span class="badge badge-primary">128</span></span></a>
                </div>
            </li>
 
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-leaf fa-fw fa-sm text-success" style="margin-right: 4px;"></i>Premium</a>
                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="premium_shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium Shells <span class="badge badge-primary">1170</span></span></a>
                    <a class="dropdown-item" href="premium_cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium cPanels <span class="badge badge-primary">7294</span></span></a>
                    <a class="dropdown-item" href="premium_downloads" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Premium Downloads <span class="badge badge-primary">8</span></span></a>
                </div>
            </li>
 
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-google-play fa-sm text-success"></i>
                    Send
                </a>
                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="mailer" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Mailers <span class="badge badge-primary">359</span></span></a>
                    <a class="dropdown-item" href="smtp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-primary">2602</span></span></a>
                </div>
            </li>
 
 
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mail-bulk fa-sm pink-color"></i> Leads
                </a>
                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="leads-5" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> 100% Validated Leads <span class="badge badge-primary">0</span></span></a>
                    <a class="dropdown-item" href="leads-1" style="color: var(--font-color);"><span class="px-2"><i class="fa fa-fire orange-color"></i> Email Only <span class="badge badge-primary">162</span></span></a>
                    <a class="dropdown-item" href="leads-2" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-passport"></i> Combo Email:Password <span class="badge badge-primary">22</span></span></a>
                    <a class="dropdown-item" href="leads-3" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-battle-net"></i> Combo Username:Password <span class="badge badge-primary">0</span></span></a>
                    <a class="dropdown-item" href="leads-4" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-at"></i> Email Access <span class="badge badge-primary">20</span></span></a>
                    <a class="dropdown-item" href="leads-6" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-mobile-alt"></i> Phone Number Only <span class="badge badge-primary">1085</span></span></a>
                    <a class="dropdown-item" href="leads-7" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-phone-square"></i> Combo Phone:Password <span class="badge badge-primary">3</span></span></a>
                    <a class="dropdown-item" href="leads-8" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-inbox"></i> Full Data <span class="badge badge-primary">0</span></span></a>
                    <a class="dropdown-item" href="leads-9" style="color: var(--font-color);"><span class="px-2"><i class="fab fa-facebook"></i> Social Media Data <span class="badge badge-primary">0</span></span></a>
                </div>
            </li>
 
 
 
 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i> Requests
                </a>
                <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="requests" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Buyers Requests <span class="badge badge-primary"> 89</span></span></a>
                </div>
            </li>
 
            <li class="nav-item dropdown">
                <a class="nav-link" href="offers" style="color: var(--font-color);"><i class="fas fa-user-secret text-primary fa-sm"></i> Bulk Offers</a>
            </li>
        </ul>
 </div>
         <!-- /#sidebar-wrapper -->
         <!-- Page Content -->
         <b><span id="menu-toggle" onmouseover="this.style.cursor='pointer'"><span class="glyphicon glyphicon-indent-right"></span></span></b>
         <div id="page-content-wrapper">
            <div class="container-fluid">
               <div id="divPage">

                           <div class="row">
         
                             <div class="preload" style="display: none;">
                            
                            <div id="mydiv">
                           
                           <img src="img/wait.gif" class="ajax-loader"></div>
                      
                           </div>
                     
                     <div class="content" style="display:inline block;">

                           <center>
                              
                              <h2>Banks Logs</h2>
                              
                           </center>
                              <span><a href="#all" data-toggle="" aria-expanded="true" onclick="TabDiv('all','banksTab1.php')">All</a></span>
                              </li>
                        </ul>

                           <div class="tab-pane fade" id="static">
                              <div class="well well-sm">
                               <center>
                              
                                    <h4>Rules </h4>
                              
                               </center>
                                 <ul class="user-info">
                                    <li><b>Do not insert a bank account without SCREENSHOT of it (USE : prntscr.com)</b></li>
                                    <li><b>ONLY INSERT WORKING ACCOUNT</b></li>
                                    <li>If you have mistaken or need to edit a tool just remove it and add it again</li>
                                    <li><b>Deleted</b> mean that the tools is not working !</li>
                                 </ul>
                                           
                                 <ul class="user-info">
                                    <li>Number of Bank Accounts : <b>0</b></li>
                                    <li>Unsold Bank Accounts : <b>0</b></li>
                                    <li>Sold Bank Accounts : <b>0</b></li>
                                    <li>Deleted Bank Accounts : <b>0</b></li>
                                 </ul>
                              </div>
                           </div> 
                        </div>
                     </div>
                       </div>
                           </div>
                            </div>
                            </div>
                           <div class="tab-pane fade active in" id="all" style="display: block;">
                              <table width="100%" id="dataTable" class="table table-striped table-bordered table-condensed sticky-header dataTable no-footer" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                 <thead>
                                    <tr>
                                       <th></th>
                                       <th>ID</th>
                                       <th>Type</th>
                                       <th>Country</th>
                                       <th>Bank Name</th>
                                       <th>Balance</th>
                                       <th>Information</th>
                                       <th>Seller</th>
                                       <th>Added Date</th>
                                       <th>Price</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody id="tbody2">
                                    <tr class="banks-tabel">
                                          <th></th>
                                       <td> 7 </td>
                                       <td> BANKS </td>
                                       <td> Nigeria </td>
                                       <td> aesd </td>
                                       <td> 1254 </td>
                                       <td> saawd </td>
                                       <td>      </td>
                                       <td> 31/05/2023 05:06:37 am </td>
                                       <td> 2223</td>
                                            </tr>
                                           </tbody>
                                            </table>
                                          <a data-toggle="modal" class="btn btn-primary btn-xs" data-target="#myModald7">
                                          <font color="white">Open #7 </font></a>
                                          <font color="white">
                                             <div class="modal fade" id="myModald7">
                                                <div class="modal-dialog">
                                                   <div class="modal-content">
                                                      <div class="modal-header">
                                                         <h4 class="modal-title" id="myModalLabel">
                                                            <font color="black"> Banks #7 </font>
                                                         </h4>
                                                      </div>
                                                      <div class="modal-body">
                                                         <font color="black">			aesd | cdgg  </font>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </font>
                                    <div id="shop7" type="delete"><a onclick="javascript:delet(7);" class="btn btn-danger btn-xs">remove</a></div>
                                </div>
                           <div class="tab-pane fade" id="add" style="display: block;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
          <script>
                        $(function() {
                        	$(".preload").fadeOut(900, function() {
                        		$(".content").fadeIn(0);
                        	});
                        });
                        function TabDiv(n,u){
                           $("#all").html('').show();
                           $("#add").html('').show();
                           $("#massadd").html('').show();
                           $("#unsold").html('').show();
                        
                           $("#"+n).html('<div id="mydiv"><img  src="../img/loadTab.gif" class="ajax-loader"></div>').show();
                           $.ajax({
                           type:       'GET',
                           url:        u,
                           success:    function(data)
                           {
                           $("#"+n).html(data).show();
                           newTableObject = document.getElementById('table');sorttable.makeSortable(newTableObject);
                           }
                        });  
                        }
           </script>  
                           <script>
                     var v_aa =0;
                     $("#menu-toggle").click(function(e) {
                         e.preventDefault();
                         $("#wrapper").toggleClass("toggled");
                         if (v_aa == 1) {
                           $("#menu-toggle").html('<span class="glyphicon glyphicon-indent-right"></span>').show();
                           v_aa =0;
                         }
                         else {
                           $("#menu-toggle").html('<span class="glyphicon glyphicon-indent-left"></span>').show();
                           v_aa =1;     
                         }
                         
                     });
                     
                  </script>
   </body>
</html>