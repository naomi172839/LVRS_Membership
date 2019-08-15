<head>
    <title>Choose Member</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

<?php
include 'menu.php';
?>

<div style="margin-left:25%;padding:1px">

    <h1>Select a Member</h1>

    <form action="fetchMember.php" method="post">
        <select name="memberID">
            <?php

            $server="localhost";
            $username="root";
            $password="Wicked2013";
            $db="membership";

            $conn = new mysqli($server, $username, $password, $db);

            $sql = "SELECT memberID, lastName, firstName FROM members ORDER BY lastName";
            $result = $conn -> query($sql);

            while ($row = $result -> fetch_assoc()) {
                echo '<option value="' . $row['memberID'] . '">' . $row['lastName'] . ', ' . $row['firstName'] . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Fetch Data" name="submit">
    </form>

</div>


</body>