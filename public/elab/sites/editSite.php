<?php
ob_start();
include('../header.php');
$id=base64_decode($_GET['id']);
$facilityQuery="SELECT * from facility_details where facility_id=$id";
$facilityInfo=$db->query($facilityQuery);
$fQuery="SELECT * FROM facility_type";
$fResult = $db->rawQuery($fQuery);
$pQuery="SELECT * FROM province_details";
$pResult = $db->rawQuery($pQuery);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-gears"></i> Edit Site</h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sites</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <div class="pull-right" style="font-size:15px;"><span class="mandatory">*</span> indicates required field &nbsp;</div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!-- form start -->
            <form class="form-horizontal" method='post'  name='editFacilityForm' id='editFacilityForm' autocomplete="off" action="editSiteHelper.php">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="facilityName" class="col-lg-4 control-label">Site Name <span class="mandatory">*</span></label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control isRequired" id="facilityName" name="facilityName" placeholder="Site Name" title="Please enter site name" value="<?php echo $facilityInfo[0]['facility_name']; ?>" onblur="checkNameValidation('facility_details','facility_name',this,'<?php echo "facility_id##".$facilityInfo[0]['facility_id'];?>','The facility name that you entered already exists.Enter another name',null)"/>
                        <input type="hidden" class="form-control isRequired" id="facilityId" name="facilityId" value="<?php echo base64_encode($facilityInfo[0]['facility_id']); ?>" />
                        </div>
                    </div>
                  </div>
                   <div class="col-md-6">
                    <div class="form-group">
                        <label for="facilityCode" class="col-lg-4 control-label">Site Code</label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control" id="facilityCode" name="facilityCode" placeholder="Site Code" title="Please enter site code" value="<?php echo $facilityInfo[0]['facility_code']; ?>" onblur="checkNameValidation('facility_details','facility_code',this,'<?php echo "facility_id##".$facilityInfo[0]['facility_id'];?>','The code that you entered already exists.Try another code',null)"/>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="otherId" class="col-lg-4 control-label">Other Id </label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control" id="otherId" name="otherId" placeholder="Other Id" value="<?php echo $facilityInfo[0]['other_id']; ?>"/>
                        </div>
                    </div>
                  </div>
                   <div class="col-md-6">
                    <div class="form-group">
                        <label for="facilityType" class="col-lg-4 control-label">Site Type <span class="mandatory">*</span> </label>
                        <div class="col-lg-7">
                        <select class="form-control isRequired" id="facilityType" name="facilityType" title="Please select site type">
                        <option value=""> -- Select -- </option>
                          <?php
                          foreach($fResult as $type){
                           ?>
                           <option value="<?php echo $type['facility_type_id'];?>"<?php echo ($facilityInfo[0]['facility_type']==$type['facility_type_id'])?"selected='selected'":""?>><?php echo ucwords($type['facility_type_name']);?></option>
                           <?php
                          }
                          ?>
                        </select>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="email" class="col-lg-4 control-label">Email(s) </label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control" id="email" name="email" placeholder="eg-email1@gmail.com,email2@gmail.com" value="<?php echo $facilityInfo[0]['facility_emails']; ?>"/>
                        </div>
                    </div>
                  </div>
                  <!--<div class="col-md-6">
                    <div class="form-group">
                        <label for="reportEmail" class="col-lg-4 control-label">Report Email(s) </label>
                        <div class="col-lg-7">
                        <textarea class="form-control" id="reportEmail" name="reportEmail" placeholder="eg-user1@gmail.com,user2@gmail.com" rows="3">< ?php echo $facilityInfo[0]['report_email']; ?></textarea>
                        </div>
                    </div>
                  </div>-->
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="contactPerson" class="col-lg-4 control-label">Contact Person</label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control" id="contactPerson" name="contactPerson" placeholder="Contact Person" value="<?php echo $facilityInfo[0]['contact_person']; ?>" />
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="phoneNo" class="col-lg-4 control-label">Phone Number</label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control checkNum" id="phoneNo" name="phoneNo" placeholder="Phone Number" value="<?php echo $facilityInfo[0]['facility_mobile_numbers']; ?>" onblur="checkNameValidation('facility_details','facility_mobile_numbers',this,'<?php echo "facility_id##".$facilityInfo[0]['facility_id'];?>','The mobile no that you entered already exists.Enter another mobile no.',null)"/>
                        </div>
                    </div>
                  </div>
                  
                </div>
               
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="state" class="col-lg-4 control-label">Region <span class="mandatory">*</span> </label>
                        <div class="col-lg-7">
                        <select name="state" id="state" class="form-control isRequired" title="Please choose region">
                          <option value=""> -- Select -- </option>
                          <?php
                          foreach($pResult as $province){
                            ?>
                            <option value="<?php echo $province['province_name'];?>"<?php echo ($facilityInfo[0]['facility_state']==$province['province_name'])?"selected='selected'":""?>><?php echo $province['province_name'];?></option>
                            <?php
                          }
                          ?>
                          <option value="other">Other</option>
                        </select>
                        <input type="text" class="form-control" name="provinceNew" id="provinceNew" placeholder="Enter Region" title="Please enter region" style="margin-top:4px;display:none;"/>
                        </div>
                    </div>
                  </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="district" class="col-lg-4 control-label">District/County <span class="mandatory">*</span></label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control isRequired" id="district" name="district" placeholder="District/County" value="<?php echo $facilityInfo[0]['facility_district']; ?>"  title="Please enter district/county"/>
                        </div>
                    </div>
                  </div>
                
              </div>
               <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="hubName" class="col-lg-4 control-label">Linked Hub Name (If Applicable)</label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control" id="hubName" name="hubName" placeholder="Hub Name" title="Please enter hub name" value="<?php echo $facilityInfo[0]['facility_hub_name']; ?>"/>
                        </div>
                    </div>
                  </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address" class="col-lg-4 control-label">Address</label>
                        <div class="col-lg-7">
                        <textarea class="form-control" name="address" id="address" placeholder="Address"><?php echo $facilityInfo[0]['address']; ?></textarea>
                        </div>
                    </div>
                  </div>
                
               </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="country" class="col-lg-4 control-label">Country</label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="<?php echo $facilityInfo[0]['country']; ?>"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="latitude" class="col-lg-4 control-label">Latitude</label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control checkNum" id="latitude" name="latitude" placeholder="Latitude" title="Please enter latitude" value="<?php echo $facilityInfo[0]['latitude']; ?>"/>
                        </div>
                    </div>
                  </div>
                
              </div>
               <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="longitude" class="col-lg-4 control-label">Longitude</label>
                        <div class="col-lg-7">
                        <input type="text" class="form-control checkNum" id="longitude" name="longitude" placeholder="Longitude" title="Please enter longitude" value="<?php echo $facilityInfo[0]['longitude']; ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="status" class="col-lg-4 control-label">Status <span class="mandatory">*</span></label>
                        <div class="col-lg-7">
                          <select class="form-control isRequired" name='status' id='status' title="Please select the status">
                            <option value=""> -- Select -- </option>
                            <option value="active" <?php echo ($facilityInfo[0]['status']=='active')?"selected='selected'":""?>>Active</option>
                            <option value="inactive" <?php echo ($facilityInfo[0]['status']=='inactive')?"selected='selected'":""?>>Inactive</option>
                          </select>
                        </div>
                    </div>
                  </div>
               </div>
               </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a class="btn btn-primary" href="javascript:void(0);" onclick="validateNow();return false;">Submit</a>
                <a href="sites.php" class="btn btn-default"> Cancel</a>
              </div>
              <!-- /.box-footer -->
            </form>
          <!-- /.row -->
        </div>
       
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  
  
  <script type="text/javascript">

  function validateNow(){
    flag = deforayValidator.init({
        formId: 'editFacilityForm'
    });
    
    if(flag){
      $.blockUI();
      document.getElementById('editFacilityForm').submit();
    }
  }
  
  function checkNameValidation(tableName,fieldName,obj,fnct,alrt,callback){
        var removeDots=obj.value.replace(/\./g,"");
        var removeDots=removeDots.replace(/\,/g,"");
        //str=obj.value;
        removeDots = removeDots.replace(/\s{2,}/g,' ');

        $.post("../includes/checkDuplicate.php", { tableName: tableName,fieldName : fieldName ,value : removeDots.trim(),fnct : fnct, format: "html"},
        function(data){
            if(data==='1'){
                alert(alrt);
                document.getElementById(obj.id).value="";
            }
        });
  }
  
  $('#state').on('change',function(){
    if(this.value == 'other'){
      $('#provinceNew').show();
      $('#provinceNew').addClass('isRequired');
      $('#provinceNew').focus();
    }else{
      $('#provinceNew').hide();
      $('#provinceNew').removeClass('isRequired');
      $('#provinceNew').val('');
    }
  });
</script>
 <?php
 include('../footer.php');
 ?>
