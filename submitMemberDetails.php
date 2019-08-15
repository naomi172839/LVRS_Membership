<?php

$server = "localhost";
$username = "root";
$password = "Wicked2013";
$db = "membership";

$lastName = $firstName = $middleName = $birthDate = $addressStreet = $addressCity = $addressState = $addressZip =
$phoneNumber = $emailAddress = $jotFormReceived = $rideAlongFinished = $contactDate = $interviewScheduled =
$initialJoinDate = $initialJoinStatus = $finalJoinDate = $finalJoinStatus = $dateCountyNumberReceived =
$counNum = $fingerprintAppointmentDate = $physicalScheduleDate = $passedPhys = $dateVrsCompleted =
$dateBackgroundPassed = $passedBack = $appStat = $appStatNotes = $dutyStart = $memID =
$probationExtensionStartDate = $probationExtensionEndDate = $probationExtensionReason =
$statusChangeDate = $statChangeID = $leaveApproved = $leaveStartDate = $leaveEndDate =
$leaveNotes = $leaveTypeID = $dateDropped = $dateDualAccepted = $dateResigned = "";

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$memID = $_POST['memberID'];

$stmt = $conn->prepare("INSERT INTO birthdays (memberID, birthDate) VALUE (?,?)");
$stmt->bind_param("ss", $memID, $birthDate);

$birthDate = $_POST['birthDate'];

if ($birthDate != "") {
    $stmt->execute();
    $stmt->close();
    echo "Birthdate was added <br>";
} else {
    echo "Birthdate Not Added! <br>";
}

$stmt = $conn->prepare("INSERT INTO address (memberID, addressStreet, addressCity, addressState, addressZip) VALUES (?,?,?,?,?)");
$stmt->bind_param("sssss", $memID, $addressStreet, $addressCity, $addressState, $addressZip);

$addressStreet = $_POST['addressStreet'];
$addressCity = $_POST['addressCity'];
$addressState = $_POST['addressState'];
$addressZip = $_POST['addressZip'];

if ($addressStreet != "" && $addressCity != "" && $addressState != "" && $addressZip != "") {
    $stmt->execute();
    $stmt->close();
    echo "Address was added <br>";
} else {
    echo "Address Not Added! <br>";
}

