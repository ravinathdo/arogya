<?php

function getAppointmentDetails($appoid) {
    $sql = "SELECT CONCAT(hms_patient.first_name, ' ', hms_patient.last_name) AS patient_name,hms_patient.telephone,
A.id,A.appointment_date,A.created_date,A.id,A.doctor_fee,A.hospital_fee,A.fee,A.status_code,A.doctor_comment,
CONCAT(hms_doctor.first_name, ' ', hms_doctor.last_name) AS doc_name
 FROM hms_doctor_appointment AS A
INNER JOIN hms_doctor ON A.doctor_id = hms_doctor.id
INNER JOIN hms_patient ON A.patient_id = hms_patient.id
WHERE A.id = ".$appoid;
    return getData($sql);
}

?>
