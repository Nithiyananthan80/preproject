<?php
$connection = mysqli_connect("localhost", "root", "", "registerdetails");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $coursename = $_POST['coursename'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO student (name, coursename, mobile) VALUES ('$name', '$coursename', '$mobile')";
    if (mysqli_query($connection, $sql)) {
        echo '<script>window.location.href = "index.php";</script>';
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Student</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.container {
    width: 100%;
    max-width: 600px;
    padding: 20px;
    background: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.card {
    border: none;
    background-color: #f9f9f9;
    border-radius: 10px;
    overflow: hidden;
}

.card-header {
    background-color: #007bff;
    color: white;
    padding: 15px;
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    text-transform: capitalize;
    border-bottom: 2px solid #0056b3;
}

.card-body {
    padding: 20px;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

label {
    font-weight: bold;
    color: #333;
}

input[type="text"] {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    outline: none;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus {
    border-color: #007bff;
}

input[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

@media (max-width: 600px) {
    .container {
        margin: 20px;
        padding: 15px;
    }

    .card-header {
        font-size: 20px;
    }

    input[type="text"], input[type="submit"] {
        font-size: 14px;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Add New Student</h1>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" name="coursename" class="form-control" placeholder="Enter Course Name" required>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile" required>
                    </div>
                    <br>
                    <input type="submit" name="submit" value="Register" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
