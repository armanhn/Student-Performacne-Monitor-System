<?php 
$mysqli = new mysqli("localhost", "root", "root", "vms");

if($mysqli === false){
die("ERROR: Could not connect. " . $mysqli->connect_error);
}




 $vehicleModel = $mysqli->real_escape_string($_REQUEST['vehicleModel']);
 $vehicleTypeID = $mysqli->real_escape_string($_REQUEST['vehicleType']);
 $vehicleBrandID = $mysqli->real_escape_string($_REQUEST['vehicleBrand']);


  $sql = "INSERT INTO vehiclemodel (vehicle_Model, id_FKvehicleType,id_FKvehicleBrand) VALUES ('$vehicleModel', '$vehicleTypeID', '$vehicleBrandID')";
 if($mysqli->query($sql) === true){
echo "Records inserted successfully.";
  } else{
 echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
 }



  $mysqli->close();
 ?>




<html>
<h2>'Hello panic'<h2>
<body>

<div class="modal fade" id="addVehicleModel" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h4>Add New Vehicle Model</h4>
        </div>
        <div class="panel-body">
          <form role="form-horizontal" action="addVehicleModel.php" method="post">
            <div class="form-group">
              <label>Vehicle Model:</label>
              <input class="form-control" type="text" id="vehicleModel" name="vehicleModel" placeholder="Enter New Vehicle Model" />
            </div>
            <div class="form-group">
              <label for="vehicleType">Vehicle Type:</label>
              <div>
                <label for="vehicleType">Vehicle Type:</label>
               <div>
                       <select class="form-control" onchange="change_vehicleType()" name="vehicleType" id="vehicleTypeID">
                <option value="">Select Vehicle Type</option>

                        <option value="1">hello</option>

                       </select> 
                </select>
              </div>
            </div>
            <div class="form-group">

             <label for="vehicleType">Vehicle Brand:</label>
             <div>
                   <select class="form-control" onchange="change_vehicleBrand()" name="vehicleBrand" id="vehicleBrandID">
                         <option value="">Select Vehicle Brand</option>
                                  <option value= "2" >BMW</option>  
                   </select>
              </div>
            </div>
            <br>
            <button type="submit" class="btn btn-danger">Submit</button>
            <button type="submit" class="btn btn-primary" data-dismiss="modal">Close</button>
          </form>
        </div>
        <!--class panel body end-->
      </div>
      <!--class panel danger end-->
    </div>
    <!--class modal content end-->
  </div>
  <!--class modal dialog end-->
</div>
</body>
</html>
<!--class modal ADD VEHICLE MODEL end-->