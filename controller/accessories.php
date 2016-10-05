<?php
@ include '../rooting.php';
$abs_path = URL."\\public\\pics\\accessories\\";
$rel_path = "../public/pics/accessories/";
$link = "../accessories/";
$dir = new DirectoryIterator($abs_path);
$files = glob($rel_path . "*");
$filecount = 0;
if ($files){
 $filecount = count($files);
}
$filecount = ((int)($filecount/ 4) <= 3)? (int)($filecount/4) : 3 ;
echo"
<div id='top-sailed' class='top-sailed row container-fluid'>
    <div class='top-sailed-label'>
        <h1 class='label label-success'>Top Sailed Accessories<button link='$link' class='btn btn-default load-more'>load more</button></h1>
    </div>
    <div class='product-silder'>
        <div count='$filecount' class='row product-slides container-fluid'>
";
 foreach ($dir as $fileinfo) {
     $filename = $fileinfo->getFilename();
     if($filename === "." || $filename === ".." || $filename === "Thumbs.db"){
         continue;
     }else{
          $filepath =  $rel_path.$filename;
          echo "
                                <div class='col-sm-4 col-md-3 product-slide'>
                                    <div class='thumbnail product-item'>
                                        <img src='$filepath' data-src='holder.js/100%x200' alt='100%x200' data-holder-rendered='true' style='height: 200px; width: 100%; display: block;'>
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