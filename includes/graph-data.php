<?php
include '../../includes/conn.php';

$alumni_query = "SELECT alumni_id from tbl_form";
$user_query_run = mysqli_query($db, $alumni_query);
$alumni_total = mysqli_num_rows($user_query_run);

$full_time = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 1";
$user_query_run1 = mysqli_query($db, $full_time);
$total_ft = mysqli_num_rows($user_query_run1);

$part_time = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 2";
$user_query_run2 = mysqli_query($db, $part_time);
$total_pt = mysqli_num_rows($user_query_run2);

$self_employed = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 3";
$user_query_run3 = mysqli_query($db, $self_employed);
$total_se = mysqli_num_rows($user_query_run3);

$unemployed = "SELECT emp_status_id FROM tbl_form WHERE emp_status_id = 4";
$user_query_run4 = mysqli_query($db, $unemployed);
$total_ue = mysqli_num_rows($user_query_run4);

$CSdep = "SELECT tbl_form.program_id, tbl_program.program_id, tbl_department.dep_id FROM tbl_form
                  LEFT JOIN tbl_program
                  ON tbl_form.program_id = tbl_program.program_id
                  LEFT JOIN tbl_department
                  ON tbl_department.dep_id = tbl_program.dep_id WHERE tbl_program.dep_id = 1";
$user_query_run5 = mysqli_query($db, $CSdep);
$total_CS = mysqli_num_rows($user_query_run5);

$BAdep = "SELECT tbl_form.program_id, tbl_program.program_id, tbl_department.dep_id FROM tbl_form
                  LEFT JOIN tbl_program
                  ON tbl_form.program_id = tbl_program.program_id
                  LEFT JOIN tbl_department
                  ON tbl_department.dep_id = tbl_program.dep_id WHERE tbl_program.dep_id = 2";
$user_query_run6 = mysqli_query($db, $BAdep);
$total_BA = mysqli_num_rows($user_query_run6);

$EDUCdep = "SELECT tbl_form.program_id, tbl_program.program_id, tbl_department.dep_id FROM tbl_form
                  LEFT JOIN tbl_program
                  ON tbl_form.program_id = tbl_program.program_id
                  LEFT JOIN tbl_department
                  ON tbl_department.dep_id = tbl_program.dep_id WHERE tbl_program.dep_id = 3";
$user_query_run7 = mysqli_query($db, $EDUCdep);
$total_EDUC = mysqli_num_rows($user_query_run7);

$HMdep = "SELECT tbl_form.program_id, tbl_program.program_id, tbl_department.dep_id FROM tbl_form
                  LEFT JOIN tbl_program
                  ON tbl_form.program_id = tbl_program.program_id
                  LEFT JOIN tbl_department
                  ON tbl_department.dep_id = tbl_program.dep_id WHERE tbl_program.dep_id = 4";
$user_query_run8 = mysqli_query($db, $HMdep);
$total_HM = mysqli_num_rows($user_query_run8);

$BRIDGdep = "SELECT tbl_form.program_id, tbl_program.program_id, tbl_department.dep_id FROM tbl_form
                  LEFT JOIN tbl_program
                  ON tbl_form.program_id = tbl_program.program_id
                  LEFT JOIN tbl_department
                  ON tbl_department.dep_id = tbl_program.dep_id WHERE tbl_program.dep_id = 5";
$user_query_run9 = mysqli_query($db, $BRIDGdep);
$total_BRDG = mysqli_num_rows($user_query_run9);

$LAdep = "SELECT tbl_form.program_id, tbl_program.program_id, tbl_department.dep_id FROM tbl_form
                  LEFT JOIN tbl_program
                  ON tbl_form.program_id = tbl_program.program_id
                  LEFT JOIN tbl_department
                  ON tbl_department.dep_id = tbl_program.dep_id WHERE tbl_program.dep_id = 6";
$user_query_run10 = mysqli_query($db, $LAdep);
$total_LA = mysqli_num_rows($user_query_run10);

$ENGdep = "SELECT tbl_form.program_id, tbl_program.program_id, tbl_department.dep_id FROM tbl_form
                  LEFT JOIN tbl_program
                  ON tbl_form.program_id = tbl_program.program_id
                  LEFT JOIN tbl_department
                  ON tbl_department.dep_id = tbl_program.dep_id WHERE tbl_program.dep_id = 7";
$user_query_run11 = mysqli_query($db, $ENGdep);
$total_ENG = mysqli_num_rows($user_query_run11);

$NURSdep = "SELECT tbl_form.program_id, tbl_program.program_id, tbl_department.dep_id FROM tbl_form
                  LEFT JOIN tbl_program
                  ON tbl_form.program_id = tbl_program.program_id
                  LEFT JOIN tbl_department
                  ON tbl_department.dep_id = tbl_program.dep_id WHERE tbl_program.dep_id = 8";
$user_query_run12 = mysqli_query($db, $NURSdep);
$total_NURS = mysqli_num_rows($user_query_run12);
