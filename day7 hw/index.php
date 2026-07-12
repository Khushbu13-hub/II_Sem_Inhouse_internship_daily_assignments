<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Student Registration System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f7fa;
}

.card{
border-radius:15px;
box-shadow:0px 5px 15px rgba(0,0,0,.2);
}

.photo-box{
border:2px dashed #ccc;
padding:20px;
border-radius:10px;
text-align:center;
background:#fafafa;
}

</style>

</head>

<body>

<div class="container mt-5 mb-5">

<div class="card">

<div class="card-header bg-primary text-white text-center">
<h2>Student Registration System</h2>
</div>

<div class="card-body">

<form action="process.php" method="POST" enctype="multipart/form-data">

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">Student Name</label>
<input
type="text"
name="name"
class="form-control"
placeholder="Enter Name"
required>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Email</label>
<input
type="email"
name="email"
class="form-control"
placeholder="Enter Email"
required>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Branch</label>

<input
type="text"
name="branch"
class="form-control"
placeholder="Computer Science">
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Phone</label>

<input
type="text"
name="phone"
class="form-control"
placeholder="10-digit Mobile"
required>
</div>

<div class="col-md-6 mb-3">

<label class="form-label d-block">Gender</label>

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="gender" value="Male">
<label class="form-check-label">Male</label>
</div>

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="gender" value="Female">
<label class="form-check-label">Female</label>
</div>

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="gender" value="Other">
<label class="form-check-label">Other</label>
</div>

</div>

<div class="col-md-6 mb-3">

<label class="form-label">Course</label>

<select name="course" class="form-select">

<option value="">Select Course</option>

<option>BCA</option>
<option>B.Tech</option>
<option>MCA</option>
<option>M.Tech</option>
<option>B.Sc</option>

</select>

</div>

<div class="col-12 mb-3">

<label class="form-label">Address</label>

<textarea
name="address"
rows="4"
class="form-control"
placeholder="Enter Full Address"></textarea>

</div>

<div class="col-12 mb-3">

<div class="photo-box">

<label class="form-label fw-bold">
Upload Profile Photo
</label>

<input
type="file"
name="photo"
class="form-control">

<p class="text-muted mt-2">
(No backend upload required)
</p>

</div>

</div>

<div class="text-center">

<button class="btn btn-success btn-lg">
Register Student
</button>

<button type="reset" class="btn btn-danger btn-lg">
Reset
</button>

</div>

</form>

</div>

</div>

</div>

</body>
</html>