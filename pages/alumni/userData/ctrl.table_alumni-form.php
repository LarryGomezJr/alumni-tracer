<?php

include '../../../includes/conn.php';

$data = array();
$query = $db->query("SELECT form_id, TO_BASE64(img) as image, CONCAT(tbl_form.firstname, ' ', tbl_form.lastname) AS fullname, stud_no, batch, course_abv, current_title, status, email, contact FROM tbl_form 
LEFT JOIN tbl_program ON tbl_program.program_id = tbl_form.program_id
LEFT JOIN tbl_alumni ON tbl_alumni.alumni_id = tbl_form.alumni_id
LEFT JOIN tbl_employment_status ON tbl_employment_status.emp_status_id = tbl_form.emp_status_id
LEFT JOIN tbl_batch ON tbl_batch.batch_id = tbl_form.batch_id");


while($row = $query->fetch_array()) {
$data[] = $row;
}
echo json_encode($data);
?> 