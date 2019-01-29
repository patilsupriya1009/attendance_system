<?php include 'header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add New Holiday</h3>
            </div>
            <div style="text-align: right;"><a class="btn btn-danger" href="<?php echo base_url().'Holiday';?>">Back</a></div>
            <hr>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-10">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- form start -->
            <form class="form-horizontal" name="form_holiday" id="form_holiday" method="post" action="<?php echo base_url().'Holiday/save_holiday_information';?>">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                      <label for="Holiday Type" class="col-sm-4 control-label">Holiday Type*</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="holiday_type" id="holiday_type">
                          <option value="">---Holiday Type---</option>
                          <option value="Weekly holiday">Weekly holiday</option>
                          <option value="National holiday">National holiday</option>
                        </select>
                      </div>
                    </div> 
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                      <label for="Month" class="col-sm-4 control-label">Month*</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="month" id="month">
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
                      <label for="Holiday Date" class="col-sm-4 control-label">Holiday Date*</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="date" id="date" placeholder="Holiday Date">
                        (mm-dd-yyyy)
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
    $('#date').datepicker({
      dateFormat: 'dd-mm-yyyy',
      changeMonth: true,
      changeYear: true,
      autoclose: true
    })
    
  })
  
</script>
<script type="text/javascript">
$(document).ready(function(){

 $("#form_holiday").validate({
        // validation rules for form
            rules: {
                month: {
                    required: true,
                },
                date: {
                    required: true
                },
                holiday_type: {
                    required: true
                }
            },
            messages: {
                month: {required: "Please Enter Month"},
                date: {required: "Please Enter Holiday Date"},
                holiday_type: {required: "Please Enter Holiday Type"}
            },
            onfocusout: function (element) {
                this.element(element);
            },

        });
 });
</script>
</body>
</html>
