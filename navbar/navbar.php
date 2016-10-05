<?php require_once "../bootstrap.php" ;?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand site-logo" href="/fashion-gate/home/">Fashion-gate</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-home"><a href="/fashion-gate/home/">Home</a></li>
                <li class="nav-accessories"><a  href="/fashion-gate/accessories/">Accessories</a></li>
                <li class="nav-wedding-accessories"><a  href="/fashion-gate/wedding accessories/">Wedding Accessories</a></li>
                <li class="nav-decoration"><a  href="/fashion-gate/decoration/">Decoration</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form action="../search/"class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="search" name="search" class="search-input form-control" placeholder="Search">
                            <button type="submit" class="btn btn-default search-button"><span class="glyphicon glyphicon-eye-open search-button"></span></button>
                        </div>
                        
                    </form>
                </li>
                <li>
                    <?php
                    if($check)
                    echo "<a href='/fashion-gate/bootstrap.php?request=logout&page=$_SERVER[SCRIPT_NAME]'>" ;
                        else echo "<a href='/fashion-gate/bootstrap.php?request=login&page=$_SERVER[SCRIPT_NAME]'>" ;
                            ?>
                            <span class="glyphicon glyphicon-log-out"></span>
                            <?php
                            if($check)
                            echo 'logout';
                            else
                            echo 'login';
                            ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>