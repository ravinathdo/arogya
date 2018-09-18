  <div class="header wow zoomIn">
            <div class="container">
                <div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
                    <ul>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+11 558 558</li>
                        <li><a href="mailto:info@arogya.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@arogya.com</a></li>
                    </ul>
                </div>
                <div class="header_right">
                    <div class="login">
                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Login</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Signup</a></li>
                            <li>
                                <div class="search-bar">
                                    <div class="search">		
                                        <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
                                    </div>
                                    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                                    <div id="small-dialog" class="mfp-hide">
                                        <div class="search-top">
                                            <div class="login_pop">
                                                <form action="#" method="post">
                                                    <input type="submit" value="">
                                                    <input type="text" name="Type something..." value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                this.value = '';
                                                            }">
                                                </form>
                                            </div>				
                                        </div>
                                        <script>

                                            $(document).ready(function () {
                                                $('.popup-with-zoom-anim').magnificPopup({
                                                    type: 'inline',
                                                    fixedContentPos: false,
                                                    fixedBgPos: true,
                                                    overflowY: 'auto',
                                                    closeBtnInside: true,
                                                    preloader: false,
                                                    midClick: true,
                                                    removalDelay: 300,
                                                    mainClass: 'my-mfp-zoom-in'
                                                });

                                            });
                                        </script>				
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>


  <?php
         if (isset($_POST['btnLogin'])) {
                $sql = "SELECT * FROM hms_patient WHERE email = '" . $_POST['email'] . "' AND pword = PASSWORD('" . $_POST['pword'] . "') AND status_code = 'ACTIVE'";
                $data = getData($sql);
                if ($data) {
                    foreach ($data as $value) {
                        $_SESSION['userbean'] = $value;
                        
                           date_default_timezone_set('Asia/Colombo');
                                $today = date("Y-m-d", time());
                                $_SESSION['today'] = $today;
                        ?>
                        <script>
                            window.location.replace("home.php");
                        </script> 
                        <?php
                    }
                } else {
                    ?> <p class="bg-danger msg-error">Invalid username or password</p> <?php
                }
            }



            if (isset($_POST['btnRegister'])) {

                $sql = "INSERT INTO `hms_patient`
            (`first_name`,
             `last_name`,
             `telephone`,
             `dob`,
             `email`,
             `pword`)
VALUES ('" . $_POST['first_name'] . "',
        '" . $_POST['last_name'] . "',
        '" . $_POST['telephone'] . "',
        '" . $_POST['dob'] . "',
        '" . $_POST['email'] . "',
        PASSWORD('" . $_POST['pword'] . "'));";
                $msgArray = array('msgsuccess' => 'New Patient Created Successfuly', 'msgerror' => 'Invalid or duplicate entry input');
                setData($sql, $msgArray);
            }
            ?>
               