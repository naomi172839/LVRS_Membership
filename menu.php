<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 25%;
            background-color: plum;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: orchid;
            color: white;
        }
    </style>
</head>
<body>

<ul>
    <li><a href="addNewMember.php">Add Member</a></li>
    <li><a href="addMemberDetails.php">Add Member Details</a></li>
    <li><a href="chooseMember.php"">Choose Member</a></li>
</ul>
