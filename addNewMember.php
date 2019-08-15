<?php
include 'menu.php';
?>

<head>
    <title>Add New Member</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

<div class="flex-container" style="margin-left:25%;padding:1px">

    <form action="addMem.php" method="post">

        <fieldset id="Name" class="name">
            <legend>Name</legend>
            <label>
                Last Name:<input type="text" name="lastName" placeholder="Last Name">
            </label><br>
            <label>
                First Name:<input type="text" name="firstName" placeholder="First Name">
            </label><br>
            <label>
                Middle Name:<input type="text" name="middleName" placeholder="Middle Name">
            </label><br>
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Add New Member">

    </form>

</div>

</body>