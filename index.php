<!DOCTYPE html>
<html>
  <head>
    <title>Search Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
      <nav class="bg-primary" style="height: 80px;">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:white;font-size:30px;font-style:bold; margin: 20px;"><i class="fa fa-car"></i> | <i class="fa fa-motorcycle"></i> RidoBiko</a>
    </div>
     
  </div>
</nav>
      <div class="container" style="margin-top:100px;">
          <div class="row col-md-6 col-md-offset-4" style="width:400px;">
        <div class="panel panel-info">
          <div class="panel-heading text-center">
            <h1>Search</h1>
          </div>
          <div class="panel-body">
              <form action="product.php" method="post" >
                               
              <div class="form-group">
                  <select name="city" class="form-control" id="car" required>
                        <option>Select City</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Hyderabad">Hyderabad</option>
                    </select> 
                 
              </div>
              <div class="form-group">
                  <select class="form-control" name="type" id="ty" required>
                        <option>Select Type</option>
                            <option value="Bike">Bike</option>
                        <option value="Car">Car</option>
                    </select>
                    <br>
              </div>
                <div class="form-group">
                    <center>
                        <input type="submit" class="btn btn-primary" value="Search" style="width:120px;"/>
                    </center>
                </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </body>
</html>