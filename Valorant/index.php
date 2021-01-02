<?php
$my_array = array("Breach","Brimstone","Cypher");
/*$Valorants = array (
  array("Breach","Breach.png","go through terrain"),
  array("Brimstone","Brimstone.png","call down smoke grenades"),
  array("Cypher","Cypher.png","uses spy gadgets"),
  
);*/
$Valorants = json_decode(file_get_contents('C:\wamp64\www\Valorant\data.json'),true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
    <title>Valorant</title>
</head>
<body>

<?php for ($row = 0; $row < 3; $row++) {?>
    <div class="row">
      <div class="col-sm-6" style="width:20%">
        <img class="card-img-top" src="<?php echo $Valorants[$row]["photo"] ?>" alt="Card image" style="width:100px">
        <div class="card">
          <div class="card-block">
            <div class="card-body">
              <h4 class="card-title"><?php echo $Valorants[$row]["name"] ?></h4>
              <p class="card-text"><?php echo $Valorants[$row]["characteristics"] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php }?>



<div class="container">
  <h2>Add a character</h2>
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
      $myObj->name = $_POST['name'];
      $myObj->photo = $_POST['photo'];
      $myObj->characteristics = $_POST['characteristics'];
      $myJSON = json_encode($myObj);
      echo $myJSON;
      file_put_contents($Valorants, $myJSON);
   }
  ?>


</div>
</body>
</html>