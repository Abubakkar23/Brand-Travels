<div >
  <h2>Train</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">ID</th>
        <th class="text-center">Username</th>
        <th class="text-center">Email</th>
        <th class="text-center">Ph No</th>
        <th class="text-center">Departure</th>
        <th class="text-center">Arrival</th>
        <th class="text-center">Class</th>
        <th class="text-center">Seats</th>
        <th class="text-center">Check In Date</th>
        <th class="text-center">Check In Time</th>         
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from train";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>      
      <td><?=$row["id"]?></td>
      <td><?=$row["userName"]?></td>  
      <td><?=$row["email"]?></td>  
      <td><?=$row["phone"]?></td>  
      <td><?=$row["stationStart"]?></td>  
      <td><?=$row["stationEnd"]?></td>  
      <td><?=$row["firstclass"]?></td> 
      <td><?=$row["economyclass"]?></td> 
      <td><?=$row["checkInDate"]?></td> 
      <td><?=$row["checkInTime"]?></td> 
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>