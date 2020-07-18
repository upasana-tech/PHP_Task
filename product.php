
<?php   
$city = filter_input(INPUT_POST, 'city');
/** @var type $type */
$type = filter_input(INPUT_POST, 'type');

 //make connection
 $conn = new mysqli('localhost','root','','sample data');
 //select db
 if($conn->connect_error)
 {
     die("Connection failed: " . $conn->connect_error);
 }
 
 $sql="SELECT * FROM dbtable where City = '$city' and Type = '$type'";
 $result= $conn->query($sql);
 
 if(filter_input(INPUT_GET, 'filter')!== null)
 {
     $vtype= mysql_real_escape_string(filter_input(INPUT_GET, 'vehicle'));
             $sql .= "and Vehicle_type='$vtype'";
             $result= $conn->query($sql);
 }
 
 ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav class="bg-primary" style="height: 80px;">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:white;font-size:30px;font-style:bold; margin: 20px;"><i class="fa fa-car"></i> | <i class="fa fa-motorcycle"></i> RidoBiko</a>
        
    </div>
      <div>
          <form action="index.php">
              <button class="btn btn-default navbar-btn"style="margin:20px;">Home</button>
              
          </form>
      </div>
               
      <div class="navbar-form navbar-right">
          <form class="filter" method="GET" action="product.php">
          <div class="input-group" style="margin:20px;margin-left: 800px;">
        <div class="form-group">
                  <select name="vehicle" class="form-control">
                        <option>Select Vehicle</option>
                        <option value="Activa">Activa</option>
                        <option value="Hyderabad">FZ</option>
                        <option value="Hyderabad">Pulsar</option>
                        <option value="Hyderabad">Wagon R</option>
                        <option value="Hyderabad">Swift</option>
                    </select> 
              </div>
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
      </div>   
  </div>
</nav>
        <br/>
        <br/>
        
         <?php
        if($result->num_rows > 0)
        {
        while($dbtable=mysqli_fetch_assoc($result))
            {
            ?>
        
        <div class="box" style="margin-right:300px; margin-left: 50px;">
            <table>
                <tr>
                    <td>
                        <table>
                             <tr>
                    <td>
      <div class="card">
        <div class="imgBx">
            <img src="<?php echo $dbtable['Image Location'];?>" alt="images">
        </div>
        <div class="details">
             <?php
                echo "<b>City:</b>"." ".$dbtable['City']."<br>";
                echo "<b>Type:</b>"." ".$dbtable['Type']."<br>";
                echo "<b>Bike Name:</b>".$dbtable['Bike name']."<br>";
                echo "<b>Rent/Day:</b>"." ".$dbtable['Rent/Day']."<br>";
                echo "<b>Deposit:</b>"." ".$dbtable['Deposit']."<br>";
                echo "<b>Vehicle Type:</b>"." ".$dbtable['Vehicle_type']."<br>";
              ?>
        </div>
      </div>
                        </td>
                </tr>
            </table>
                        </td>
                </tr>
            </table>
                    <?php
                
            } //end while
            
        }
        $conn->close();
        ?>
     </div>
                   
                
        
            
                
          
    </body>
</html>
