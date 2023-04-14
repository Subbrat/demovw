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
    <div class="s-overlay s-hide-large s-animate-opacity" onclick="s_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
    <!-- !PAGE CONTENT! -->
    <div class="s-main" style="margin-left:300px;margin-top:43px;">
        <!-- Header -->
        <header class="s-container" style="padding-top:22px">
            <h5><b>Dashboard -</b></h5>
        </header>
        <div class="s-container">
            <a href="./inst2.php">add new instruments</a><br>
            <a href="./editaccs.php">add or remove batches</a><br>
        </div>
        <div class="s-center">
        </div>
        <div class="s-panel">
            <div class="s-row-padding" style="margin:0 -16px">
                <div class="s-third s-center">
                </div>
                <div class="s-twothird">
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