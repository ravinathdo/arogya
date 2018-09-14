<?php
if(isset($_GET['flag'])){
    $_SESSION['menu_flag'] = $_GET['flag'];
//    echo $_GET['flag'];
}
?>
<div class="header-bottom ">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo grid">
                            <div class="grid__item color-3">
                                <h1><a class="link link--nukun" href="index.php"><i></i>AR<span>O</span>GYA</a></h1>
                            </div>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav class="menu menu--horatio">
                            <ul class="nav navbar-nav menu__list">
                                
                        <li class="menu__item <?php if($_SESSION['menu_flag'] == 'home'){ echo 'menu__item--current'; } ?> "><a href="home.php?flag=home" class="menu__link">Home</a></li>

                        <li class="menu__item <?php if($_SESSION['menu_flag'] == 'about'){ echo 'menu__item--current'; } ?> "><a href="about.php?flag=about" class="menu__link">About</a></li> 
                        <li class="menu__item <?php if($_SESSION['menu_flag'] == 'gallery'){ echo 'menu__item--current'; } ?> "><a href="gallery.php?flag=gallery" class="menu__link">Gallery</a></li> 
                        <li class="menu__item <?php if($_SESSION['menu_flag'] == 'contact'){ echo 'menu__item--current'; } ?>"><a href="contact.php?flag=contact" class="menu__link">Contact</a></li>
                        
                            </ul>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>