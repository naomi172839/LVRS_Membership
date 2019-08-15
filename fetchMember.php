<?php
include 'getMember.php';

$current = new getMember($_POST['memberID']);
$data = $current->memberData();

?>

<head>
    <title>
        <?php
        echo $data['lastName'] . ", " . $data['firstName'];

        ?>
    </title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

<div style="margin-left=25%;padding=1px">

    <div class="Demographics">

        <h1>Demographics</h1>
        <p>
            Full Name:
            <?php
            echo " " . $data['firstName'] . " " . $data['middleName'] . " " . $data['lastName'];
            ?>
        </p>
        <p>
            Birthday:
            <?php
            echo " " . $data['birthDate'];
            ?>
        </p>

    </div>

    <div class="Contact Information">

        <h1>Contact Information</h1>
        <p>
            Phone Number:
            <?php
            echo " " . $data['phoneNumber'];
            ?>
        </p>
        <p>
            Email Address:
            <?php
            echo " " . $data['emailAddress'];
            ?>
        </p>
        <p>
            Street Address:
            <?php
            echo " " . $data['addressStreet'] . " " . $data['addressCity'] . ", " .
                $data['addressState'] . " " . $data['addressZip'];
            ?>
        </p>

    </div>

    <div class="Ride Along's">

        <h1>Ride Along's</h1>
        <p>
            Date Jot Form Received:
            <?php
            echo " " . $data['jotFormReceived'];
            ?>
        </p>
        <p>
            Date Ride Along's Finished:
            <?php
            echo " " . $data['rideAlongFinished'];
            ?>
        </p>
        <p>
            Date Interview Set Up:
            <?php
            echo " " . $data['contactDate'];
            ?>
        </p>
        <p>
            Date Interview Scheduled:
            <?php
            echo " " . $data['interviewScheduled'];
            ?>
        </p>

    </div>

    <div class="Join Date's">

        <h1>Join Dates</h1>
        <p>
            Initial Join Date:
            <?php
            echo " " . $data['initialJoinDate'];
            ?>
        </p>
        <p>
            Initial Join Status:
            <?php
            echo " " . $data['initialStatusType'];
            ?>
        </p>
        <p>
            Final Join Date:
            <?php
            echo " " . $data['finalJoinDate'];
            ?>
        </p>
        <p>
            Final Join Status:
            <?php
            echo " " . $data['finalStatusType'];
            ?>
        </p>

    </div>

    <div class="County Number">

        <h1>County Number</h1>
        <p>
            Date County Number Received:
            <?php
            echo " " . $data['dateCountyNumberReceived']
            ?>
        </p>
        <p>
            County Number:
            <?php
            echo " " . $data['counNum'];
            ?>
        </p>

    </div>

    <div class="Appointments">

        <h1>Appointments</h1>
        <p>
            Fingerprint Appointment Date:
            <?php
            echo " " . $data['fingerprintAppointmentDate'];
            ?>
        </p>
        <p>
            Physical Appointment Date:
            <?php
            echo " " . $data['physicalScheduleDate'];
            ?>
        </p>
        <p>
            Physical Passed:
            <?php
            if ($data['passPhysical'] == 1) {
                echo " Yes";
            } elseif ($data['passPhysical'] == 0) {
                echo " No";
            } else {
                echo " Unknown";
            }
            ?>
        </p>
        <p>
            VRS Completion Date:
            <?php
            echo " " . $data['dateVrsCompleted'];
            ?>
        </p>

    </div>

    <div class="Background">

        <h1>Background</h1>
        <p>
            Date Background Check Received:
            <?php
            echo " " . $data['dateBackgroundPassed']
            ?>
        </p>
        <p>
            Background Passed:
            <?php
            if ($data['backgroundSuccess'] == 1) {
                echo " Yes";
            } elseif ($data['backgroundSuccess'] == 0) {
                echo " No";
            } else {
                echo " Unknown";
            }
            ?>
        </p>

    </div>

    <div class="Application Status">

        <h1>Application Status</h1>
        <p>
            Application Status:
            <?php
            echo " " . $data['applicationStatusType'];
            ?>
        </p>
        <p>
            Application Notes:
            <?php
            echo " " . $data['appStatNotes'];
            ?>
        </p>

    </div>

    <div class="Duty Start Date">

        <h1>Duty Start Date</h1>
        <p>
            Duty Start Date:
            <?php
            echo " " . $data['dutyStart'];
            ?>
        </p>

    </div>

    <div class="Probation Extension">

        <h1>Probation Extension</h1>
        <p>
            Probation Extension Start Date:
            <?php
            echo " " . $data['probationExtensionStartDate'];
            ?>
        </p>
        <p>
            Probation Extension End Date:
            <?php
            echo " " . $data['probationExtensionEndDate'];
            ?>
        </p>
        <p>
            Probation Extension Notes:
            <?php
            echo " " . $data['probationExtensionNotes'];
            ?>
        </p>
    </div>

    <div class="Status Change">

        <h1>Status Change</h1>
        <p>
            Status Change Date:
            <?php
            echo " " . $data['statusChangeDate'];
            ?>
        </p>
        <p>
            Status Change Type:
            <?php
            echo " " . $data['statChangeID'];
            ?>
        </p>
    </div>
</div>

</body>