$stmt = $conn->prepare("INSERT INTO phone (memberID, phoneNumber) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $phoneNumber);

$phoneNumber = $_POST['phoneNumber'];

if ($phoneNumber != "") {
    $stmt->execute();
    $stmt->close();
    echo "Phone number added <br>";
} else {
    echo "Phone Number Not Added! <br>";
}

$stmt = $conn->prepare("INSERT INTO email (memberID, emailAddress) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $emailAddress);

$emailAddress = $_POST['emailAddress'];

if ($emailAddress != "") {
    $stmt->execute();
    $stmt->close();
    echo "Email added <br>";
} else {
    echo "Email not added <br>";
}

$stmt = $conn->prepare("INSERT INTO jotform (memberID, jotFormReceived) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $jotFormReceived);

$jotFormReceived = $_POST['jotFormReceived'];

if ($jotFormReceived != "") {
    $stmt->execute();
    $stmt->close();
    echo "JotForm added <br>";
} else {
    echo "JotForm Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO ridealong (memberID, rideAlongFinished) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $rideAlongFinished);

$rideAlongFinished = $_POST['rideAlongFinished'];

if ($rideAlongFinished != "") {
    $stmt->execute();
    $stmt->close();
    echo "Ride along added <br>";
} else {
    echo "Ride Along Not Added! <br>";
}

$stmt = $conn->prepare("INSERT INTO interviewcontact (memberID, contactDate) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $contactDate);

$contactDate = $_POST['contactDate'];

if ($contactDate != "") {
    $stmt->execute();
    $stmt->close();
    echo "Interview contact added <br>";
} else {
    echo "Interview Contact Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO interviewschedule (memberID, interviewScheduled) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $interviewScheduled);

$interviewScheduled = $_POST['interviewScheduled'];

if ($interviewScheduled != "") {
    $stmt->execute();
    $stmt->close();
    echo "Interview schedule added <br>";
} else {
    echo "Interview Schedule Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO initialjoinstatus (memberID, statID, initialJoinDate) VALUES (?,?,?)");
$stmt->bind_param("sss", $memID, $initialJoinStatus, $initialJoinDate);

$initialJoinStatus = $_POST['initStatID'];
$initialJoinDate = $_POST['initialJoinDate'];

if ($initialJoinDate != "" && $initialJoinDate != "") {
    $stmt->execute();
    $stmt->close();
    echo "Initial join added <br>";
} else {
    echo "Initial Join Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO finaljoinstatus (memberID, statID, finalJoinDate) VALUES (?,?,?)");
$stmt->bind_param("sss", $memID, $finalJoinStatus, $finalJoinDate);

$finalJoinStatus = $_POST['finStatID'];
$finalJoinDate = $_POST['finalJoinDate'];

if ($finalJoinDate != "" && $finalJoinStatus != "") {
    $stmt->execute();
    $stmt->close();
    echo "Final Join added <br>";
} else {
    echo "Final Join Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO countynumber (memberID, dateCountyNumberReceived, counNum) VALUES (?,?,?)");
$stmt->bind_param("sss", $memID, $dateCountyNumberReceived, $counNum);

$dateCountyNumberReceived = $_POST['dateCountyNumberReceived'];
$counNum = $_POST['counNum'];

if ($dateCountyNumberReceived != "" && $counNum != "") {
    $stmt->execute();
    $stmt->close();
    echo "County number added <br>";
} else {
    echo "County Number Not Added";
}

$stmt = $conn->prepare("INSERT INTO fingerprints (memberID, fingerprintAppointmentDate) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $fingerprintAppointmentDate);

$fingerprintAppointmentDate = $_POST['fingerprintAppointmentDate'];

if ($fingerprintAppointmentDate != "") {
    $stmt->execute();
    $stmt->close();
    echo "Fingerprint appointment added <br>";
} else {
    echo "Fingerprint Appointment Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO physicalschedule (memberID, physicalScheduleDate) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $physicalScheduleDate);

$physicalScheduleDate = $_POST['physicalScheduleDate'];

if ($physicalScheduleDate != "") {
    $stmt->execute();
    $stmt->close();
    echo "Physical schedule added <br>";
} else {
    echo "Physical Schedule Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO physicalPassed (memberID, passPhysical) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $passedPhys);

$passedPhys = $_POST['passedPhysical'];

if ($passedPhys != "") {
    $stmt->execute();
    $stmt->close();
    echo "Physical passed added <br>";
} else {
    echo "Physical Passed Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO vrs (memberID, dateVrsCompleted) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $dateVrsCompleted);

$dateVrsCompleted = $_POST['dateVrsCompleted'];

if ($dateVrsCompleted != "") {
    $stmt->execute();
    $stmt->close();
    echo "VRS date added <br>";
} else {
    echo "VRS Date Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO background (memberID, dateBackgroundPassed, backgroundSuccess) VALUES (?,?,?)");
$stmt->bind_param("sss", $memID, $dateBackgroundPassed, $passedBack);

$dateBackgroundPassed = $_POST['dateBackgroundPassed'];
$passedBack = $_POST['backgroundSuccess'];

if ($dateBackgroundPassed != "" && $passedBack != "") {
    $stmt->execute();
    $stmt->close();
    echo "Background added <br>";
} else {
    echo "Background Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO applicationstatus (memberID, appStatTypeID, appStatNotes) VALUES (?,?,?)");
$stmt->bind_param("sss", $memID, $appStat, $appStatNotes);

$appStat = $_POST['appStat'];
$appStatNotes = $_POST['appStatNotes'];

if ($appStat != "" && $appStatNotes != "") {
    $stmt->execute();
    $stmt->close();
    echo "Application added <br>";
} else {
    echo "Application Not Added! <br>";
}

$stmt = $conn->prepare("INSERT INTO dutystart (memberID, dutyStart) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $dutyStart);

$dutyStart = $_POST['dutyStart'];

if ($dutyStart != "") {
    $stmt->execute();
    $stmt->close();
    echo "Duty start added <br>";
} else {
    echo "Duty Start Not Added! <br>";
}

$stmt = $conn->prepare("INSERT INTO probation (memberID, probationExtensionStartDate, probationExtensionEndDate,
                       probationExtensionReason) VALUES (?,?,?,?)");
$stmt->bind_param("ssss", $memID, $probationExtensionStartDate, $probationExtensionEndDate,
    $probationExtensionReason);

$probationExtensionStartDate = $_POST['probationExtensionStartDate'];
$probationExtensionEndDate = $_POST['probationExtensionEndDate'];
$probationExtensionReason = $_POST['probationExtensionReason'];

if ($probationExtensionStartDate != "" && $probationExtensionEndDate != "" && $probationExtensionReason != "") {
    $stmt->execute();
    $stmt->close();
    echo "Probation Extension Added <br>";
} else {
    echo "Probation Not Added!<br>";
}

$stmt = $conn->prepare("INSERT INTO statuschange (memberID, statID, statusChangeDate) VALUES (?,?,?)");
$stmt->bind_param("sss", $memID, $statChangeID, $statusChangeDate);

$statChangeID = $_POST['statChangeID'];
$statusChangeDate = $_POST['statusChangeDate'];

if ($statChangeID != "" && $statusChangeDate != "") {
    $stmt->execute();
    $stmt->close();
    echo "Status change added<br>";
} else {
    echo "Status Change Not Added!<br>";
}
$stmt = $conn->prepare("INSERT INTO leavestatus (memberID, leaveTypeID, leaveApproved, leaveStartDate, 
                         leaveEndDate, leaveNotes) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $memID, $leaveTypeID, $leaveApproved, $leaveStartDate, $leaveEndDate,
    $leaveNotes);

$leaveTypeID = $_POST['leaveTypeID'];
$leaveApproved = $_POST['leaveApproved'];
$leaveStartDate = $_POST['leaveStartDate'];
$leaveEndDate = $_POST['leaveEndDate'];
$leaveNotes = $_POST['leaveNotes'];

if ($leaveTypeID != "" && $leaveApproved != "" && $leaveStartDate != "" && $leaveEndDate != "" && $leaveNotes != "") {
    $stmt->execute();
    $stmt->close();
    echo "Leave status added <br>";
} else {
    echo "Leave Status Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO dropped (memberID, dateDropped) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $dateDropped);

$dateDropped = $_POST['dateDropped'];

if ($dateDropped != "") {
    $stmt->execute();
    $stmt->close();
    echo "Drop date added <br>";
} else {
    echo "Drop Date Not Added! <br>";
}

$stmt = $conn->prepare("INSERT INTO dualmembers (memberID, dateDualAccepted) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $dateDualAccepted);

$dateDualAccepted = $_POST['dateDualAccepted'];

if ($dateDualAccepted != "") {
    $stmt->execute();
    $stmt->close();
    echo "Dual accepted added <br>";
} else {
    echo "Dual Accepted Not Added <br>";
}

$stmt = $conn->prepare("INSERT INTO resigned (memberID, dateResigned) VALUES (?,?)");
$stmt->bind_param("ss", $memID, $dateResigned);

$dateResigned = $_POST['dateResigned'];

if ($dateResigned != "") {
    $stmt->execute();
    $stmt->close();
    echo "Resignation added <br>";
} else {
    echo "Resignation Not Added <br>";
}

$conn->close();

echo "Form submitted.  Success!";
