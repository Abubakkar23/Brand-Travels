<!DOCTYPE html>
<html>
  <head>
    <style>
      body{
        background-color: #ddd;
      }

      h1{
        color: black;
        text-align: center;
        font-size: 1rem;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
        text-transform: uppercase;
      }

      button{
        background-color:skyblue;
        border: black;
        cursor: pointer;
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-size:25px;
      }
      button:hover{
        color:white;
        font-size: 35px;
      }
      button:active{
        transform:scale(.95);
      }

      button img {
        width: 200px;
      }
    </style>
  </head>

  <body>
    <?php
     $servername= "localhost";
     $username= "root";
     $password = "";
     $db_name = "brand";
     
     $conn = new mysqli('localhost','root','','brand',);
     if($conn->connect_error){
       die('Connection Failed : '.$conn->connect_error);
     }

      $userName = mysqli_real_escape_string($conn, $_REQUEST['userName']);
      $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
      $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
      $stationStart = mysqli_real_escape_string($conn, $_REQUEST['stationStart']);
      $stationEnd = mysqli_real_escape_string($conn, $_REQUEST['stationEnd']);
      $visitorClass = mysqli_real_escape_string($conn, $_REQUEST['visitorClass']);
      $seats = mysqli_real_escape_string($conn, $_REQUEST['seats']);
      $amount = mysqli_real_escape_string($conn, $_REQUEST['amount']);
      $checkInDate = mysqli_real_escape_string($conn, $_REQUEST['checkInDate']);
      $checkInTime = mysqli_real_escape_string($conn, $_REQUEST['checkInTime']);

      $sql = "INSERT INTO train (userName, email, phone, stationStart, stationEnd, visitorClass, seats, amount, checkInDate, checkInTime)
      VALUES ('$userName', '$email', '$phone', '$stationStart', '$stationEnd', '$visitorClass', '$seats', '$amount', '$checkInDate', '$checkInTime')";

if ($conn->query($sql) === TRUE) {
       
  echo "<h1>You Have Successfully Booked Your Ticket Thank You!</h1>";
  echo '<form method="post" action="">   
         
          <button type="submit" ref="#home">Home</button>
      </form>';
} else {
  echo "<h1>Something wend wrong! Please check your internet connection</h1>";
}

      $conn->close();
    ?>
  </body>
</html>