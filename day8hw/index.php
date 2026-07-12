<?php include "header.php"; ?>

<div class="container py-5">
  <div class="card shadow p-4 mx-auto" style="max-width:700px;">
    <h3 class="mb-4 text-center">Student Registration</h3>
    <form method="post" action="process.php">
      <input class="form-control mb-3" name="name" placeholder="Name">
      <input class="form-control mb-3" name="email" placeholder="Email">
      <input class="form-control mb-3" name="cgpa" placeholder="CGPA">
      <input class="form-control mb-3" name="branch" placeholder="Branch">
      <input class="form-control mb-3" name="college" placeholder="College">

      <button class="btn btn-primary w-100">Submit</button>
    </form>
  </div>
</div>

<?php include "footer.php"; ?>