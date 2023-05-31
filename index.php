<!DOCTYPE html>
<html>
<meta charset="UTF-8" />
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




    <style>
    
    </style>


</body>


<html>
  
<head>
 
</head>
  
<body>


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
  

























<script src="../buyer/layout/js/jquery-3.4.1.min.js"></script>
<script src="../buyer/layout/js/clipboard.min.js"></script>
<script src="../buyer/layout/js/bootstrap.min.js"></script>
<script src="../buyer/layout/js/bootbox.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
</script>
<script src="js/jquery.dataTables.min.js"></script>
<!-- Script -->
<script>
    $(document).ready(function() {
        var dataTable = $('#empTable').DataTable({
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            //'searching': false, // Remove default Search Control
            'ajax': {
                'url': 'ajaxfile.php',
                'data': function(data) {
                    // Read values
                    var gender = $('#searchByGender').val();
                    var name = $('#searchByName').val();

                    // Append to data
                    data.searchByGender = gender;
                    data.searchByName = name;
                }
            },
            'columns': [{
                data: 'emp_name'
            }, {
                data: 'email'
            }, {
                data: 'gender'
            }, {
                data: 'salary'
            }, {
                data: 'city'
            }, ]
        });

        $('#searchByName').keyup(function() {
            dataTable.draw();
        });

        $('#searchByGender').change(function() {
            dataTable.draw();
        });
    });
</script>
</body>

</html>






