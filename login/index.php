
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"/>

<html>
<?php require_once '../controller/login.php'; ?>
<head>
    <title>
        php learning | learn to code
    </title>
    <link type="text/css" rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../public/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../footer/footer.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
  <div class="container-fluid">
    <div class="row alert alert-info">
    <div class="col-md-6">
        <h1>Login Section</h1>
        <form action="index.php" class="form-group" method="POST" enctype="application/x-www-form-urlencoded">
            <table class="table">
                <tr>
                    <td>
                        <input type="text" class="form-control"  name="logUserName" placeholder="Enter your user name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" class="form-control"  name="logPassword" placeholder="Enter your Password" />
                    </td>
                </tr>
                <tr>
                    <td  >
                        <input type="checkbox" id="remMe"  name="remMe" value="true"/>
                        <label for="remMe">Remmber Me !!!</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success btn-lg btn-block " name="login" >Login </button>
                    </td>
                </tr>

            </table>
        </form>
    </div>
    <div class="col-md-6">
        <h1>Registeration Section</h1>
        <form action="index.php" class="form-group" method="POST" enctype="application/x-www-form-urlencoded">
            <table class="table">
                <tr>
                    <td>
                        <input type="text" class="form-control" name="regFullName" placeholder="Enter your full name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" class="form-control"  name="regEmail" placeholder="Enter your email" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control"  name="regUserName" placeholder="Enter your user name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" class="form-control"  name="regPassword" placeholder="Enter your Password" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" class="form-control"  name="regConfirmPassword" placeholder="Re-enter your Password" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary btn-lg btn-block " name="register" >Register </button>
                    </td>
                </tr>
            </table>
        </form>
      </div>
    </div>
    <?php include '../footer/footer.php';?>
  </div>
  <script src="../public/JQuery/jquery.min.js"></script>
  <script src="../public/bootstrap/js/bootstrap.min.js"></script>
  <script src="home.js"></script>
  <script src="../footer/footer.js"></script>
</body>

</html>
