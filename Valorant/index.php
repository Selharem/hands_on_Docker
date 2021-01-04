<?php //database connection
$con = mysqli_connect("localhost","root","","soufiane_db");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM `valorants` WHERE 1";
$result = mysqli_query($con, $sql);
?>

<?php
  $Valorants = json_decode(file_get_contents('C:\wamp64\www\Valorant\data.json'),true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
    <title> Valorant </title>
</head>
<body>

<div class="container">
  <h2>Add a character APP2</h2>
  <form method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
      <label for="photo">Photo:</label>
      <input type="text" class="form-control" id="photo" name="photo">
    </div>
    <div class="form-group">
      <label for="characteristics">Characteristics:</label>
      <input type="text" class="form-control" id="characteristics" name="characteristics">
    </div>
    <button type="submit" class="btn btn-primary" name="submit-btn" >Add</button>
  </form>

  <?php
   if (isset($_POST["submit-btn"])) {
      $myObj = new \stdClass();
      $myObj->name = $_POST['name'];
      $myObj->photo = $_POST['photo'];
      $myObj->characteristics = $_POST['characteristics'];
      $myJSON = json_encode($myObj);
      array_push($Valorants, array("name" => $_POST['name'], "photo" =>  $_POST['photo'], "characteristics" =>  $_POST['characteristics']));
   }
  ?>

<?php //for ($row = 0; $row < sizeof($Valorants); $row++) {?>
<?php 
  
  while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="row">
      <div class="col-sm-6" style="width:20%">
        <img class="card-img-top" src="<?php echo $row["photo"] ?>" alt="Card image" style="width:100px">
        <div class="card">
          <div class="card-block">
            <div class="card-body">
              <h4 class="card-title"><?php echo $row["name"] ?></h4>
              <p class="card-text"><?php echo $row["characteristics"] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php }?>

</div>
</body>
</html>