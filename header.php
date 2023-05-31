<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
header("location: login");
exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
    
    <!DOCTYPE html>
<html>
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="L4juOQYBnGImEttBbdNpTy6sMZLChXqGpMmOYtgI" />
    <title>Home | LuFix</title>
    
    
    <link rel="stylesheet" href="../buyer/layout/css/bootstrap.min.css">
    <script src="../buyer/layout/js/jquery-3.4.1.min.js"></script>
    <script src="../buyer/layout/js/clipboard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="../buyer/layout/js/bootstrap.min.js"></script>
    <script src="../buyer/layout/js/bootbox.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../buyer/layout/css/flags.css" />
    <style>
        @import url(//fonts.googleapis.com/css?family=Roboto:400);
 
        .navbar-nav .dropdown-menu {
            margin: 0 !important
        }
    </style>
</head>
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
</head>
<body class="hold-transition sidebar-mini layout-fixed  ">
    <div class="wrapper">
        <input type="hidden" id="sr" value="0" c="0" />
        <input type="hidden" id="cr" value="0" />
        <input type="hidden" id="tr" value="0" />
        <input type="hidden" id="ch" value="0" />
        <input type="hidden" id="sidemob" value="0" />
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="/balance">Balance
                        <span class="badge-pill bg-primary" id="balance">$ 0.00</span>
                        <span class="fa fa-plus"></span>
                    </a>
                </li>
            </ul>
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input name="q" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit" id="searchbtn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link ref" href="#">
                        <i class="fas fa-redo-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge" id="m_notification"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div id="messages">
                        </div>
                        <a href="messages" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge" id="notification"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">
                            <span class="notifi" id="notification">0</span> Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="/tickets" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> Tickets
                            <span class="float-right text-muted text-sm"><span class="badge badge-success" id="tickets_n" data-toggle="tooltip" title="You didn't reply">0</span> <span class="badge badge-danger" id="tickets_r" data-toggle="tooltip" title="You replied">0</span></span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/reports" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> Reports
                            <span class="float-right text-muted text-sm"><span class="badge badge-success" id="reports_n" data-toggle="tooltip" title="You didn't reply">0</span> <span class="badge badge-danger" id="reports_r" data-toggle="tooltip" title="You replied">0</span></span>
                        </a>
                        <div class="p_requests" hidden="true">
                            <div class="dropdown-divider"></div>
                            <a href="/request-products" class="dropdown-item">
                                <i class="fas fa-plus-circle mr-2"></i> Product Requests
                                <span class="float-right text-muted text-sm"><span class="badge badge-success" id="p_requests">0</span></span>
                            </a>
                        </div>
                        <div class="s_orders" hidden="true">
                            <div class="dropdown-divider"></div>
                            <a href="/service-orders" class="dropdown-item">
                                <i class="fas fa-suitcase mr-2"></i> Service Orders
                                <span class="float-right text-muted text-sm"><span class="badge badge-success" id="sorders_n" data-toggle="tooltip" title="You didn't reply">0</span> <span class="badge badge-danger" id="sorders_r" data-toggle="tooltip" title="You replied">0</span></span>
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="/notifications" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item" id="side-button">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" id="sidebar-button">
                        <i class="fas fa-user-circle"></i><span class="badge badge-success navbar-badge" id="orders_p"></span>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/home" class="brand-link">
                <img src="/dist/img/LuFixLogo.png" alt="luFix Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">LuFix Store</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/dist/img/avatar0.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/settings" class="d-block">Skybaddes<span style="margin-left:8.6em;"></span></a>
                    </div>
                </div>
 
 
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
 
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu">
                        <li class="nav-item has-treeview">
                            <a href="/home" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/request-products" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                <p>
                                    Request Products
                                    <span class="badge badge-danger right">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/lufix-services" class="nav-link">
                                <i class="nav-icon fas fa-suitcase"></i>
                                <p>
                                    LuFix Services
                                    <span class="badge badge-info right">317</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Hosts
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">42186</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/shells" class="nav-link">
                                        <i class="fas fa-terminal nav-icon"></i>
                                        <p>Shells
                                            <span class="badge badge-primary right">10669</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/cpanels" class="nav-link">
                                        <i class="fab fa-cpanel nav-icon"></i>
                                        <p>cPanels<span class="badge badge-primary right">26172</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/rdps" class="nav-link">
                                        <i class="fas fa-laptop nav-icon"></i>
                                        <p>Rdps
                                            <span class="badge badge-primary right">1373</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ssh" class="nav-link">
                                        <i class="fas fa-sitemap nav-icon"></i>
                                        <p>SSH/WHM
                                            <span class="badge badge-primary right">3972</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-paper-plane"></i>
                                <p>
                                    Send
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="badge badge-info right">85304</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/mailers" class="nav-link">
                                        <i class="far fa-paper-plane nav-icon"></i>
                                        <p>Mailers
                                            <span class="badge badge-primary right">1905</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/smtps" class="nav-link">
                                        <i class="fas fa-reply-all nav-icon"></i>
                                        <p>SMTPs
                                            <span class="badge badge-primary right">83399</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Leads
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">121697</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/leads" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Leads
                                            <span class="badge badge-primary right">121697</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Checked Leads" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Checked Leads
                                            <span class="badge badge-primary right">842</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Emails Only" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Emails Only
                                            <span class="badge badge-primary right">96811</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Combo Email:Password" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Combo Email:Pass
                                            <span class="badge badge-primary right">6604</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Combo Username:Password" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Combo User:Pass
                                            <span class="badge badge-primary right">349</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Combo Email:Hash" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Combo Email:Hash
                                            <span class="badge badge-primary right">8</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Combo Phone:Password" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Combo Phone:Pass
                                            <span class="badge badge-primary right">16</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Email Access" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Email Access
                                            <span class="badge badge-primary right">41</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Phone Numbers Only" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Phone Numbers Only
                                            <span class="badge badge-primary right">12811</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Full Data" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Full Data
                                            <span class="badge badge-primary right">110</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Social Media Data" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Social Media Data
                                            <span class="badge badge-primary right">4</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Site List" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Site List
                                            <span class="badge badge-primary right">4101</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/cards" class="nav-link">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>
                                    Cards
                                    <i class="right"></i>
                                    <span class="badge badge-info right">5488</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/webmails" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    WebMails
                                    <i class="right"></i>
                                    <span class="badge badge-info right">167709</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-key"></i>
                                <p>
                                    Accounts
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">90832</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/accounts" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Accounts
                                            <span class="badge badge-primary right">90832</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type1" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Marketing
                                            <span class="badge badge-primary right">36624</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type2" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Hosting/Domain
                                            <span class="badge badge-primary right">6080</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type3" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Games
                                            <span class="badge badge-primary right">8668</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type4" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>VPN/Socks/Proxy
                                            <span class="badge badge-primary right">20406</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type5" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Shopping
                                            <span class="badge badge-primary right">362</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type6" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Program
                                            <span class="badge badge-primary right">2537</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type7" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stream
                                            <span class="badge badge-primary right">13627</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type8" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dating
                                            <span class="badge badge-primary right">474</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type9" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Learning
                                            <span class="badge badge-primary right">1885</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type10" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Torrent/File Host
                                            <span class="badge badge-primary right">156</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type11" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Voip/Sip
                                            <span class="badge badge-primary right">2</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type12" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Other
                                            <span class="badge badge-primary right">11</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">Others</li>
                        <li class="nav-item">
                            <a href="/scripts" class="nav-link">
                                <i class="nav-icon fas fa-file-code"></i>
                                <p>
                                    Scripts/Programs
                                    <span class="badge badge-info right">409</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/scams" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Scam Pages/Letters
                                    <span class="badge badge-info right">3814</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/tutorials" class="nav-link">
                                <i class="nav-icon fas fa-suitcase"></i>
                                <p>
                                    Tutorials/Methods
                                    <span class="badge badge-info right">399</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <div style="display:none;" data-type="grabbed"></div>
            <script src="plugins/chart.js/Chart.min.js"></script>
            <div class="content-header">
                <div class="container-fluid">
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-home"></i> <strong>Hello, Skybaddes!</strong></h5>
                        Welcome back to LuFix Store.
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Home</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Home</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-widget widget-user-2">
                                <div class="widget-user-header bg-warning">
                                    <div class="widget-user-image">
                                        <img class="img-circle elevation-2" src="dist/img/avatar0-128.png" alt="User Avatar">
                                    </div><span>
                                        <div class="text-right"><strong>Add Funds    </strong><br>
                                            <a href="balance">
                                                <img data-toggle="tooltip" title="Bitcoin" width="50" height="50" src="img/btc.png">
                                            </a>
                                            <a href="balance">
                                                <img data-toggle="tooltip" title="Perfect Money" width="50" height="50" src="img/pm.png">
                                            </a>
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="widget-user-desc-1">Skybaddes</h4>
                                        </div>
                                    </span>
 
                                </div>
                                <div class="card-footer p-0">
                                    <ul class="nav flex-column nav-child-indent">
                                        <li class="nav-item">
                                            <a href="balance" class="nav-link">
                                                Balance <span id="balance" class="float-right badge-pill bg-primary">$ 0.00</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tickets" class="nav-link">
                                                Pending Tickets <span id="tickets" class="float-right badge bg-info">0</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="orders" class="nav-link">
                                                Pending Orders <span id="orders" class="float-right badge bg-success">0</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="reports" class="nav-link">
                                                Pending Reports <span id="reports" class="float-right badge bg-danger">0</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget-user-header bg-warning">
                                    <div class="bg-info text-center col-md-12">
                                        <div class="d-flex flex-wrap justify-content-center">
                                            <h5 id="twp"><span class="badge hours">03</span>:</h5>
                                            <h5 id="twp"><span class="badge min">15</span>:</h5>
                                            <h5><span class="badge sec">39</span> </h5>
                                            <h5 id="mins"><span class="badge days">31</span>-</h5>
                                            <h5 id="mins"><span class="badge months">05</span>-</h5>
                                            <h5><span class="badge years">2023</span></h5> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Actions</h3>
                                </div>
                                <div class="card-body">
                                    <div id="accordion">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="btn-tool collapsed">
                                                        <i class="fas fa-angle-left"></i>
                                                    </a>
                                                </div>
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false">
                                                    <h4 class="card-title">Our Domains</h4>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"></button>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse in collapse">
                                                <div class="card-body"><strong>LuFix.co</strong> || <strong>LuFix.la</strong> || <strong>LuFix.fo</strong> || <strong>LuFix.net</strong> || <strong>LuFix.to</strong>
                                                    <br>Make sure you <strong>Save Them!</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-danger">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" class="btn-tool collapsed">
                                                        <i class="fas fa-angle-left"></i>
                                                    </a>
                                                </div>
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
                                                    <h4 class="card-title"> Become a Seller <i class="fab fa-btc"></i></h4>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"></button>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="card-body">
                                                    Interested in becoming a Seller at LuFix Store ?
                                                    <br>Please check our Rules and apply your seller request.
                                                    <br><a href="seller-terms"><button class="btn btn-primary">Become a Seller</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-success">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" class="btn-tool collapsed">
                                                        <i class="fas fa-angle-left"></i>
                                                    </a>
                                                </div>
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false">
                                                    <h4 class="card-title">Terms of Service</h4>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"></button>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" style="">
                                                <div class="card-body">
                                                    <a href="terms"><button class="btn btn-info">Terms of Service</button></a>
                                                    <br>Make sure you Read them and agree.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-info">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" class="btn-tool collapsed">
                                                        <i class="fas fa-angle-left"></i>
                                                    </a>
                                                </div>
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false">
                                                    <h4 class="card-title"> Contact Us </h4>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"></button>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" style="">
                                                <div class="card-body">
                                                    If you have any Question, Problem, Suggestion or Request Feel Free to tell us.
                                                    <br><a href="tickets"><button class="btn btn-success">Open Ticket <i class="fas fa-pen"></i></button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Products Overview</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="carouselProducts" class="carousel slide" data-interval="false">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselProducts" data-slide-to="0" class="active" style="background-color: #007bff;"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <a href="#">
                                                        <h4><span style="color: #007bff;text-shadow: 0px -1px white, 1px 0px white, 0px 1px white, -1px 0px white;opacity:0.4;">Product Info</span><br><span style="color: #000;text-shadow: 0px -1px white, 1px 0px white, 0px 1px white, -1px 0px white;opacity:0.4;">Type</span></h4>
                                                    </a>
                                                </div>
                                                <svg role="img" style="max-width:100%;" width="100%" height="250" style="max-width:100%;" aria-labelledby="loading-aria" viewBox="0 0 420 250" preserveAspectRatio="none">
                                                    <title id="loading-aria">Loading Products Overview...</title>
                                                    <rect x="0" y="0" width="100%" height="100%" clip-path="url(#clip-path)" style='fill: url("#fill");'></rect>
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <circle cx="576" cy="532" r="15" />
                                                            <rect x="528" y="531" rx="2" ry="2" width="140" height="10" />
                                                            <rect x="540" y="523" rx="2" ry="2" width="140" height="10" />
                                                            <rect x="1" y="1" rx="2" ry="2" width="432" height="320" />
                                                        </clipPath>
                                                        <linearGradient id="fill">
                                                            <stop offset="0.599964" stop-color="#f3f3f3" stop-opacity="1">
                                                                <animate attributeName="offset" values="-2; -2; 1" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate>
                                                            </stop>
                                                            <stop offset="1.59996" stop-color="#ecebeb" stop-opacity="1">
                                                                <animate attributeName="offset" values="-1; -1; 2" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate>
                                                            </stop>
                                                            <stop offset="2.59996" stop-color="#f3f3f3" stop-opacity="1">
                                                                <animate attributeName="offset" values="0; 0; 3" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate>
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
 
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselProducts" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselProducts" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <section class="col-lg-7 connectedSortable">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-bullhorn"></i>
                                        Latest News
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="callout callout-info">
                                        <h5><i class="text-info">📢</i>
                                            Domains Update:<span class="direct-chat-timestamp float-right" style="font-size:70%">25-05-2023 12:00</span></h5>
                                        <p>Our new only domains : <b>lufix.co</b> - <b>lufix.la</b> - <b>lufix.fo</b> - <b>lufix.net</b> - <b>lufix.to</b><br>
                                            Make sure you save them.</p>
                                    </div>
                                    <div class="callout callout-success">
                                        <h5><i class="text-success">🎉</i>
                                            Happy New Year, everyone!<span class="direct-chat-timestamp float-right" style="font-size:70%">01-01-2023 12:00</span></h5>
                                        <p>We're excited to continue serving you in the coming year and bringing you the best products at the best prices.<br>
                                            We have a lot of exciting things planned for the new year, so stay tuned.<br>
                                            Wishing you all a happy, healthy, and prosperous 2023! </p>
                                    </div>
                                    <div class="callout callout-success">
                                        <h5><i class="text-success fa fa-solid fa-star"></i>
                                            New<span class="direct-chat-timestamp float-right" style="font-size:70%">22-09-2022 10:00</span></h5>
                                        <p>We have updated our website! Among other enhancements, improved performance and new functionalities,<br>We look forward to your enjoyment here. </p>
                                    </div>
                                    <div class="callout callout-success">
                                        <h5><b><span style="color:#228B22">💰 Free Bonus</span></b><span class="direct-chat-timestamp float-right" style="font-size:70%">19-06-2021 00:14</span></h5>
 
                                        <p>Every time your deposit starts from <b>$50</b> you will take a <b>10%</b> bonus for free.</p>
                                    </div>
                                    <div class="callout callout-success">
                                        <h5><b><span style="color:#228B22">🎁 Gift</span></b><span class="direct-chat-timestamp float-right" style="font-size:70%">19-06-2021 00:14</span></h5>
 
                                        <p>You will win <b>$5</b> bonus for your first <b>$30</b> deposit added to your balance.</p>
                                    </div>
                                    <div class="callout callout-success">
                                        <h5>💻 Guaranteed RDPs<span class="direct-chat-timestamp float-right" style="font-size:70%">19-06-2021 00:14</span></h5>
 
                                        <p>Now you can buy <a href="rdps" class="text-dark"><b>Guaranteed RDPs</b></a> and enjoy the full guaranteed time.</p>
                                    </div>
                                    <div class="callout callout-info">
                                        <h5>🔔 Receive Test Result<span class="direct-chat-timestamp float-right" style="font-size:70%">19-06-2021 00:14</span></h5>
 
                                        <p>Now you can <b>Test The Sending</b> to your email for <b>Shells & cPanels</b> before buying</b>.</p>
                                    </div>
                                    <div class="callout callout-info">
                                        <h5>🕔 Time Report<span class="direct-chat-timestamp float-right" style="font-size:70%">19-06-2021 00:14</span></h5>
 
                                        <p>You have <b>1h</b> for Cards, <b>24h</b> for RDPS & SSH/WHM, and <b>12h</b> for the other products to report after the purchase.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title"><i class="fas fa-shopping-cart"></i> Latest Orders</h3>
 
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Item</th>
                                                    <th>Status</th>
                                                    <th>Details</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd text-center">
                                                    <td colspan="14" class="dataTables_empty" valign="top"><br>
                                                        <div class="spinner-border text-secondary" role="status"><span class="sr-only">Loading...</span></div><br>Loading..
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer clearfix">
                                    <a href="orders" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                                </div>
                            </div>
                        </section>
                        <section class="col-lg-5 connectedSortable">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Available Products</h3>
 
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="donutChart" style="min-height: 350px; height: 350px; max-height: 350px; max-width: 100%; display: block; width: 350px;" width="350" height="350"></canvas>
                                </div>
                            </div>
                            <div class="card card-info direct-chat direct-chat-info" id="ticket_chat">
                                <div class="card-header">
                                    <h3 class="card-title">Ticket Direct Chat <a href="tickets"><button class="btn btn-sm btn-success ml-2">View Tickets</button></a></h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize" disabled>
                                            <i class="fas fa-expand"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Show Other Tickets" data-widget="chat-pane-toggle" disabled="">
                                            <i class="fas fa-comments"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="direct-chat-messages" id="_ticket_chat">
                                        <svg role="img" style="max-width:100%;" width="100%" height="240" style="max-width:100%;" aria-labelledby="loading-aria_1" viewBox="0 0 436 240" preserveAspectRatio="none">
                                            <title id="loading-aria_1">Loading Tickets Direct Chat..</title>
                                            <rect x="0" y="0" width="100%" height="100%" clip-path="url(#clip-path_1)" style='fill: url("#fill_1");'></rect>
                                            <defs>
                                                <clipPath id="clip-path_1">
                                                    <circle cx="29" cy="42" r="21" />
                                                    <rect x="384" y="76" rx="5" ry="5" width="50" height="11" />
                                                    <rect x="11" y="81" rx="5" ry="5" width="114" height="10" />
                                                    <rect x="316" y="9" rx="5" ry="5" width="114" height="10" />
                                                    <circle cx="409" cy="112" r="21" />
                                                    <rect x="17" y="101" rx="5" ry="5" width="360" height="25" />
                                                    <circle cx="29" cy="187" r="21" />
                                                    <rect x="316" y="152" rx="5" ry="5" width="114" height="10" />
                                                    <rect x="5" y="151" rx="5" ry="5" width="50" height="11" />
                                                    <rect x="5" y="6" rx="5" ry="5" width="50" height="11" />
                                                    <rect x="62" y="29" rx="5" ry="5" width="360" height="25" />
                                                    <rect x="62" y="172" rx="5" ry="5" width="360" height="25" />
                                                </clipPath>
                                                <linearGradient id="fill_1">
                                                    <stop offset="0.599964" stop-color="#f3f3f3" stop-opacity="1">
                                                        <animate attributeName="offset" values="-2; -2; 1" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate>
                                                    </stop>
                                                    <stop offset="1.59996" stop-color="#ecebeb" stop-opacity="1">
                                                        <animate attributeName="offset" values="-1; -1; 2" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate>
                                                    </stop>
                                                    <stop offset="2.59996" stop-color="#f3f3f3" stop-opacity="1">
                                                        <animate attributeName="offset" values="0; 0; 3" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate>
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="direct-chat-contacts">
                                        <ul class="contacts-list">
                                            <li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Type Message ..." class="form-control text-center" disabled="">
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-info" disabled="">Send</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card card-warning direct-chat direct-chat-warning" id="report_chat">
                                <div class="card-header">
                                    <h3 class="card-title">Report Direct Chat <a href="reports" class="btn btn-sm btn-info text-white ml-2">View Reports</a></h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="maximize" disabled>
                                            <i class="fas fa-expand"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Show Other Reports" data-widget="chat-pane-toggle" disabled="">
                                            <i class="fas fa-comments"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="direct-chat-messages" id="_report_chat">
                                        <svg role="img" style="max-width:100%;" width="100%" height="240" style="max-width:100%;" aria-labelledby="loading-aria_2" viewBox="0 0 436 240" preserveAspectRatio="none">
                                            <title id="loading-aria_2">Loading Reports Direct Chat..</title>
                                            <rect x="0" y="0" width="100%" height="100%" clip-path="url(#clip-path_2)" style='fill: url("#fill_2");'></rect>
                                            <defs>
                                                <clipPath id="clip-path_2">
                                                    <circle cx="29" cy="42" r="21" />
                                                    <rect x="384" y="76" rx="5" ry="5" width="50" height="11" />
                                                    <rect x="11" y="81" rx="5" ry="5" width="114" height="10" />
                                                    <rect x="316" y="9" rx="5" ry="5" width="114" height="10" />
                                                    <circle cx="409" cy="112" r="21" />
                                                    <rect x="17" y="101" rx="5" ry="5" width="360" height="25" />
                                                    <circle cx="29" cy="187" r="21" />
                                                    <rect x="316" y="152" rx="5" ry="5" width="114" height="10" />
                                                    <rect x="5" y="151" rx="5" ry="5" width="50" height="11" />
                                                    <rect x="5" y="6" rx="5" ry="5" width="50" height="11" />
                                                    <rect x="62" y="29" rx="5" ry="5" width="360" height="25" />
                                                    <rect x="62" y="172" rx="5" ry="5" width="360" height="25" />
                                                </clipPath>
                                                <linearGradient id="fill_2">
                                                    <stop offset="0.599964" stop-color="#f3f3f3" stop-opacity="1">
                                                        <animate attributeName="offset" values="-2; -2; 1" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate>
                                                    </stop>
                                                    <stop offset="1.59996" stop-color="#ecebeb" stop-opacity="1">
                                                        <animate attributeName="offset" values="-1; -1; 2" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate>
                                                    </stop>
                                                    <stop offset="2.59996" stop-color="#f3f3f3" stop-opacity="1">
                                                        <animate attributeName="offset" values="0; 0; 3" keyTimes="0; 0.25; 1" dur="2s" repeatCount="indefinite"></animate>
                                                    </stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="direct-chat-contacts">
                                        <ul class="contacts-list">
                                            <li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Type Message ..." class="form-control text-center" disabled="">
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-warning" disabled="">Send</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> <strong>LogOut</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to logout?</p>
                    </div>
                    <div class="mb-footer">
                        <div class="float-right">
                            <a href="/logout?all=1" class="btn btn-info btn-lg">Logout from all devices</a>
                            <a href="/logout" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span data-type="notgrabbed"></span>
        <aside class="control-sidebar control-sidebar-dark" id="control-sidebar-b">
            <div class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-overflow os-host-overflow-y os-host-transition" style="height: 372px;">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: -16px; width: 249px; height: 371px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                        <div class="os-content" style="padding: 16px; height: 100%; width: 100%;">
                            <h6><a href="/balance"><i class="fas fa-dollar-sign"></i> Add Balance<span class="badge-pill bg-primary text-justify" id="balance" style="margin-left:3.5em;">$ 0.00</span></a></h6>
                            <hr class="mb-2">
                            <h6><a href="/orders"><i class="fas fa-shopping-cart"></i> My Orders<span class="badge bg-success" id="orders" style="margin-left:8.6em;">0</span></a></h6>
                            <hr class="mb-2">
                            <h6><a href="/service-orders"><i class="fas fa-suitcase"></i> Service Orders<span class="badge bg-info" id="service_orders" style="margin-left:6.3em;">0</span></a></h6>
                            <hr class="mb-2">
                            <h6><a href="/settings"><i class="fas fa-cogs"></i> Settings<span style="margin-left:8.6em;"> </span></a></h6>
                            <hr class="mb-2">
                            <h6><a href="#" class="mb-control" data-box="#mb-signout"><i class="fas fa-sign-out-alt"></i> Logout<span style="margin-left:8.6em;"> </span></a></h6>
                            <hr class="mb-2">
                            <h6>Theme Switcher</h6>
                            <div class="d-flex"></div>
                            <div class="d-flex flex-wrap mb-3">
                                <a href="#" class="switch-theme" theme="default">
                                    <div style="width:180px;"><span class="float-right text-white"> Default Theme</span>
                                        <div class="bg-navy elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div>
                                    </div>
                                </a>
                                <a href="#" class="switch-theme" theme="brown">
                                    <div style="width:180px;"><span class="float-right "> Brown Theme </span>
                                        <div class="bg-orange elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div>
                                    </div>
                                </a>
                                <a href="#" class="switch-theme" theme="dark">
                                    <div style="width:180px;"><span class="float-right "> Dark Theme     </span>
                                        <div class="bg-black elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div>
                                    </div>
                                </a>
                                <a href="#" class="switch-theme" theme="light">
                                    <div style="width:180px;"><span class="float-right "> Light Theme    </span>
                                        <div class="bg-white elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div>
                                    </div>
                                </a>
                                <a href="#" class="switch-theme" theme="blue">
                                    <div style="width:180px;"><span class="float-right "> Blue Theme     </span>
                                        <div class="bg-bluetheme elevation-2" style="width: 40px; height: 20px; border-radius: 25px; margin-right: 10px; margin-bottom: 10px; opacity: 0.8; cursor: pointer;"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="transform: translate(0px); width: 100%;"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="transform: translate(0px); height: 28.7703%;"></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
        </aside>
    </div>
    
    
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
 
    <script async src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
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
    <link rel="stylesheet" href="../buyer/layout/css/all.min.css" />
    <link rel="stylesheet" href="../buyer/layout/css/main.css?v=12.9" />
    <link rel="stylesheet" href="../buyer/layout/css/util.css" />
    <style>
        body {
            padding-top: 80px
        }
    </style>
    <link rel="stylesheet" href="../buyer/layout/fonts/iconic/css/material-design-iconic-font.min.css">
    <script src="../buyer/layout/js/main.js"></script>
    <script type="text/javascript">
        // Notice how this gets configured before we load Font Awesome
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
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
    <script>
	$(function() {
		$(".preload").fadeOut(500, function() {
			$(".content").fadeIn(0);
		});
	});
</script> 
     <div class="preload">
<div id="mydiv"><img src="assets/wait.gif" class="ajax-loader"></div>  

  </div>
 	<div class="content">
<br><br>

<script type="text/javascript">
    function ajaxinfo(){
      $.ajax({
      type:       'GET',
      url:        'ajaxinfo.html',
      timeout: 10000 ,

           success: function(data){
              if (data != '01'){
                var data = JSON.parse(data);
                  for (var prop in data) {
                  $("#"+prop).html(data[prop] ).show();
                }
              }
              else {
                window.location = "logout.html";
              }
           }
         });

  }
    setInterval(function(){ajaxinfo()}, 3000);

 ajaxinfo();
	</script>
