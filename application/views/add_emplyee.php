<?php include 'header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add New Employee</h3>
            </div>
            <div style="text-align: right;"><a class="btn btn-danger" href="<?php echo base_url().'Employee';?>">Back</a></div>
            <hr>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-10">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- form start -->
            <form class="form-horizontal" name="form_employee" id="form_employee" method="post" action="<?php echo base_url().'Employee/save_employee_information';?>" enctype="multipart/form-data">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                      <label for="Name" class="col-sm-4 control-label">Employee Name*</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="employee_name" id="employee_name" placeholder="Employee Name">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Email" class="col-sm-4 control-label">Official Email ID*</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" name="employee_email" id="employee_email" placeholder="Official Email ID">
                      </div>
                    </div>  
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                      <label for="Mobile" class="col-sm-4 control-label">Mobile No*</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="employee_mobile" id="employee_mobile" placeholder="Mobile No">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Address" class="col-sm-4 control-label">Address*</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" name="employee_address" id="employee_address"></textarea>
                      </div>
                    </div>  
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                       <label for="Blood" class="col-sm-4 control-label">Blood group*</label>
                        <div class="col-sm-8">
                          <select class="form-control" name="employee_blood_group" id="employee_blood_group">
                            <option value="">---Blood group---</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Date Of Birth" class="col-sm-4 control-label">Date Of Birth*</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="employee_dob" id="employee_dob" placeholder="Date Of Birth">(mm-dd-yyyy)
                      </div>
                    </div>  
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                      <label for="Department" class="col-sm-4 control-label">Department*</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="employee_department" id="employee_department">
                          <option value="">---Department---</option>
                          <option value="Ispeed">Ispeed</option>
                          <option value="JSPL">JSPL</option>
                        </select>
                      </div>
                    </div> 
                    <div class="form-group col-md-6">
                       <label for="Designation" class="col-sm-4 control-label">Designation*</label>
                        <div class="col-sm-8">
                          <select class="form-control" name="employee_designation" id="employee_designation">
                            <option value="">---Designation---</option>
                            <option value="ARTICLE ASSISTANT">ARTICLE ASSISTANT</option>
                            <option value="AUDIT ASSITANT">AUDIT ASSITANT</option>
                            <option value="QUALIFIED">QUALIFIED</option>
                            <option value="SEMI QUALIFIED">SEMI QUALIFIED</option>
                            <option value="SOFTWARE DEVELOPER">SOFTWARE DEVELOPER</option>
                            <option value="SENIOR SOFTWARE DEVELOPER">SENIOR SOFTWARE DEVELOPER</option>
                            <option value="ANY OTHER">ANY OTHER</option>
                          </select>
                        </div>
                    </div>
                  </div>
                </div>   
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                      <label for="Joining Date" class="col-sm-4 control-label">Joining Date*</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="employee_join_date" id="employee_join_date" placeholder="Joining Date">(mm-dd-yyyy)
                      </div>
                    </div> 
                    <div class="form-group col-md-6">
                       <label for="WiFi MAC Address" class="col-sm-4 control-label">Mobile Hotspot Name*</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="employee_mobile_hotspot_name" id="employee_mobile_hotspot_name" placeholder="Mobile Hotspot Name">
                        </div>
                    </div> 
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                      <label for="Photo" class="col-sm-4 control-label">Passport Photo*</label>
                      <div class="col-sm-8">
                        <input type="file" class="form-control" name="employee_photo" id="employee_photo" placeholder="Passport Photo">
                      </div>
                    </div> 
                  </div>
                </div>
               
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input type="submit" name="btn_submit" id="btn-submit" class="btn btn-info pull-right" value="Add">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

         
        </div>
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
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })

     //Date picker
    $('#employee_dob').datepicker({
      changeMonth: true,
      changeYear: true,
      autoclose: true
    })
    $('#employee_join_date').datepicker({
      changeMonth: true,
      changeYear: true,
      autoclose: true
    })
  })
</script>
<script type="text/javascript">
$(document).ready(function(){

 $("#form_employee").validate({
        // validation rules for form
            rules: {
                employee_name: {
                    required: true,
                },
                employee_mobile: {
                    required: true,
                    number :true,
                    minlength: 10, 
                    maxlength: 10
                },
                employee_email: {
                    required: true, 
                    email: true
                },
                employee_address: {
                    required: true
                },
                employee_dob: {
                    required: true
                },
                employee_blood_group: { 
                    required: true
                },
                employee_join_date: { 
                    required: true
                },
                employee_department: { 
                    required: true
                },   
                employee_designation: { 
                    required: true
                }, 
                employee_photo: { 
                    required: true
                }, 
                employee_mobile_hotspot_name: { 
                    required: true
                }
            },
            messages: {
                employee_name: {required: "Please Enter Employee Name"},
                employee_mobile: {required: "Please Enter Employee Mobile No."},
                employee_email: {required: "Please Enter Official Email Id"},
                employee_address: {required: "Please Enter Address"},
                employee_dob: {required: "Please Enter Date Of Birth"},
                employee_blood_group: {required: "Please Enter Blood group"},
                employee_join_date: {required: "Please Enter Joining Date"},
                employee_department: {required: "Please Enter Department"},
                employee_designation: {required: "Please Enter Designation"},
                employee_photo: {required: "Please Select Photo"},
                employee_mobile_hotspot_name: {required: "Please Enter WiFi MAC Address"}
            },
            onfocusout: function (element) {
                this.element(element);
            },

        });
 });
</script>
</body>
</html>
