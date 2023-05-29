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
?><html>
<head>
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
 
