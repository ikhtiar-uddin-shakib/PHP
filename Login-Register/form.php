<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "university";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["fname"];
    $id = $_POST["id"];
    $dateofbirth = $_POST["birth"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $gender = isset($_POST["male"]) ? "Male" : (isset($_POST["female"]) ? "Female" : "");
    $photo = $_POST["image"];
    $textarea = $_POST["textarea"];

    // Insert data into the database
    $sql = "INSERT INTO admission_form (name, id, dateofbirth, email, department, gender, photo, textarea) VALUES ('$name', $id, '$dateofbirth', '$email', '$department', '$gender', '$photo', '$textarea')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>

    <div class="container mt-5">
        <form action="#" method="POST">
            
            <fieldset>
                
                <legend>Admission Form</legend>
                <div class="form-group">
                    <label for="fname">Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" required>
                </div>
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="number" class="form-control" name="id" id="id" required>
                </div>
                <div class="form-group">
                    <label for="birth">Date Of Birth</label>
                    <input type="date" class="form-control" name="birth" id="birth" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" name="department" id="department" required>
                </div>
                <div class="form-group">
                    <label>Gender</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="male" id="male">
                        <label class="form-check-label" for="male">MALE</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="female" id="female">
                        <label class="form-check-label" for="female">FEMALE</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">Add Photo</label>
                    <input type="file" class="form-control-file" name="image" id="image" required>
                </div>
                <div class="form-group">
                    <label for="textarea">Comment</label>
                    <textarea class="form-control" rows="5" name="textarea" id="textarea" required></textarea>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
            </fieldset>
        </form>
    </div>
</body>
</html>
