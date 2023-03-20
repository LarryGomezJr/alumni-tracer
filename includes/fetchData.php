<?php
$query = "SELECT * FROM tbl_gender";
$result = $db->query($query);
if ($result->num_rows > 0) {
  $gender = mysqli_fetch_all($result, MYSQLI_ASSOC);
} 

$query1 = "SELECT * FROM tbl_civil_status";
$result1 = $db->query($query1);
if ($result1->num_rows > 0) {
  $civil = mysqli_fetch_all($result1, MYSQLI_ASSOC);
}

// $query2 = "SELECT tbl_program.program, tbl_department.department FROM tbl_program, tbl_department WHERE tbl_program.dep_id = tbl_department.dep_id";
$query2 = "SELECT * FROM tbl_program";
$result2 = $db->query($query2);
if ($result2->num_rows > 0) {
  $program = mysqli_fetch_all($result2, MYSQLI_ASSOC);
}

$query3 = "SELECT * FROM tbl_primary_work_loc";
$result3 = $db->query($query3);
if ($result3->num_rows > 0) {
  $location = mysqli_fetch_all($result3, MYSQLI_ASSOC);
}

$query4 = "SELECT * FROM tbl_type_org";
$result4 = $db->query($query4);
if ($result4->num_rows > 0) {
  $organization = mysqli_fetch_all($result4, MYSQLI_ASSOC);
}

$query5 = "SELECT * FROM tbl_employment_status";
$result5 = $db->query($query5);
if ($result5->num_rows > 0) {
  $employment = mysqli_fetch_all($result5, MYSQLI_ASSOC);
}

$query6 = "SELECT * FROM tbl_length_employment";
$result6 = $db->query($query6);
if ($result6->num_rows > 0) {
  $length = mysqli_fetch_all($result6, MYSQLI_ASSOC);
}

$query7 = "SELECT * FROM tbl_attainment";
$result7 = $db->query($query7);
if ($result7->num_rows > 0) {
  $attainment = mysqli_fetch_all($result7, MYSQLI_ASSOC);
}

$query8 = "SELECT * FROM tbl_collaborate";
$result8 = $db->query($query8);
if ($result8->num_rows > 0) {
  $collaborate = mysqli_fetch_all($result8, MYSQLI_ASSOC);
}

$query9 = "SELECT * FROM tbl_batch";
$result9 = $db->query($query9);
if ($result9->num_rows > 0) {
  $batch = mysqli_fetch_all($result9, MYSQLI_ASSOC);
  
}

$query10 = "SELECT * FROM tbl_align";
$result10 = $db->query($query10);
if ($result10->num_rows > 0) {
  $align = mysqli_fetch_all($result10, MYSQLI_ASSOC);
}

$query11 = "SELECT * FROM tbl_satisfy";
$result11 = $db->query($query11);
if ($result11->num_rows > 0) {
  $satisfy = mysqli_fetch_all($result11, MYSQLI_ASSOC);
}
$query12 = "SELECT * FROM tbl_consent";
$result12 = $db->query($query12);
if ($result12->num_rows > 0) {
  $consent = mysqli_fetch_all($result12, MYSQLI_ASSOC);
}