<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course Registration Details</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.card {
    border: none;
    margin: 20px 0;
    background: #f9f9f9;
    border-radius: 10px;
    overflow: hidden;
}

.card-header {
    background: #007bff;
    color: #fff;
    padding: 15px;
    font-size: 24px;
    text-align: center;
    font-weight: bold;
}

.card-body {
    padding: 20px;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.table thead {
    background-color: #007bff;
    color: white;
    text-align: left;
}

.table th,
.table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center;
}

.table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table tbody tr:hover {
    background-color: #e9ecef;
    cursor: pointer;
}

.btn {
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
    cursor: pointer;
}

.btn-success {
    background-color: #28a745;
    color: white;
    transition: background-color 0.3s ease;
}

.btn-success:hover {
    background-color: #218838;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
    transition: background-color 0.3s ease;
}

.btn-danger:hover {
    background-color: #c82333;
}

.text-light {
    text-decoration: none;
    color: white;
}

.text-light:hover {
    text-decoration: underline;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Course Registration Student Details</h1>
            </div>
            <div class="card-body">
                <button class="btn btn-success">
                    <a href="add.php" class="text-light">Add New</a>
                </button>
                <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Course Name</th>
                            <th>Mobile</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $connection = mysqli_connect("localhost", "root", "", "registerdetails");
                        $sql = "SELECT * FROM student";
                        $result = mysqli_query($connection, $sql);
                        $id = 1;

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                <td>{$id}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['coursename']}</td>
                                <td>{$row['mobile']}</td>
                                <td>
                                    <button class='btn btn-success'>
                                        <a href='edit.php?id={$row['id']}' class='text-light'>Edit</a>
                                    </button>
                                    <button class='btn btn-danger'>
                                        <a href='delete.php?id={$row['id']}' class='text-light'>Delete</a>
                                    </button>
                                </td>
                            </tr>";
                            $id++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

