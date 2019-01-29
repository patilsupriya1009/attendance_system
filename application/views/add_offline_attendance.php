<?php include 'header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add New Holiday</h3>
            </div>
            <div style="text-align: right;"><a class="btn btn-danger" href="<?php echo base_url().'Offline_Attendance';?>">Back</a></div>
            <hr>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-10">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- form start -->
            <form class="form-horizontal" name="form_offline_attendance" id="form_offline_attendance" method="post" action="<?php echo base_url().'Offline_Attendance/save_offline_attendance_information';?>">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                      <label for="Employee" class="col-sm-4 control-label">Employee*</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="employee_id_fk" id="employee_id_fk">
                          <option value="">---Employee---</option>
                         
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Reason" class="col-sm-4 control-label">Reason For Offline Attendance*</label>
                      <div class="col-sm-8">
                        <textarea class="form-control" name="reason_for_offline_update" id="reason_for_offline_update"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                      <label for="Month" class="col-sm-4 control-label">Month*</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="attendance_month" id="attendance_month">
                          <option value="">---Month---</option>
                          <option value="Jan">Jan</option>
                          <option value="Feb">Feb</option>
                          <option value="Mar">Mar</option>
                          <option value="Apr">Apr</option>
                          <option value="May">May</option>
                          <option value="Jun">Jun</option>
                          <option value="Jul">Jul</option>
                          <option value="Aug">Aug</option>
                          <option value="Sep">Sep</option>
                          <option value="Oct">Oct</option>
                          <option value="Nov">Nov</option>
                          <option value="Dec">Dec</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Attendance Date" class="col-sm-4 control-label">Attendance Date*</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="attendance_date" id="attendance_date" placeholder="Attendance Date">
                        (mm-dd-yyyy)
                      </div>
                    </div>  
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                      <label for="In-time" class="col-sm-4 control-label">In-time*</label>
                      <div class="col-sm-8 input-group bootstrap-timepicker timepicker">
                        <input type="text" class="form-control" name="in_time" id="in_time" placeholder="eg. 03:15 PM">
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Out-time" class="col-sm-4 control-label">Out-time*</label>
                      <div class="col-sm-8 input-group bootstrap-timepicker timepicker">
                        <input type="text" class="form-control" name="out_time" id="out_time" placeholder="eg. 03:15 PM">
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
    //Date picker
    $('#attendance_date').datepicker({
      dateFormat: 'dd-mm-yyyy',
      changeMonth: true,
      changeYear: true,
      autoclose: true
    })
  
  })
  
</script>
<script type="text/javascript">
  $('#in_time').timepicker();
  $('#out_time').timepicker();
</script>
<script type="text/javascript">
$(document).ready(function(){
  $.ajax({
        type: "GET",
        url: "<?php echo base_url();?>Offline_Attendance/get_employee",
        data:{id:$(this).val()}, 
        beforeSend :function(){
     $("#employee_id_fk:gt(0)").remove(); 
          $('#employee_id_fk').find("option:eq(0)").html("Please wait..");
        },                         
        success: function (data) {
          
           $('#employee_id_fk').find("option:eq(0)").html("------Employee----");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('#employee_id_fk').append(option);
         });  

        }
      });
 $("#form_offline_attendance").validate({
        // validation rules for form
            rules: {
               employee_id_fk: {
                    required: true,
                },
                reason_for_offline_update: {
                    required: true,
                },
                attendance_date: {
                    required: true,
                },
                attendance_month: {
                    required: true
                },
                in_time: {
                    required: true
                },
                out_time: {
                    required: true
                }
            },
            messages: {
                employee_id_fk: {required: "Please Select Employee"},
                reason_for_offline_update: {required: "Please Enter Reason"},
                attendance_date: {required: "Please Enter Attendance Date"},
                attendance_month: {required: "Please Enter Attendance Month"},
                in_time: {required: "Please Enter In-time"},
                out_time: {required: "Please Enter Out-time"},
            },
            onfocusout: function (element) {
                this.element(element);
            },

        });
 });
</script>
</body>
</html>
