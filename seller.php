<!DOCTYPE html>
<html>
<meta charset="UTF-8" />
  
<head>
    <!-- jQuery -->
    <script type="text/javascript" 
    src="https://code.jquery.com/jquery-3.5.1.js">
    </script>
  
    <!-- DataTables CSS -->
    <link rel="stylesheet" href=
"https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  
    <!-- DataTables JS -->
    <script src=
"https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
    </script>
  
    <h1 style="color: green;">GeeksForGeeks</h1>
    <h3>DataTables processing Option</h3>
<link rel="stylesheet" href="../buyer/layout/css/all.min.css" />
<link rel="stylesheet" href="../buyer/layout/css/main.css" />
<link rel="stylesheet" href="../buyer/layout/css/util.css" />
<style>
    body {
        padding-top: 80px
    }
</style>
<link rel="stylesheet" href="../buyer/layout/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../buyer/layout/css/flags.css" />
<link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="../buyer/layout/fonts/iconic/css/material-design-iconic-font.min.css">
<script src="../buyer/layout/js/main.js">
</script>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="alfacoins-site-verification" content=" ">
    <meta name="revisit-after" content="2 days">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>xbaseTools</title>
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
</head>
<!-- body class -->

<body class="them">


    <style>
    </style>

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
            <ul class="navbar-nav mr-auto">










            </ul>
        </div>
    </nav>
b
    <!-- HTML table with student data -->
    <table id="tableID" class="display"
        style="width: 100%;">
    </table>
<script type="text/javascript">
        // Initialize a huge dataset to 
        // see the effects of processing
        let dataset = [];
        for (let i = 0; i < 250000; i++) {
            let newArr =
                [i, "Random Data: " + i, Math.random()];
            dataset.push(newArr);
        }
  
        // Initialize the DataTable
        $(document).ready(function () {
            $('#tableID').DataTable({
  
                // Add the data created above
                data: dataset,
                columns: [
                    { title: "Index" },
                    { title: "String Index" },
                    { title: "Random" },
                ],
  
                // Enable the processing indicator
                // of the DataTable
                processing: true,
            });
        });
    </script>
</body>
 </html>


























