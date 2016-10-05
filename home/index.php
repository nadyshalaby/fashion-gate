<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"/>

<html>
<?php require '../bootstrap.php'; ?>

    <head>
        <title>
            Fashion-gate | Home
        </title>
        <link rel="stylesheet" href="../public/bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="home.css" />
        <link type="text/css" rel="stylesheet" href="../navbar/navbar.css" />
        <link type="text/css" rel="stylesheet" href="../footer/footer.css" />
        <link rel="stylesheet" href="../public/css/font-awesome.min.css">
        <link rel="shortcut icon" href="../public/pics/fashion-gate-logo.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <div class="container-fluid">
            <?php include '../navbar/navbar.php';?>
                <div class="header container-fluid row">
                    <div class="logo-img row">
                        <img src="../public/pics/fashion-gate-logo.png" />
                    </div>
                    <div class="logo-desc row">
                        <h1><span>Fashion</span><span>-gate</span> <span>Home</span> <span>Of</span> <span>Fashion</span></h1>
                    </div>
                    <div class="row">
                        <a href="/fashion-gate/login/" class="btn btn-info btn-lg">Sign up for free</a>
                    </div>
                    <div class="row">
                        <a href="#top-sailed" data-toggle="tooltip" title="scroll to the top sailed items list" class="circle-arrow" onclick="false">
                            <img src="../public/pics/arrow-3d-animated-down-2.gif" />
                        </a>
                    </div>
                </div>
                
                <?php include '../controller/accessories.php';?>
                <?php include '../controller/decoration.php';?>
                <?php include '../controller/wedding accessories.php';?>
                <?php include '../footer/footer.php';?>
                   
        </div>
        <script src="../public/JQuery/jquery.min.js"></script>
        <script src="../public/bootstrap/js/bootstrap.min.js"></script>
        <script src="home.js"></script>
        <script src="../navbar/navbar.js"></script>
        <script src="../footer/footer.js"></script>
    </body>

</html>