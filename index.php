<!DOCTYPE html>
<html>

<head>
    <?php
    include_once('./includes/inc.php'); ?>
</head>

<body class="s-light-grey">
    <?php
    include_once('./includes/sidebar.php'); ?>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="s-overlay s-hide-large s-animate-opacity" onclick="s_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>
    <!-- !PAGE CONTENT! -->
    <div class="s-main" style="margin-left:300px;margin-top:43px;">
        <!-- Header -->
        <header class="s-container" style="padding-top:22px">
            <h5><b>Dashboard -</b></h5>
        </header>
        <div class="s-row-padding s-margin-bottom">
            <div class="s-quarter">
                <div class="s-container s-red s-padding-16">
                    <div class="s-left"><i class="fa fa-comment s-xxxlarge"></i></div>
                    <div class="s-right">
                        <h3>52</h3>
                    </div>
                    <div class="s-clear"></div>
                    <h4>Messages</h4>
                </div>
            </div>
            <div class="s-quarter">
                <div class="s-container s-blue s-padding-16">
                    <div class="s-left"><i class="fa fa-eye s-xxxlarge"></i></div>
                    <div class="s-right">
                        <h3>99</h3>
                    </div>
                    <div class="s-clear"></div>
                    <h4>Views</h4>
                </div>
            </div>
            <div class="s-quarter">
                <div class="s-container s-teal s-padding-16">
                    <div class="s-left"><i class="fa fa-share-alt s-xxxlarge"></i></div>
                    <div class="s-right">
                        <h3>23</h3>
                    </div>
                    <div class="s-clear"></div>
                    <h4>Shares</h4>
                </div>
            </div>
            <div class="s-quarter">
                <div class="s-container s-orange s-text-white s-padding-16">
                    <div class="s-left"><i class="fa fa-users s-xxxlarge"></i></div>
                    <div class="s-right">
                        <h3>50</h3>
                    </div>
                    <div class="s-clear"></div>
                    <h4>Users</h4>
                </div>
            </div>
        </div>
        <div class="s-panel">
            <div class="s-row-padding" style="margin:0 -16px">
                <div class="s-third s-border s-center">
                    <h5 class="s-left">Regions</h5>
                    <img src="./assets/204.png" style="width:100%" alt="Google Regional Map">
                    <span class="hg">
                        <span class="s-center">any slideshow can be given here</span>
                    </span>
                </div>
                <div class="s-twothird">
                    <h5>Feeds</h5>
                    <table class="s-table s-striped s-white">
                        <tr>
                            <td><i class="fa fa-user s-text-blue s-large"></i></td>
                            <td>New record, over 90 views.</td>
                            <td><i>10 mins</i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-bell s-text-red s-large"></i></td>
                            <td>Database error.</td>
                            <td><i>15 mins</i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-users s-text-yellow s-large"></i></td>
                            <td>New record, over 40 users.</td>
                            <td><i>17 mins</i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-comment s-text-red s-large"></i></td>
                            <td>New comments.</td>
                            <td><i>25 mins</i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-bookmark s-text-blue s-large"></i></td>
                            <td>Check transactions.</td>
                            <td><i>28 mins</i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-laptop s-text-red s-large"></i></td>
                            <td>CPU overload.</td>
                            <td><i>35 mins</i></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-share-alt s-text-green s-large"></i></td>
                            <td>New shares.</td>
                            <td><i>39 mins</i></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <hr>
        <div class="s-container">
            <h5>General Stats</h5>
            <p>New Visitors</p>
            <div class="s-grey">
                <div class="s-container s-center s-padding s-green" style="width:25%">+25%</div>
            </div>
            <p>New Users</p>
            <div class="s-grey">
                <div class="s-container s-center s-padding s-orange" style="width:50%">50%</div>
            </div>
            <p>Bounce Rate</p>
            <div class="s-grey">
                <div class="s-container s-center s-padding s-red" style="width:75%">75%</div>
            </div>
        </div>
        <hr>
        <div class="s-container">
            <h5>Countries</h5>
            <table class="s-table s-striped s-bordered s-border s-hoverable s-white">
                <tr>
                    <td>United States</td>
                    <td>65%</td>
                </tr>
                <tr>
                    <td>UK</td>
                    <td>15.7%</td>
                </tr>
                <tr>
                    <td>Russia</td>
                    <td>5.6%</td>
                </tr>
                <tr>
                    <td>Spain</td>
                    <td>2.1%</td>
                </tr>
                <tr>
                    <td>India</td>
                    <td>1.9%</td>
                </tr>
                <tr>
                    <td>France</td>
                    <td>1.5%</td>
                </tr>
            </table><br>
            <button class="s-button s-dark-grey">More Countries  <i class="fa fa-arrow-right"></i></button>
        </div>
        <hr>
        <div class="s-container">
            <h5>Recent Users</h5>
            <ul class="s-ul s-card-4 s-white">
                <li class="s-padding-16">
                    <img src="./assets/avat.png" class="s-left s-circle s-margin-right" style="width:35px">
                    <span class="s-xlarge">Mike</span><br>
                </li>
                <li class="s-padding-16">
                    <img src="./assets/avat.png" class="s-left s-circle s-margin-right" style="width:35px">
                    <span class="s-xlarge">Jill</span><br>
                </li>
                <li class="s-padding-16">
                    <img src="./assets/avat.png" class="s-left s-circle s-margin-right" style="width:35px">
                    <span class="s-xlarge">Jane</span><br>
                </li>
            </ul>
        </div>
        <hr>
        <div class="s-container">
            <h5>Recent Comments</h5>
            <div class="s-row">
                <div class="s-col m10 s-container">
                    <h4>John <span class="s-opacity s-medium">Sep 29, 2014, 9:12 PM</span></h4>
                    <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
                </div>
            </div>
            <div class="s-row">
                <!-- <div class="s-col m2 text-center">
                    <img class="s-circle" src="/simages/avatar1.png" style="width:96px;height:96px">
                </div> -->
                <div class="s-col m10 s-container">
                    <h4>Bo <span class="s-opacity s-medium">Sep 28, 2014, 10:15 PM</span></h4>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
                </div>
            </div>
        </div>
        <br>
        <div class="s-container s-dark-grey s-padding-32">
            <div class="s-row">
                <div class="s-container s-third">
                    <h5 class="s-bottombar s-border-green">Demographic</h5>
                    <p>Language</p>
                    <p>Country</p>
                    <p>City</p>
                </div>
                <div class="s-container s-third">
                    <h5 class="s-bottombar s-border-red">System</h5>
                    <p>Browser</p>
                    <p>OS</p>
                    <p>More</p>
                </div>
                <div class="s-container s-third">
                    <h5 class="s-bottombar s-border-orange">Target</h5>
                    <p>Users</p>
                    <p>Active</p>
                    <p>Geo</p>
                    <p>Interests</p>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include_once './includes/footer.php'; ?>
        <!-- End page content -->
    </div>
    <script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");
    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");
    // Toggle between showing and hiding the sidebar, and add overlay effect
    function s_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
        }
    }
    // Close the sidebar with the close button
    function s_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
    </script>
</body>

</html>