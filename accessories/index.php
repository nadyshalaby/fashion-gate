<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"/>
<html>
    <?php require_once '../bootstrap.php'; ?>
    <head>
        <title>
        Fashion-gate | Accessories
        </title>
        <link rel="stylesheet" href="../public/bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="accessories.css" />
        <link rel="stylesheet" href="../public/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="../navbar/navbar.css" />
        <link type="text/css" rel="stylesheet" href="../footer/footer.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="container-fluid">
            <?php include '../navbar/navbar.php' ;?>
            <?php
            @ include '../rooting.php';
            $abs_path = URL."\\public\\pics\\accessories\\";
            $rel_path = "../public/pics/accessories/";
            $dir = new DirectoryIterator($abs_path);
            echo"
            <div class='header container-fluid row'>
                <div class='logo-desc row'>
                    <h1>Accessories</h1>
                </div>
            </div>
            <div id='top-sailed' class='top-sailed row container-fluid'>
                <div class='top-sailed-label'>
                    <h1 class='label label-success'> Accessories Products List</h1>
                </div>
                <div class='product-silder'>
                    <div class='row product-slides container-fluid'>
                        ";
                        $db = new Database($_host , $_database , $_username , $_password);
                        foreach ($dir as $fileinfo) {
                        $filename = $fileinfo->getFilename();
                        if($filename === "." || $filename === ".." || $filename === "Thumbs.db"){
                        continue;
                        }else{
                        $filepath =  $rel_path.$filename;
                        echo "
                        <div class='col-sm-4 col-md-3 product-slide'>
                            <div class='thumbnail product-item'>
                                <img src='$filepath'  alt='Product: $filename ' data-holder-rendered='true' style='height: 200px; width: 100%; display: block;'>
                                <div class='caption'>
                                    <h3>Image: $filename</h3>
                                    <p><span class='product-price' >price:</span>105 pound <br> </p>
                                    <p><a href='#' data-toggle='tooltip' title='Buy \" $filename \" now ' class='btn btn-primary' role='button'>Buy</a></p>
                                </div>
                            </div>
                        </div>
                        ";
                        }
                        }
                        echo"
                    </div>
                </div>
            </div>
            ";
            ?>
            <?php include '../footer/footer.php';?>
        </div>
        <script src="../public/JQuery/jquery.min.js"></script>
        <script src="../public/bootstrap/js/bootstrap.min.js"></script>
        <script src="accessories.js"></script>
        <script src="../navbar/navbar.js"></script>
        <script src="../footer/footer.js"></script>
    </body>
</html>