<?php include 'header.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Online Attendance List</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="online_attendance_list_table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Employee</th>
                    <th>Month</th>
                    <th>Attendance Date</th>
                    <th>In-time</th>
                    <th>Out-time</th>
                    <th>Total-time</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                if(isset($online_attendance_list) && count($online_attendance_list)>0)
                {
                  $count =0;
                  for($i=0;$i<count($online_attendance_list);$i++)
                  {
                    $count++;
                ?>
                  <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $online_attendance_list[$i]['employee_name'];?></td>
                    <td><?php echo $online_attendance_list[$i]['attendance_month'];?></td>
                    <td><?php echo $online_attendance_list[$i]['attendance_date'];?></td>
                    <td><?php echo $online_attendance_list[$i]['in_time'];?></td>
                    <td><?php echo $online_attendance_list[$i]['out_time'];?></td>
                    <td><?php echo $online_attendance_list[$i]['total_time'];?></td>
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
    
    $('#online_attendance_list_table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

