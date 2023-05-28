<?php require"header.php";?>
<!doctype html>













<script>


// Get the table element and initialize it
       let table = $('#myTable'),
    settings = {
      // Assign your settings here
    },
    dataTable = table.DataTable(settings);

// Now that the DataTable is initialized, the plugin has finished making DOM
// modifications. Let's search for their INPUT and add our own before it.
let tableId = table.attr('id'),
    searchInput = table
      .parents('.dataTables_wrapper')
      .find('input[type=search]'),
    ourInput = $(document.createElement('input'))
      .attr({
        type: 'search',
        'class': 'form-control form-control-sm',
        'aria-controls': tableId,
      });
        </script>


        <script>
        let query = undefined;
ourInput.on('keyup', () => {
  // Store the value of our INPUT in a higher scope so the filter function below
  // can see the value. This way we do a DOM request for the value of the INPUT
  // once, instead of in each execution of the filter function (which runs for
  // each row of the table).
  query = ourInput.val();
  // If the INPUT is empty, we want to show all results, so store a value we can
  // easily test for as empty later on
  if (query === '') {
    query = undefined;
  }
  // Redraw the DataTable, which then also runs all the
  // $.fn.dataTable.ext.search functions
  dataTable.draw();
});

// This is our filter that runs each time the table is redrawn
function filterDataTable(settings, data, dataIndex) {
  // When undefined that means our INPUT is empty, so show all results
  if (query === undefined) {
    return true;
  }
  // We only want to use our INPUT on the TABLE where it is displayed, not
  // other DataTables on the page, so we need to check that the ID of the table
  // being drawn matches the tableId we stored in the last code block
  if (settings.sTableId !== tableId) {
    return true;
  }
  // Now we can run our own custom search logic. The below searches for exact
  // strings on the first column in the table. This alone isn't too useful, so
  // replace this portion with your own logic.
  let columnIndex = 0;
  return data[columnIndex] === query;
}
// Add our filter to the list of filters that is run
$.fn.dataTable.ext.search.push(filterDataTable);
        </script>
        
</body>
</html>