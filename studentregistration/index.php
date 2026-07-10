<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f4f4;
        }
        .card{
            max-width:700px;
            margin:auto;
            margin-top:30px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Student Registration Form</h2>

        <form action="display.php" method="POST">

            <div class="mb-3">
                <label class="form-label">Student Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Gender</label><br>

                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
            </div>

            <div class="mb-3">
                <label class="form-label">Course</label>

                <select name="course" class="form-select">
                    <option value="">Select Course</option>
                    <option>B.Tech CSE</option>
                    <option>B.Tech AI</option>
                    <option>BCA</option>
                    <option>MCA</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>

                <textarea name="address" rows="4"
                    class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Profile Photo</label>

                <input type="file" class="form-control">

                <div class="mt-2">
                    <img
                    src="https://via.placeholder.com/120"
                    width="120"
                    class="img-thumbnail">
                </div>
            </div>

            <button type="submit"
            class="btn btn-primary w-100">
                Register
            </button>

        </form>
    </div>
</div>

</body>
</html>