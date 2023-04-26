
<div >
  <h3>Users</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">ID </th>
        <th class="text-center">Username </th>
        <th class="text-center">Email</th>
        <th class="text-center">Password</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from users";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td> 
      <td><?=$row["id"]?></td>
      <td><?=$row["username"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["password"]?></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="sizeDelete('<?=$row['id']?>')">Delete</button></td>
      </tr>
      
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add User
  </button>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New User Record</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addSizeController.php" method="POST">
            <div class="form-group">
              <label for="size">Username: </label>
              <input type="text" class="form-control" name="username" required>
              <label for="size">Email: </label>
              <input type="email" class="form-control" name="email" required>
              <label for="size">Password: </label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add User</button>
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
   