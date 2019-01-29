<?php include 'header.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Employee List</h3>
              
            </div>
            <div style="text-align: right;"><a class="btn btn-success" href="<?php echo base_url().'Employee/add_emplyee';?>">Add New Employee</a></div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="employee_list_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Joining Date</th>
                  <th>Department</th>
                  <th>Designation</th>
                  <th>Hotspot name</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                if(isset($employee_list) && count($employee_list)>0)
                {
                  $count =0;
                  for($i=0;$i<count($employee_list);$i++)
                  {
                    $count++;
                ?>
                  <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $employee_list[$i]['employee_id'];?></td>
                    <td><?php echo strtoupper($employee_list[$i]['employee_name']);?></td>
                    <td><?php echo $employee_list[$i]['employee_email'];?></td>
                    <td><?php echo $employee_list[$i]['employee_mobile'];?></td>
                    <td><?php echo $employee_list[$i]['employee_join_date'];?></td>
                    <td><?php echo $employee_list[$i]['employee_department'];?></td>
                    <td><?php echo $employee_list[$i]['employee_designation'];?></td>
                    <td><?php echo $employee_list[$i]['employee_mobile_hotspot_name'];?></td>
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
    
    $('#employee_list_table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

