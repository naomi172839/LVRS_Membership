<?php

class getMember
{
    protected $server = 'localhost';
    protected $username = 'root';
    protected $password = 'Wicked2013';
    protected $db = 'membership';
    private $memberID;
    private $data = array();

    function __construct($memID)
    {
        $this->memberID = $memID;
        $conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        $sqlQueries =
            array(
                "SELECT lastName, firstName, middleName FROM members WHERE memberID=" . $memID .
                " ORDER BY memberID DESC",
                "SELECT birthDate FROM birthdays WHERE memberID=" . $memID . " ORDER BY birthID DESC",
                "SELECT phoneNumber FROM phone WHERE memberID=" . $memID . " ORDER BY phoneID DESC",
                "SELECT emailAddress FROM email WHERE memberID=" . $memID . " ORDER BY emailID DESC",
                "SELECT addressStreet, addressCity, addressState, addressZip FROM address WHERE memberID=" . $memID
                . " ORDER BY addressID DESC",
                "SELECT jotFormReceived FROM jotform WHERE memberID=" . $memID . " ORDER BY jotID DESC",
                "SELECT rideAlongFinished FROM ridealong WHERE memberID=" . $memID . " ORDER BY rideID DESC",
                "SELECT contactDate FROM interviewcontact WHERE memberID=" . $memID . " ORDER BY intConID DESC",
                "SELECT interviewScheduled FROM interviewschedule WHERE memberID=" . $memID . " ORDER BY intSchID DESC",
                "SELECT statID AS initialStatID, initialJoinDate FROM initialjoinstatus WHERE memberID=" . $memID
                . " ORDER BY initJoinID DESC",
                "SELECT statID AS finalStatID, finalJoinDate FROM finaljoinstatus WHERE memberID=" . $memID
                . " ORDER BY finJoinID DESC",
                "SELECT dateCountyNumberReceived, counNum FROM countynumber WHERE memberID=" . $memID
                . " ORDER BY counNumID DESC",
                "SELECT fingerprintAppointmentDate FROM fingerprints WHERE memberID=" . $memID
                . " ORDER BY fingID DESC",
                "SELECT physicalScheduleDate FROM physicalschedule WHERE memberID=" . $memID
                . " ORDER BY physSchID DESC",
                "SELECT passPhysical FROM physicalpassed WHERE memberID=" . $memID . " ORDER BY physPassID DESC",
                "SELECT dateVrsCompleted FROM vrs WHERE memberID=" . $memID . " ORDER BY vrsID DESC",
                "SELECT dateBackgroundPassed, backgroundSuccess FROM background WHERE memberID=" . $memID
                . " ORDER BY backID DESC",
                "SELECT appStatTypeID, appStatNotes FROM applicationstatus WHERE memberID=" . $memID
                . " ORDER BY appStatTypeID DESC",
                "SELECT dutyStart FROM dutystart WHERE memberID=" . $memID . " ORDER BY dutyID DESC"
            );

        foreach ($sqlQueries as $query) {
            $result = $conn->query($query);
            if (mysqli_num_rows($result) > 0) {
                $row = $result->fetch_assoc();
                $this->data += $row;
            }
        }
        $sqlQueries2 = array(
            "SELECT statusType AS initialStatusType FROM statustypes WHERE statID=" .
            strval($this->data['initialStatID']) . " ORDER BY statID DESC",
            "SELECT statusType AS finalStatusType FROM statustypes WHERE statID=" . strval($this->data['finalStatID'])
            . " ORDER BY statID DESC",
            "SELECT applicationStatusType FROM applicationstatustypes WHERE appStatTypeID=" .
            strval($this->data['appStatTypeID']) . " ORDER BY appStatTypeID DESC",

        );
        foreach ($sqlQueries2 as $query2) {
            $result = $conn->query($query2);
            if (mysqli_num_rows($result) > 0) {
                $row = $result->fetch_assoc();
                $this->data += $row;
            }
        }

    }

    function memberData()
    {
        return $this->data;
    }


}