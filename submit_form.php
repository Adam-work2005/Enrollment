<?php
ob_start(); // Prevents header issues

// Enable MySQLi error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Database connection parameters
$DB_HOST = "localhost"; // Change if needed
$DB_USER = "root"; // Your MySQL username
$DB_PASS = ""; // Your MySQL password
$DB_NAME = "endb"; // Your database name

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    function cleanInput($data) {
        return htmlspecialchars(trim($data));
    }

    // Get and sanitize form data
    $firstName = cleanInput($_POST['firstName'] ?? '');
    $middleName = cleanInput($_POST['middleName'] ?? '');
    $lastName = cleanInput($_POST['lastName'] ?? '');
    $course = cleanInput($_POST['course'] ?? '');
    $yearLevel = cleanInput($_POST['yearLevel'] ?? '');
    $semester = cleanInput($_POST['semester'] ?? '');
    $dob = cleanInput($_POST['dob'] ?? '');
    $sex = cleanInput($_POST['sex'] ?? '');
    $citizenship = cleanInput($_POST['citizenship'] ?? '');
    $contactNumber = cleanInput($_POST['contNum'] ?? '');
    $email = cleanInput($_POST['email'] ?? '');
    $prvAddress = cleanInput($_POST['prvAddress'] ?? '');
    $ctyAddress = cleanInput($_POST['ctyAddress'] ?? '');
    $brgyAddress = cleanInput($_POST['brgyAddress'] ?? '');
    $strAddress = cleanInput($_POST['strAddress'] ?? '');
    $zipCode = cleanInput($_POST['zipCode'] ?? '');
    $religion = cleanInput($_POST['religion'] ?? '');
    $studType = cleanInput($_POST['studType'] ?? '');

    // Emergency Contact Data
    $pFirstName = cleanInput($_POST['pFirstName'] ?? '');
    $pMiddleName = cleanInput($_POST['pMiddleName'] ?? '');
    $pLastName = cleanInput($_POST['pLastName'] ?? '');
    $pdob = cleanInput($_POST['pdob'] ?? '');
    $relationship = cleanInput($_POST['relationship'] ?? '');
    $pContNum = cleanInput($_POST['pContNum'] ?? '');
    $pEmail = cleanInput($_POST['pEmail'] ?? '');

    // Validate required fields
    if (empty($firstName) || empty($lastName) || empty($course) || empty($yearLevel) || empty($dob) || empty($contactNumber) || empty($email)) {
        die("Error: Required fields are missing.");
    }

    // Insert data into the database using prepared statements
    $query = "INSERT INTO students 
    (FirstName, MiddleName, LastName, Course, YearLevel, Semester, DateOfBirth, Sex, Citizenship, ContactNumber, Email, 
    ProvinceAddress, CityAddress, BarangayAddress, StreetAddress, ZipCode, Religion, StudentType, 
    EmergencyContactFirstName, EmergencyContactMiddleName, EmergencyContactLastName, EmergencyContactDob, 
    EmergencyContactRelationship, EmergencyContactPhone, EmergencyContactEmail) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param(
        "ssssissssssssssssssssssss", 
        $firstName, $middleName, $lastName, $course, $yearLevel, $semester, $dob, $sex, $citizenship, 
        $contactNumber, $email, $prvAddress, $ctyAddress, $brgyAddress, $strAddress, $zipCode, 
        $religion, $studType, $pFirstName, $pMiddleName, $pLastName, $pdob, $relationship, 
        $pContNum, $pEmail
    );

    // Execute query and check for errors
    if ($stmt->execute()) {
        echo "<script>alert('Form submitted successfully!');</script>";
        header("Location: thank-you-btn.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
