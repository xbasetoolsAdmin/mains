<!doctype html>
<html>
    <head>
        <title>How to add Custom Filter in DataTable - AJAX and PHP</title>

           <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="layout/css/bootstrap.min.css " />
     
                 <!--1 Datatable CSS -->
     <link rel="stylesheet" href="css/datatables.min.css " />
      <link rel="stylesheet" href="css/datatables.min.css " />

        <link rel="stylesheet" href="layout/css/all.min.css " />
        <link rel="stylesheet" href="layout/css/main.css " />
        <link rel="stylesheet" href="layout/css/util.css " />
        <link rel="stylesheet" href="layout/flexslider5.css " />

        <!-- Datatable CSS -->


        <link href='DataTables/datatables.min.css' rel='stylesheet' type='text/css'>



          <!-- Bootstrap cdn JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js" integrity="sha512-7rusk8kGPFynZWu26OKbTeI+QPoYchtxsmPeBqkHIEXJxeun4yJ4ISYe7C6sz9wdxeE1Gk3VxsIWgCZTc+vX3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        









        <!-- jQuery Library -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        









        <!-- Datatable JS -->
    <body >

        <div >
         

            <!-- Custom Filter -->
            <table>
                <tr>
                    <td>
                        <input type='text' id='searchByName' placeholder='Enter name'>
                    </td>
                    </tr>
                    <tr>
                        <td>
                        <select id='searchByGender'>
                            <option value=''>-- Select Gender--</option>
                            <option value='male'>Male</option>
                            <option value='female'>Female</option>
                        </select>
                    </td>
                </tr>
            </table>
            </div >
            



            <!-- Table -->
            <table id='empTable' class='display dataTable'>
              



                <thead>
                <tr>
                    <th>Employee name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Salary</th>
                    <th>City</th>
                </tr>
                </thead>



                
            </table>
        </div>
        
        <!-- Script -->
        <script>





        $(document).ready(function(){


            var dataTable = $('#empTable').DataTable({




                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',






                //'searching': false, // Remove default Search Control
                'ajax': {
                    'url':'objects.php',






                    'data': function(data){







                        // Read values
                        var gender = $('#searchByGender').val();
                        var name = $('#searchByName').val();







                        // Append to data
                        data.searchByGender = gender;
                        data.searchByName = name;
                    }
                },




                'columns': [
                    { data: 'emp_name' },
                    { data: 'email' },
                    { data: 'gender' },
                    { data: 'salary' },
                    { data: 'city' },
                ]
            });




            $('#searchByName').keyup(function(){
                dataTable.draw();
            });





            $('#searchByGender').change(function(){
                dataTable.draw();
            });
        });





        </script>








    </body>

</html>
