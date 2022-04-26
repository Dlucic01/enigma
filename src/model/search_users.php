<?php
include_once("../../resources/html/header.php");
$users = $_REQUEST['users'];

$sql = "SELECT * FROM user_profile WHERE username LIKE '%" . $users . "%'";

$stmt = new DBConn;

$db = $stmt->connect()->prepare($sql);
$db->bindParam(':friend_one', $s_username);
$db->bindParam(':friend_two', $s_username);
$db->execute();
$row_s = $db->fetchAll(PDO::FETCH_ASSOC);


?>
<table class="search_list">
    <?php
    foreach ($row_s as $user_s) {
        $username = $user_s['username'];
        $username_id = $user_s['id'];
    ?>

        <tr>

            <td style="display:flex;justify-content: center;">
                <i style="color:#fff; font-size:2em;" class="fa fa-user"></i>
            </td>
            <td>
                <?php
                echo "<span>  <a href='/enigma/public/user_profiles/" . $username . $username_id . ".php'>" . $username . "</a></span><br>";
                ?>

                <p>
            </td>
        </tr>




    <?php

    }
    ?>

</table>