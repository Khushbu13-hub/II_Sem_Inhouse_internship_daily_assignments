<?php include "header.php";

function calculateGrade($cgpa){
  if($cgpa >= 9) return ["A+","success"];
  if($cgpa >= 8) return ["A","info"];
  if($cgpa >= 7) return ["B","primary"];
  if($cgpa >= 6) return ["C","warning"];
  return ["F","danger"];
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$cgpa = trim($_POST["cgpa"] ?? "");
$branch = trim($_POST["branch"] ?? "");
$college = trim($_POST["college"] ?? "");

if($name=="" || $email=="" || $cgpa=="" || $branch=="" || $college==""){
  echo "<div class='container py-5'><div class='alert alert-danger'>All fields are required.</div><a href='index.php' class='btn btn-secondary'>Back</a></div>";
  include "footer.php"; exit;
}

list($grade,$color) = calculateGrade($cgpa);
$date = date("F j, Y");
?>

<div class="container py-5">
  <div class="card shadow-lg p-4 mx-auto text-center" style="max-width:700px;">
    <h3 class="mb-3">Welcome, <?= htmlspecialchars($name) ?>!</h3>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>CGPA:</strong> <?= htmlspecialchars($cgpa) ?> 
      <span class="badge bg-<?= $color ?>"><?= $grade ?></span>
    </p>
    <p><strong>Branch:</strong> <?= htmlspecialchars($branch) ?></p>
    <p><strong>College:</strong> <?= htmlspecialchars($college) ?></p>
    <p><strong>Date:</strong> <?= $date ?></p>
    <a href="index.php" class="btn btn-primary">Register Again</a>
  </div>
</div>

<?php include "footer.php"; ?>