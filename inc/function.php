<?php
include ('inc/db.php');
    function get_menu() {
        global $conn;
        $sql = "SELECT * FROM menu";

        $result = mysqli_query($conn,$sql);
        $menu = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $menu;
    }
    //$menu=get_menu($conn);