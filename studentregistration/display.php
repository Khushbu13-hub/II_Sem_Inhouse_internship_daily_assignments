<?php

$errors = [];

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$age = trim($_POST['age']);
$gender = $_POST['gender'] ?? "";
$course = $_POST['course'];
$address = trim($_POST['address']);

if(empty($name))
{
    $errors[] = "Name is required";
}
elseif(preg_match('/[0-9]/',$name))
{
    $errors[] = "Name cannot contain numbers";
}

if(empty($email))
{
    $errors[] = "Email is required";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $errors[] = "Invalid Email";
}

if(empty($age))
{
    $errors[] = "Age is required";
}

if(empty($gender))
{
    $errors[] = "Please select gender";
}

if(empty($course))
{
    $errors[] = "Please select course";
}

if(strlen($address) < 10)
{
    $errors[] = "Address must be at least 10 characters";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Result</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<?php

if(!empty($errors))
{
    echo "<div class='alert alert-danger'>";
    echo "<h4>Errors Found</h4>";
    echo "<ul>";

    foreach($errors as $error)
    {
        echo "<li>$error</li>";
    }

    echo "</ul>";
    echo "</div>";
}
else
{
?>

<div class="card shadow p-4">

<h2 class="text-success">
Registration Successful
</h2>

<hr>

<p><strong>Name:</strong> <?php echo $name; ?></p>

<p><strong>Email:</strong> <?php echo $email; ?></p>

<p><strong>Age:</strong> <?php echo $age; ?></p>

<p><strong>Gender:</strong> <?php echo $gender; ?></p>

<p><strong>Course:</strong> <?php echo $course; ?></p>

<p><strong>Address:</strong> <?php echo $address; ?></p>

</div>

<?php
}
?>

</div>

</body>
</html>