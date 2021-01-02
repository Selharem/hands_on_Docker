<?php
$my_array = array("Breach","Brimstone","Cypher");
$Valorants = array (
  array("Breach","Breach.png","go through terrain"),
  array("Brimstone","Brimstone.png","call down smoke grenades"),
  array("Cypher","Cypher.png","uses spy gadgets"),
  
);
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

</body>
</html>