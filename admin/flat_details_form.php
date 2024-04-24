<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('metadata.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
</head>
<body>

        <!--/. NAV TOP  -->
  
        <div id="page-wrapper" >
          <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
			     <h1 class="page-header">Flat Details </h1>
              </div>
            </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Flat Details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
include('val.php');
include("../db_connect/db_connect.php");
	
	$sql="select max(Flat_number) as flat_number from flat_details";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);
	
	$flat_number=$row['flat_number']+1;
?>
<form action="flat_details_insert.php" id="formID" enctype="multipart/form-data" method="post" name="form1">
  <table width="683" height="395" border="0" align="center">
    <tr>
      <td width="233">Flat Number </td>
      <td width="434"><input name="flat_number" readonly="" value="<?php echo $flat_number; ?>" type="text" id="flat_number" class="validate form-control[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Flat Description </td>
      <td><textarea name="flat_description" class="validate form-control[required]" id="flat_description"></textarea></td>
    </tr>
    <tr>
      <td>Flat Photo </td>
      <td><input name="flat_photo" type="file" id="flat_photo" class="validate form-control[required]"></td>
    </tr>
    <tr>
      <td>Flat Type </td>
      <td><select name="flat_type" id="flat_type"  class="validate form-control[required]">
        <option value="">Select Type</option>
        <option>Well Furnished</option>
        <option>Semi Furnised</option>
        <option>Unfurnised</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary"name="Submit" value="Submit">
        <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
</div>
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<?php include('footer.php'); ?>
		  </div>
             <!-- /. PAGE INNER  -->
</div>
         <!--\ /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   <?php include('val.php'); ?>

</body>
</html>
