 <?php require "header.php"; ?>
          <center>			
               <h2>Banks</h2> 
          </center>
								
   <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
        <ul>
            <li>We Have Fresh  Banks Logs With Fullz info + E-mails access  of  Diffrents Countries ( You Can Use it for Spam ). </li>
            <li>Our E-mails Lists Guarante for you Good results because most of them are from Shops and Big Sites .</li>
            <li>Combo use for cracking (Brute forcing attack) not use for login to email.</li>
       <center>				<h5><li>There is <b> <b><?php $s12 = mysqli_query($dbcon, "SELECT * FROM banks where resseller='$uid'");$r11=mysqli_num_rows($s12);
 echo $r11;?></b> </b> Available.</li></h5><center>
        </ul>
       </div>
<input type=hidden id="type" name="type" value="7" />
    <div class="row m-3 pt-1" style="color: var(--font-color);">
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
          
            
            <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Description:</label>
            
            <input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
            <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All Countries</option>



               
            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
      
         
      <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
            <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>

            </select>
        </div>
    </div>
    <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive">
            <table id="dataTable" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
       <th data-priority="1"></th>
      
      <th class="all">ID</th>
      
<th data-priority="3">Type</th>

 <th data-priority="6">Country</th>

 <th data-priority="7">Bank Name</th>

 <th data-priority="8">Balance</th>

 <th data-priority="2">Information</th>

 <th data-priority="9"> Seller </th>
                                             <th data-priority="10">Date added </th>
               
   <th data-priority="11">Price </th>  
                        <th class="all">Action</th>
                    </tr>
                </thead>
               <thody
                  </tbody>
            </table>
        </div>
    </div>

























 <?php require "footer.php"; ?>
<script>

 
    <script>
        $(document).ready(function() {
            var webID;
            load_data();
 
            function load_data(myarray) {
                $('#dataTable').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "responsive": true,
                    "scrollX": true,
                    "order": [],
                    "lengthMenu": [
                        [10, 25, 50, 100, 500, 10000],
                        [10, 25, 50, 100, 500, "All"]
                    ],
                    "columnDefs": [{
                        "targets": [0],
                        "visible": false
                    }],
 
                    "ajax": {
                        url: "divPage8.html",
                        type: "POST",
                        data: {
                            data_filter: myarray,
                            type: document.getElementById('type').value,
                            draw: 'draw',
                            row: 'start',
                            rowperpage: 'length',
                            columnIndex: 'order',
                            columnName: 'columns',
                            columnSortOrder: 'order',
                            searchValue: 'search'
                        }
                    },
                    "columns": [{
                            "data": 0
                        },
                        {
                            "data": 1
                        },
                        {
                            "data": 2
                        },
                        {
                            "data": 3
                        },
                        {
                            "data": 4
                        },
                        {
                            "data": 5
                        },
                        {
                            "data": 6
                        },
                        {
                            "data": 7
                        },
                        {
                            "data": 8
                        },
                        {
                            "data": 9
                        }
                    ],
 
                    "pageLength": 500
                });
            }
 
            $(document).on('change', '.form-control', function() {
                $('#lead_data').DataTable().destroy();
                var country = $('#country').val();
                var description = $('#infos').val();
                var seller1 = $('#seller').val();
                $idseller = seller1.split("Seller");
                var seller = $idseller[1];
                var myarray = {};
 
                myarray[0] = country;
                myarray[1] = description;
                myarray[2] = seller;
 
                if (country != '' || description != '' || seller != '') {
 
                    load_data(myarray);
                } else {
                    load_data();
                }
            });
 
 
        });
 
        function buythistool(id) {
            $('#modalConfirmBuy').modal('show');
            webID = id;
        }
 
        function confirmbye(id) {
            id = webID;
            $.ajax({
                method: "GET",
                url: "buytool.php?id=" + id + "&t=leads",
                dataType: "text",
                success: function(data) {
                    if (data.match("buy")) {
                        let lastid = data.split("buy,")[1];
                        $("#lead" + id).html(`<button onclick=openitem(${lastid}) class="btn btn-success btn-sm">Order ${'#'+lastid}</button>`).show();
 
                    } else {
                        if (data.match("deleted")) {
 
                            $("#lead" + id).html('Already sold / Deleted').show();
 
                        } else {
                            $('#modalCoupon').modal('show');
                        }
 
 
                    }
                },
            });
        }
 </script>