<?php
if(isset($_GET['sid'])) {
    $sid = $_GET['sid'];
    // Read JSON file
    $students_json = file_get_contents('students.json');
    $students = json_decode($students_json, true);

    // Find the student with the given sid
    foreach ($students as $student) {
        if ($student['sid'] == $sid) {
            echo json_encode($student);
            break;
        }
    }
}
?>
