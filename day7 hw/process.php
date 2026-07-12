<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$branch = trim($_POST['branch']);
$phone = trim($_POST['phone']);
$gender = $_POST['gender'] ?? "";
$course = trim($_POST['course']);
$address = trim($_POST['address']);

$photo = "";

if(isset($_FILES['photo']))
{
    $photo = $_FILES['photo']['name'];
}

$errors = [];

if(empty($name))
{
    $errors[]="Name is required.";
}

elseif(!preg_match("/^[A-Za-z ]+$/",$name))
{
    $errors[]="Name should contain only letters.";
}

if(empty($email))
{
    $errors[]="Email is required.";
}

elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $errors[]="Enter a valid email.";
}

if(empty($phone))
{
    $errors[]="Phone number is required.";
}

elseif(!preg_match("/^[0-9]{10}$/",$phone))
{
    $errors[]="Phone number must contain exactly 10 digits.";
}

if(empty($gender))
{
    $errors[]="Please select your gender.";
}

if(strlen($address)<10)
{
    $errors[]="Address should be at least 10 characters.";
}

?>

<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Student Registration</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<?php

if(count($errors)>0)
{

echo "<div class='alert alert-danger'>";
echo "<h4>Validation Errors</h4>";
echo "<ul>";

foreach($errors as $error)
{
echo "<li>$error</li>";
}

echo "</ul>";

echo "<a href='index.php' class='btn btn-danger'>Go Back</a>";

echo "</div>";

}

else
{

?>

<div class="card shadow">

<div class="card-header bg-success text-white text-center">

<h2>Registration Successful</h2>

</div>

<div class="card-body">

<div class="alert alert-success">

Student registered successfully!

</div>

<table class="table table-bordered">

<tr>
<th>Name</th>
<td><?php echo htmlspecialchars($name); ?></td>
</tr>

<tr>
<th>Email</th>
<td><?php echo htmlspecialchars($email); ?></td>
</tr>

<tr>
<th>Branch</th>
<td><?php echo htmlspecialchars($branch); ?></td>
</tr>

<tr>
<th>Phone</th>
<td><?php echo htmlspecialchars($phone); ?></td>
</tr>

<tr>
<th>Gender</th>
<td><?php echo htmlspecialchars($gender); ?></td>
</tr>

<tr>
<th>Course</th>
<td><?php echo htmlspecialchars($course); ?></td>
</tr>

<tr>
<th>Address</th>
<td><?php echo htmlspecialchars($address); ?></td>
</tr>

<tr>
<th>Photo</th>
<td>

<?php

if($photo!="")
{
echo $photo;
}
else
{
echo "No Photo Selected";
}

?>

</td>

</tr>

</table>

<div class="text-center">

<a href="index.php" class="btn btn-primary">
Register Another Student
</a>

</div>

</div>

</div>

<?php
}
?>

</div>

</body>

</html>