<?php
// Check if student ID is provided via POST
if(isset($_POST['sid'])) {
    $sid = $_POST['sid'];
    // Read JSON file
    $students_json = file_get_contents('students.json');
    $students = json_decode($students_json, true);

    // Find the student with the given sid and remove it from the array
    foreach ($students as $key => $student) {
        if ($student['sid'] == $sid) {
            unset($students[$key]); // Remove the student from the array
            break;
        }
    }

    // Encode the updated array back to JSON format
    $updated_students_json = json_encode($students, JSON_PRETTY_PRINT);

    // Write the updated JSON data back to the file
    file_put_contents('students.json', $updated_students_json);

    // Send a success response
    echo json_encode(array("message" => "Student update successfully"));
} else {
    // Send an error response if student ID is not provided
    echo json_encode(array("message" => "Student ID not provided"));
}
?>
