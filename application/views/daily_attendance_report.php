<?php include 'header.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daily Attendance Report</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="attendance_report_table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Employee</th>
                    <th>Month</th>
                    <th>Attendance Date</th>
                    <th>Total-time</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                if(isset($daily_attendance_report) && count($daily_attendance_report)>0)
                {
                  $count =0;
                  for($i=0;$i<count($daily_attendance_report);$i++)
                  {
                    $count++;
                ?>
                  <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $daily_attendance_report[$i]['employee_name'];?></td>
                    <td><?php echo $daily_attendance_report[$i]['month'];?></td>
                    <td><?php echo $daily_attendance_report[$i]['report_date'];?></td>
                    <td><?php echo $daily_attendance_report[$i]['total_time'];?></td>
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
    
    $('#attendance_report_table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

