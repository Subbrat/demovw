<!DOCTYPE html>
<html>

<head>
    <?php
    include_once('./includes/inc.php'); ?>
    <style>
    .calendar-container {
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        overflow: hidden;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    .calendar-header {
        background-color: #eee;
        padding: 6px 10px;
    }

    .calendar-title {
        font-weight: bold;
        text-align: center;
    }

    .calendar {
        width: 100%;
        border-collapse: collapse;
    }

    .day-header {
        padding: 4px;
        text-align: center;
    }

    .day {
        padding: 10px;
        text-align: center;
        cursor: pointer;
    }

    .day:hover {
        background-color: #eee;
    }

    .day.disabled {
        color: #ccc;
    }
    </style>
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
            <select name="options">
                <option value="" selected disabled>Select an instrument</option>
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
            </select>



        </header>
        <div class="s-center">

            <div class="calendar-container s-center">
                <div class="calendar-header">
                    <div class="calendar-title">April 2023</div>
                </div>
                <table class="calendar">
                    <thead>
                        <tr>
                            <th class="day-header">Sun</th>
                            <th class="day-header">Mon</th>
                            <th class="day-header">Tue</th>
                            <th class="day-header">Wed</th>
                            <th class="day-header">Thu</th>
                            <th class="day-header">Fri</th>
                            <th class="day-header">Sat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="day disabled"></td>
                            <td class="day disabled"></td>
                            <td class="day">1</td>
                            <td class="day">2</td>
                            <td class="day">3</td>
                            <td class="day">4</td>
                            <td class="day">5</td>
                        </tr>
                        <tr>
                            <td class="day">6</td>
                            <td class="day">7</td>
                            <td class="day">8</td>
                            <td class="day">9</td>
                            <td class="day">10</td>
                            <td class="day">11</td>
                            <td class="day">12</td>
                        </tr>
                        <tr>
                            <td class="day">13</td>
                            <td class="day">14</td>
                            <td class="day">15</td>
                            <td class="day">16</td>
                            <td class="day">17</td>
                            <td class="day">18</td>
                            <td class="day">19</td>
                        </tr>
                        <tr>
                            <td class="day">20</td>
                            <td class="day">21</td>
                            <td class="day">22</td>
                            <td class="day">23</td>
                            <td class="day">24</td>
                            <td class="day">25</td>
                            <td class="day">26</td>
                        </tr>
                        <tr>
                            <td class="day">27</td>
                            <td class="day">28</td>
                            <td class="day">29</td>
                            <td class="day">30</td>
                            <td class="day disabled"></td>
                            <td class="day disabled"></td>
                            <td class="day disabled"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- <div class="s-row-padding s-margin-bottom">
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
        </div> -->
        <div class="s-panel">
            <div class="s-row-padding" style="margin:0 -16px">
                <div class="s-third s-border s-center">
                    <h5 class="s-left">Recent additions</h5>
                    <img src="./assets/204.png" style="width:100%" alt="Google Regional Map">
                    <span class="hg">
                        <span class="s-center">any slideshow can be given here</span>
                    </span>
                </div>
                <div class="s-twothird">
                    <h5>Notifications</h5>
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

        <br>

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