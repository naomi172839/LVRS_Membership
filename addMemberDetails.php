<?php
$server = "localhost";
$username = "root";
$password = "Wicked2013";
$db = "membership";

$conn = new mysqli($server, $username, $password, $db);

include 'menu.php';
?>

<head>
    <title>Add New Member</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

<div class="flex-container" style="margin-left:25%;padding:1px">

    <form action="submitMemberDetails.php" method="post">

        <fieldset id="Name" class="name">
            <label>
                <select name="memberID">
                    <?php

                    $sql = "SELECT memberID, lastName, firstName FROM members ORDER BY lastName";
                    $result = $conn->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['memberID'] . '">' . $row['lastName'] . ', ' . $row['firstName'] . '</option>';
                    }
                    ?>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <legend>Birthday</legend>
            <label>
                Birthday:<input name="birthDate" placeholder="Birthday" type="date">
            </label>
        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>
            <label>
                Street:<input type="text" name="addressStreet" placeholder="Street" size="84">
            </label><br>
            <label>
                City:<input type="text" name="addressCity" placeholder="City">
            </label>
            <label>
                State:
                <select name="addressState">
                    <option value="Alabama">Alabama</option>
                    <option value="Alaska">Alaska</option>
                    <option value="Arizona">Arizona</option>
                    <option value="Arkansas">Arkansas</option>
                    <option value="California">California</option>
                    <option value="Colorado">Colorado</option>
                    <option value="Connecticut">Connecticut</option>
                    <option value="Delaware">Delaware</option>
                    <option value="District of Columbia">District of Columbia</option>
                    <option value="Florida">Florida</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Guam">Guam</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Idaho">Idaho</option>
                    <option value="Illinois">Illinois</option>
                    <option value="Indiana">Indiana</option>
                    <option value="Iowa">Iowa</option>
                    <option value="Kansas">Kansas</option>
                    <option value="Kentucky">Kentucky</option>
                    <option value="Louisiana">Louisiana</option>
                    <option value="Maine">Maine</option>
                    <option value="Maryland" selected>Maryland</option>
                    <option value="Massachusetts">Massachusetts</option>
                    <option value="Michigan">Michigan</option>
                    <option value="Minnesota">Minnesota</option>
                    <option value="Mississippi">Mississippi</option>
                    <option value="Missouri">Missouri</option>
                    <option value="Montana">Montana</option>
                    <option value="Nebraska">Nebraska</option>
                    <option value="Nevada">Nevada</option>
                    <option value="New Hampshire">New Hampshire</option>
                    <option value="New Jersey">New Jersey</option>
                    <option value="New Mexico">New Mexico</option>
                    <option value="New York">New York</option>
                    <option value="North Carolina">North Carolina</option>
                    <option value="North Dakota">North Dakota</option>
                    <option value="Northern Marianas Islands">Northern Marianas Islands</option>
                    <option value="Ohio">Ohio</option>
                    <option value="Oklahoma">Oklahoma</option>
                    <option value="Oregon">Oregon</option>
                    <option value="Pennsylvania">Pennsylvania</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Rhode Island">Rhode Island</option>
                    <option value="South Carolina">South Carolina</option>
                    <option value="South Dakota">South Dakota</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Utah">Utah</option>
                    <option value="Vermont">Vermont</option>
                    <option value="Virginia">Virginia</option>
                    <option value="Virgin Islands">Virgin Islands</option>
                    <option value="Washington">Washington</option>
                    <option value="West Virginia">West Virginia</option>
                    <option value="Wisconsin">Wisconsin</option>
                    <option value="Wyoming">Wyoming</option>
                </select>
            </label>
            <label>
                Zip Code:<input type="text" name="addressZip" placeholder="Zip Code">
            </label><br>
            <label>
                Phone Number:<input type="text" name="phoneNumber" placeholder="Phone Number"
            </label><br>
            <label>
                Email Address:<input type="text" name="emailAddress" placeholder="Email Address"
            </label><br>
        </fieldset>

        <fieldset>
            <legend>Ride Along's</legend>
            <label>
                Date Jot Form Received:<input type="date" name="jotFormReceived" placeholder="Date Jot Form Received">
            </label><br>
            <label>
                Date Ride Along's Finished:<input type="date" name="rideAlongFinished"
                                                  placeholder="Date Ride Along's Finished">
            </label><br>
            <label>
                Date Contacted for Interview:<input type="date" name="contactDate"
                                                    placeholder="Date Contacted for Interview">
            </label><br>
            <label>
                Interview Date and Time:<input type="datetime-local" name="interviewScheduled"
                                               placeholder="Date and Time Interview Scheduled"
            </label><br>
        </fieldset>

        <fieldset>
            <legend>Initial and Final Join Dates</legend>
            <label>
                Initial Join Date:<input type="date" name="initialJoinDate" placeholder="Initial Join Date">
            </label>
            <label>
                Initial Join Status: <select name="initStatID">
                    <?php
                    $sql = "SELECT statID, statusType FROM statusTypes ORDER BY statID";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['statID'] . '">' . $row['statusType'] . '</option>';
                    }
                    ?>
                </select>
            </label><br>
            <label>
                Final Join Date:<input type="date" name="finalJoinDate" placeholder="Final Join Date"
            </label>
            <label>
                Final Join Status: <select name="finStatID">
                    <?php
                    $sql = "SELECT statID, statusType FROM statusTypes ORDER BY statID";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['statID'] . '">' . $row['statusType'] . '</option>';
                    }
                    ?>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <legend>County Number</legend>
            <label>
                Date County Number Received:<input type="date" name="dateCountyNumberReceived"
                                                   placeholder="Date County Number Received">
            </label>
            <label>
                County Number:<input type="text" name="counNum" placeholder="County Number">
            </label><br>
        </fieldset>

        <fieldset>
            <legend>Appointments</legend>
            <label>
                Fingerprint Appointment Date:<input type="date" name="fingerprintAppointmentDate"
                                                    placeholder="Fingerprint Appointment Date">
            </label><br>
            <label>
                Physical Appointment Date:<input type="date" name="physicalScheduleDate"
                                                 placeholder="Physical Appointment Date">
            </label>
            <label>
                Passed:<select name="passPhysical">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </label><br>
            <label>
                VRS Completion Date:<input type="date" name="dateVrsCompleted" placeholder="VRS Completion Date"
            </label><br>
        </fieldset>

        <fieldset>
            <legend>Background</legend>
            <label>
                Date Background Received:<input type="date" name="dateBackgroundPassed"
                                                placeholder="Date Background Received">
            </label>
            <label>
                Passed:<select name="backgroundSuccess">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </label>
        </fieldset>

        <fieldset>
            <legend>Application Status</legend>
            <label>
                Application Status:
                <select name="appStat">
                    <?php

                    $sql = "SELECT appStatTypeID, applicationStatusType FROM applicationstatustypes ORDER BY appStatTypeID";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['appStatTypeID'] . '">' . $row['applicationStatusType'] . '</option>';
                    }
                    ?>
                </select>
            </label><br>
            <label>
                Application Status Notes:<input type="text" name="appStatNotes" placeholder="Notes">
            </label><br>
        </fieldset>

        <fieldset>
            <legend>Duty Start</legend>
            <label>
                Duty Start Date:<input type="date" name="dutyStart" placeholder="Duty Start Date">
            </label>
        </fieldset>

        <fieldset>
            <legend>Probation Extension</legend>
            <label>
                Probation Extension Start Date:<input type="date" name="probationExtensionStartDate">
            </label><br>
            <label>
                Probation Extension End Date:<input type="date" name="probationExtensionEndDate">
            </label><br>
            <label>
                Probation Extension Notes:<input type="text" name="probationExtensionReason">
            </label>
        </fieldset>

        <fieldset>
            <legend>Status Change</legend>
            <label>
                Status Change Date:<input type="date" name="statusChangeDate">
            </label><br>
            <label>
                Status Type:<select name="statChangeID">
                    <?php
                    $sql = "SELECT statID, statusType FROM statusTypes ORDER BY statID";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['statID'] . '">' . $row['statusType'] . '</option>';
                    }
                    ?>
                </select>
            </label><br>
        </fieldset>

        <fieldset>
            <legend>Leave</legend>
            <label>
                Leave Approved:<select name="leaveApproved">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                    s
                </select>
            </label><br>
            <label>
                Leave Start Date:<input type="date" name="leaveStartDate">
            </label><br>
            <label>
                Leave End Date:<input type="date" name="leaveEndDate">
            </label><br>
            <label>
                Leave Notes:<input type="text" name="leaveNotes">
            </label><br>
            <label>
                Leave Type: <select name="leaveTypeID">
                    <?php
                    $sql = "SELECT leaveTypeID, leaveType FROM leaveTypes ORDER BY leaveTypeID";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['leaveTypeID'] . '">' . $row['leaveType'] . '</option>';
                    }
                    ?>
                </select>
            </label>

        </fieldset>

        <fieldset>
            <legend>Dropped</legend>
            <label>
                Date Dropped:<input type="date" name="dateDropped">
            </label>
        </fieldset>

        <fieldset>
            <legend>Dual Membership</legend>
            <label>
                Date Dual Accepted:<input type="date" name="dateDualAccepted">
            </label>
        </fieldset>

        <fieldset>
            <legend>Resignations</legend>
            <label>
                Resignation Date:<input type="date" name="dateResigned">
            </label>
        </fieldset>
        <br>

        <input type="submit" name="submit" value="Submit">

    </form>

</div>

</body>
