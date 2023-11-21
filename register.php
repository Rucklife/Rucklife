<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width , initial-scale=1.0" />
  <title>Databank Inventory</title>
  <link rel="stylesheet" href="index.css" />
</head>

<body>
  <div class="wrapper">
    <h4>Databank Inventory Management</h4>
    <h1>Sign Up</h1>
    <form action="connection.php" method="post">
      <input type="text" name="name" class="form-control" placeholder="Name" />
      <input type="email" name="email" class="form-control" placeholder="Email" />
      <input type="password" placeholder="Password" name="password" />
      <input type="password" placeholder="Re-Enter Password" name="password2" />
      <div class="terms">
        <label>
          <input type="checkbox" name="terms" />
          <a href="https://www.databank.com/terms-of-use/">Terms & Conditions</a>
        </label>
      </div>
      <button>Register Account</button>
      <button class="back" type="button" value="Dashboard" onclick="history.back()">
        Return to Dashboard
      </button>
    </form>
  </div>
</body>

</html>