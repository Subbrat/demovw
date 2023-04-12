<?php
include_once('./includes/inc.php'); ?>
<div class="s-bar s-top s-black s-large" style="z-index:4">
    <button class="s-bar-item s-button s-hide-large s-hover-none s-hover-text-light-grey" onclick="s_open();"><i
            class="fa fa-bars"></i> CLMS </button>
    <span class="s-bar-item s-right">$ signout</span>
</div>
<nav class="s-sidebar s-collapse s-white s-animate-left s-border" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="s-container s-row s-border">
        <!-- <div class="s-col s4 s-border">
                <img src="./assets/204.png" id="toplg" class="s-border s-center s-margin-right" style="width:85px">
            </div> -->
        <div class="s-col s-bar s-border">
            <span>Welcome, <strong>$session_user</strong></span><br>
            <span>$dept of p/c/m/b/e</span><br>
            <span>$student/ faculty</span><br>
            <a href="#" class="s-bar-item s-button"><i class="fa fa-envelope"></i></a>
            <a href="#" class="s-bar-item s-button"><i class="fa fa-user"></i><a>
                    <a href="#" class="s-bar-item s-button"><i class="fa fa-cog"></i></a>
        </div>
    </div>
    <hr>
    <div class="s-container">
        <h5 class=""> <strong>Navigation</strong></h5>
    </div>
    <div class="s-bar-block">
        <a href="#" class="s-bar-item s-button s-padding-16 s-hide-large s-dark-grey s-hover-black" onclick="s_close()"
            title="close menu"><i class="fa fa-remove fa-fw"></i>Close Menu</a>
        <a href="#" class="s-bar-item s-button s-padding s-blue">Dashboard</a>
        <a href="#" class="s-bar-item s-button s-padding">Reservations</a>
        <a href="#" class="s-bar-item s-button s-padding">Payment and Dues</a>
        <a href="#" class="s-bar-item s-button s-padding">Past reservations</a>
        <a href="#" class="s-bar-item s-button s-padding">Instrument Catalogue</a>
        <a href="#" class="s-bar-item s-button s-padding">Test reports</a>
        <a href="#" class="s-bar-item s-button s-padding">FAQs</a>
    </div>
</nav>
<nav class="s-sidebar s-collapse s-white s-animate-left s-border" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="s-container s-row s-border">
        <!-- <div class="s-col s4 s-border">
                <img src="./assets/204.png" id="toplg" class="s-border s-center s-margin-right" style="width:85px">
            </div> -->
        <div class="s-col s-bar s-border">
            <span>Welcome, <strong>$session_user</strong></span><br>
            <span>$dept of p/c/m/b/e</span><br>
            <span>$student/ faculty</span><br>
            <a href="#" class="s-bar-item s-button"><i class="fa fa-envelope"></i></a>
            <a href="#" class="s-bar-item s-button"><i class="fa fa-user"></i><a>
                    <a href="#" class="s-bar-item s-button"><i class="fa fa-cog"></i></a>
        </div>
    </div>
    <hr>
    <div class="s-container">
        <h5 class=""> <strong>Navigation</strong></h5>
    </div>
    <div class="s-bar-block">
        <a href="#" class="s-bar-item s-button s-padding-16 s-hide-large s-dark-grey s-hover-black" onclick="s_close()"
            title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
        <a href="#" class="s-bar-item s-button s-padding s-blue">Dashboard</a>
        <a href="#" class="s-bar-item s-button s-padding">Reservations</a>
        <a href="#" class="s-bar-item s-button s-padding">Payment and Dues</a>
        <a href="#" class="s-bar-item s-button s-padding">Past reservations</a>
        <a href="#" class="s-bar-item s-button s-padding">Instrument Catalogue</a>
        <a href="#" class="s-bar-item s-button s-padding">Test reports</a>
        <a href="#" class="s-bar-item s-button s-padding">FAQs</a>
</nav>