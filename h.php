<?php

// Task 1: Create an array to store student records
$studentRecords = array(
    array("name" => "Dewan Kumar", "age" => 21, "grade" => 86),
    array("name" => "Kiran", "age" => 22, "grade" => 86),
    array("name" => "Aadrash", "age" => 21, "grade" => 90),
    array("name" => "Mily", "age" => 19, "grade" => 50),
    array("name" => "Arun", "age" => 20, "grade" => 88)
);

// Task 3: Function to display all student records
function displayStudentRecords($records) {
    echo "<h2>Student Records:</h2>";
    echo "<ul>";
    foreach ($records as $record) {
        echo "<li>Name: " . $record['name'] . ", Age: " . $record['age'] . ", Grade: " . $record['grade'] . "</li>";
    }
    echo "</ul>";
}

// Task 4: Function to calculate and display the average grade of all students
function displayAverageGrade($records) {
    $totalGrades = 0;
    $totalStudents = count($records);
    foreach ($records as $record) {
        $totalGrades += $record['grade'];
    }
    $averageGrade = $totalGrades / $totalStudents;
    echo "<h2>Average Grade: " . $averageGrade . "</h2>";
}

// Task 5: Function to search for a student by name and display details
function searchStudentByName($records, $name) {
    foreach ($records as $record) {
        if ($record['name'] == $name) {
            echo "<h2>Student Details for $name:</h2>";
            echo "Name: " . $record['name'] . ", Age: " . $record['age'] . ", Grade: " . $record['grade'];
            return;
        }
    }
    echo "<h2>Student with name $name not found</h2>";
}

// Task 2: Display student records
displayStudentRecords($studentRecords);

// Task 4: Display average grade
displayAverageGrade($studentRecords);

// Task 5: Search for a student by name
searchStudentByName($studentRecords, "Kiran");

?>
