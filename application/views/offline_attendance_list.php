<?php include 'header.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Offline Attendance List</h3>
              
            </div>
            <div style="text-align: right;"><a class="btn btn-success" href="<?php echo base_url().'Offline_Attendance/add_offline_attendance';?>">Add New Offline Attendance</a></div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="offline_attendance_list_table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Employee</th>
                    <th>Month</th>
                    <th>Attendance Date</th>
                    <th>In-time</th>
                    <th>Out-time</th>
                    <th>Total-time</th>
                    <th>Reason for offline update</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                if(isset($offline_attendance_list) && count($offline_attendance_list)>0)
                {
                  $count =0;
                  for($i=0;$i<count($offline_attendance_list);$i++)
                  {
                    $count++;
                ?>
                  <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $offline_attendance_list[$i]['employee_name'];?></td>
                    <td><?php echo $offline_attendance_list[$i]['attendance_month'];?></td>
                    <td><?php echo $offline_attendance_list[$i]['attendance_date'];?></td>
                    <td><?php echo $offline_attendance_list[$i]['in_time'];?></td>
                    <td><?php echo $offline_attendance_list[$i]['out_time'];?></td>
                    <td><?php echo $offline_attendance_list[$i]['total_time'];?></td>
                    <td><?php echo $offline_attendance_list[$i]['reason_for_offline_update'];?></td>
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
    
    $('#offline_attendance_list_table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

