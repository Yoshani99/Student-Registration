<?php
// Read JSON file
$students_json = file_get_contents('students.json');
$students = json_decode($students_json, true);

// Output all student records
echo json_encode($students);
?>


