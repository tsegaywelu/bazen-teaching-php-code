<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="register.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    
    <div class="head">
      <img src="11.PNG" alt="logo image" width="50px" height="50px" />
      <div>Home</div>
      <div>About us</div>
      <div>Contact us</div>
      <div>Gallery</div>
      <div>Chat with us</div>
      <div>Our service</div>
      <div>news</div>
      <select name="" id="">
        <option value="English">English</option>
        <option value="Tigrigna">Tigrigna</option>
        <option value="amharic">amharic</option>
      </select>
    </div>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Login Form</h1>
          </div>
          <div class="panel-body">
            <form action="login.php" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>

              <input type="submit" class="btn btn-primary" />

            </form>

            <?php
            if (isset($_GET['msg'])) {
                echo "<p style='color:red;'>" . htmlspecialchars($_GET['msg']) . "</p>";
            }
            ?>


          </div>
        </div>
      </div>
    </div>
  </body>
</html>
