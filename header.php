<html>
	<head>
	</head>
	<body class="them" style="them">
	<?php ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {     header("location: ../");     exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>
		<header>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="alfacoins-site-verification" content="XbaseTools">
			<meta name="revisit-after" content="1 days">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<script src="/cdn-cgi/apps/head/AGN3NmUziwZfMV-TNTe1kdyeR2Y.js"></script>
			<link rel="shortcut icon" href="../../favicon.ico">
			<title>XbaseTools</title>
			<link rel="stylesheet" href="buyer/layout/css/bootstrap.min.css">
			<script src="buyer/layout/js/jquery-3.4.1.min.js"></script>
			<script src="buyer/layout/js/clipboard.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			<script src="buyer/layout/js/bootstrap.min.js"></script>
			<script src="buyer/layout/js/bootbox.min.js"></script>
			<link rel="stylesheet" type="text/css" href="buyer/layout/css/flags.css">
			<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
			<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
			<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
			<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
			<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
			<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
			<script src="js/jquery.dataTables.min.js"></script>
			<link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
			<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
			
			<!--/<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>--->
			<script async="" src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
			<script>
            window.dataLayer = window.dataLayer || [];
 
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('set', {
                '$usrid': 'USER_ID'
            }); // Set the user ID using signed-in user_id.
            gtag('config', 'UA-177092549-1');
        
			</script>
			<link rel="stylesheet" href="buyer/layout/css/all.min.css">
			<link rel="stylesheet" href="buyer/layout/css/main.css?v=12.9">
			<link rel="stylesheet" href="buyer/layout/css/util.css">
			<style>
            body {
                padding-top: 80px
            }
        
			</style>
			<link rel="stylesheet" href="buyer/layout/fonts/iconic/css/material-design-iconic-font.min.css">
			<script src="buyer/layout/plugin.js"></script>
			<script type="text/javascript">
            // Notice how this gets configured before we load Font Awesome
            window.FontAwesomeConfig = {
                autoReplaceSvg: false
            }
        
			</script>
			<style>
            @import url(//fonts.googleapis.com/css?family=Roboto:400);
 
            .navbar-nav .dropdown-menu {
                margin: 0 !important
            }
        
			</style>
			<style>
        .navbar-nav .dropdown-menu {
            margin: 0 !important
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
 
        input:checked+.slider {
            background-color: #2196f3;
        }
 
        input:focus+.slider {
            box-shadow: 0 0 1px #2196f3;
        }
 
        input:checked+.slider:before {
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
        (function() {
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
				<a class="navbar-brand" href="main" style="color: var(--font-color);">
					<img width="40px" src="buyer/layout/images/logo.png">xbasetools</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="navbar-toggler-icon"></i>
				</button>
				<div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown mr-auto">
							<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-warehouse fa-sm orange-text"></i>
								Hosts
							</a>
							<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="rdp" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-desktop fa-fw"></i>
										RDPs
										<span class="badge badge-primary">38</span>
									</span>
								</a>
								<a class="dropdown-item" href="cPanel" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-tools fa-fw"></i>
										cPanels
										<span class="badge badge-primary">17161</span>
									</span>
								</a>
								<a class="dropdown-item" href="shell" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-file-code fa-fw"></i>
										Shells
										<span class="badge badge-primary">2222</span>
									</span>
								</a>
								<a class="dropdown-item" href="ssh" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fab fa-linux"></i>
										SSH/WHM
										<span class="badge badge-primary">132</span>
									</span>
								</a>
								<a class="dropdown-item" href="premium_shell" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-leaf fa-fw"></i>
										Premium Shells
										<span class="badge badge-primary">1092</span>
									</span>
								</a>
								<a class="dropdown-item" href="premium_cPanel" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-leaf fa-fw"></i>
										Premium cPanels
										<span class="badge badge-primary">6351</span>
									</span>
								</a>
								<a class="dropdown-item" href="premium_downloads" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-leaf fa-fw"></i>
										Premium Downloads
										<span class="badge badge-primary">8</span>
									</span>
								</a>
								<a class="dropdown-item" href="mailer" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-leaf fa-fw"></i>
										Mailers
										<span class="badge badge-primary">458</span>
									</span>
								</a>
								<a class="dropdown-item" href="smtp" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-envelope fa-fw"></i>
										SMTPs
										<span class="badge badge-primary">2652</span>
									</span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown mr-auto">
							<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-mail-bulk fa-sm pink-color"></i>
								Leads
							</a>
							<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="leads-5" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-award"></i>
										100% Validated Leads
										<span class="badge badge-primary">0</span>
									</span>
								</a>
								<a class="dropdown-item" href="leads-1" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fa fa-fire orange-color"></i>
										Email Only
										<span class="badge badge-primary">163</span>
									</span>
								</a>
								<a class="dropdown-item" href="leads-2" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-passport"></i>
										Combo Email:Password
										<span class="badge badge-primary">22</span>
									</span>
								</a>
								<a class="dropdown-item" href="leads-3" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fab fa-battle-net"></i>
										Combo Username:Password
										<span class="badge badge-primary">0</span>
									</span>
								</a>
								<a class="dropdown-item" href="leads-4" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-at"></i>
										Email Access
										<span class="badge badge-primary">21</span>
									</span>
								</a>
								<a class="dropdown-item" href="leads-6" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-mobile-alt"></i>
										Phone Number Only
										<span class="badge badge-primary">31</span>
									</span>
								</a>
								<a class="dropdown-item" href="leads-7" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-phone-square"></i>
										Combo Phone:Password
										<span class="badge badge-primary">3</span>
									</span>
								</a>
								<a class="dropdown-item" href="leads-8" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-inbox"></i>
										Full Data
										<span class="badge badge-primary">0</span>
									</span>
								</a>
								<a class="dropdown-item" href="leads-9" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fab fa-facebook"></i>
										Social Media Data
										<span class="badge badge-primary">0</span>
									</span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fab fa-drupal text-primary fa-sm"></i>
								Requests
							</a>
							<div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="requests" style="color: var(--font-color);">
									<span class="px-2">
										<i class="fas fa-user-plus"></i>
										Buyers Requests
										<span class="badge badge-primary">
											88</span>
									</span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="offers" style="color: var(--font-color);">
								<i class="fas fa-user-secret text-primary fa-sm"></i>
								Bulk Offers</a>
						</li>
					</ul>
					<ul class="navbar-nav profile">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell text-danger"></i>
								<span class="badge badge-success">0</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
								<a class="dropdown-item" href="#" style="color: var(--font-color);">There is no new notifications</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="addBalance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="badge badge-danger">
									0
									<span class="px-2">
										<i class="fa fa-plus"></i>
									</span>
								</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Ticket
								<span class="badge badge-success">0</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
								<a class="dropdown-item" href="orders" style="color: var(--font-color);">
									<span class="px-2">Report Items</span>
								</a>
								<a class="dropdown-item" href="tickets" style="color: var(--font-color);">
									<span class="px-2">My Tickets
										<span class="badge badge-success">0</span>
									</span>
								</a>
								<a class="dropdown-item" href="reports" style="color: var(--font-color);">
									<span class="px-2">My Reports
										<span class="badge badge-success">0</span>
									</span>
								</a>
								<a class="dropdown-item" href="OpenTicket" style="color: var(--font-color);">
									<span class="px-2">New Ticket</span>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								hustlersfather
								<i class="fa fa-user-secret" style="color: var(--font-color);"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
								<a class="dropdown-item" href="setting" style="color: var(--font-color);">
									<span class="px-2">Setting
										<i class="fa fa-cog"></i>
									</span>
								</a>
								<a class="dropdown-item" href="seller-profile" style="color: var(--font-color);">
									<span class="px-2">Profile
										<i class="fa fa-user"></i>
									</span>
								</a>
								<a class="dropdown-item" href="orders" style="color: var(--font-color);">
									<span class="px-2">My Orders
										<i class="fa fa-shopping-cart"></i>
									</span>
								</a>
								<a class="dropdown-item" href="addBalance" style="color: var(--font-color);">
									<span class="px-2">Add Balance
										<i class="fa fa-money-bill-alt"></i>
									</span>
								</a>
								<a class="dropdown-item" href="logout" style="color: var(--font-color);">
									<span class="px-2">Logout
										<i class="fa fa-door-open"></i>
									</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<style>
            .modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,
            .modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body {
                padding-top: 35px;
            }
 
            .modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,
            .modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
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
	</body>
</html>