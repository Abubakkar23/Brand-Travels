
<div >
  <h2>Airlines</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Id</th>
        <th class="text-center">Departure</th>
        <th class="text-center" >Arrival</th>        
        <th class="text-center" >Class</th>
        <th class="text-center" >Dept_Date</th>
        <th class="text-center" >Return_Date</th>
        <th class="text-center" >Trip Type</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from airline";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["id"]?></td>
      <td><?=$row["departure"]?></td>      
      <td><?=$row["arrival"]?></td> 
      <td><?=$row["class"]?></td>
      <td><?=$row["D_Date"]?></td>
      <td><?=$row["R_Date"]?></td>
      <td><?=$row["triptype"]?></td>

      
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Product Size Variation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addVariationController.php" method="POST">
            
            <div class="form-group">
              <label>Product:</label>
              <select name="product" >
                <option disabled selected>Select product</option>
                <?php

                  $sql="SELECT * from product";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['product_id']."'>".$row['product_name'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Size:</label>
              <select name="size" >
                <option disabled selected>Select size</option>
                <?php

                  $sql="SELECT * from sizes";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['size_id']."'>".$row['size_name'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="qty">Stock Quantity:</label>
              <input type="number" class="form-control" name="qty" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Variation</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   