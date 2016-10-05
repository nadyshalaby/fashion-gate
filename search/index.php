<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"/>
<html>
<?php
require '../controller/search.php';
?>
<head>
<title>
Fashion-gate | Search
</title>
<link rel="stylesheet" href="../public/bootstrap/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="search.css" />
<link rel="stylesheet" href="../public/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="../navbar/navbar.css" />
<link type="text/css" rel="stylesheet" href="../footer/footer.css" />
<link rel="shortcut icon" href="../public/pics/fashion-gate-logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container-fluid">
    <?php include '../navbar/navbar.php';
    echo "
    <div class='header container-fluid row'>
    </div>
            ";
    if($search_check){
        foreach ($tables as $table => $url) {
            echo "
    <div id='top-sailed' class='top-sailed row container-fluid'>
                <div class='top-sailed-label'>
                                <h1 class='label label-success'> <a href='$url' class='search-page'>$table Search Results</a></h1>
                </div>
                <div class='product-silder'>
                            <div class='row product-slides container-fluid'>
                                ";
                
            $result         = $results[$table];
            if(empty($result)){
                    echo
                    "<div class='row alert alert-warning'>
                        <h2>No Search Results for \" $search \"</h2>
                    </div>";
            }else{
            foreach ($result as $key => $value) {
        
                $filename       = $value['item_name'];
                $filepath       = $value['image_path'];
                $price          = $value['price'];
                $discount       = $value['discount'];
                $description    = $value['description'];
                echo"
                                <div class='col-sm-4 col-md-3 product-slide'>
                                    <div class='thumbnail product-item'>
                                    <img src='$filepath'  alt='Product: $filename ' data-holder-rendered='true' style='height: 200px; width: 100%; display: block;'>
                                        <div class='caption'>
                                            <h3>Image: $filename</h3>
                                            <p><small>$description</small></p>
                                            <p>
                                                <span class='product-price' >Price:</span> $price pound <br>
                                                <span class='product-discount' >Discount:</span> $discount %
                                            </p>
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
    
        }

    }
    elseif(!empty($error)){
        echo
        "<div class='row alert alert-danger'>
            <h2> $error</h2>
        </div>";
    }
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