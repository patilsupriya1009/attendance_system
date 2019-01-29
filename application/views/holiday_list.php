<?php include 'header.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Holiday List</h3>
              
            </div>
            <div style="text-align: right;"><a class="btn btn-success" href="<?php echo base_url().'Holiday/add_holiday';?>">Add New Holiday</a></div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="holiday_list_table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Year</th>
                    <th>Month</th>
                    <th>Holiday Type</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                if(isset($holiday_list) && count($holiday_list)>0)
                {
                  $count =0;
                  for($i=0;$i<count($holiday_list);$i++)
                  {
                    $count++;
                ?>
                  <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $holiday_list[$i]['year'];?></td>
                    <td><?php echo $holiday_list[$i]['month'];?></td>
                    <td><?php echo $holiday_list[$i]['holiday_type'];?></td>
                    <td><?php echo $holiday_list[$i]['holiday_date'];?></td>
                  </tr>
                <?php    
                  }
                }
                ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php';?>  
<script>
  $(function () {
    
    $('#holiday_list_table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

