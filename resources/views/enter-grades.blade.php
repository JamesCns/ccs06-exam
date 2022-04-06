<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
  <h2>Student Grades</h2>
  <h5>Please enter students' grades</h5>
<div class="container">
<form action="compute-grades" method="POST">
  <div class="row align-items-start">
    <div class="col">
      Student Name
    </div>
    <div class="col">
      Midterm Grade
    </div>
    <div class="col">
      Final Grade
    </div>
  </div>

  <div class="row align-items-center">
    <div class="col">
      <label for="student1_name"></label>
    </div>
    <div class="col">
      <input class="form-control" type="number" placeholder="Enter Grade" required>
    </div>
    <div class="col">
      <input class="form-control" type="number" placeholder="Enter Grade" required>
    </div>
  </div>

  <div class="row align-items-center">
    <div class="col">
      <label for="student1_name"></label>
    </div>
    <div class="col">
      <input class="form-control" type="number" placeholder="Enter Grade" required>
    </div>
    <div class="col">
      <input class="form-control" type="number" placeholder="Enter Grade" required>
    </div>
  </div>

  <div class="row align-items-center">
    <div class="col">
      <label for="student1_name"></label>
    </div>
    <div class="col">
      <input class="form-control" type="number" placeholder="Enter Grade" required>
    </div>
    <div class="col">
      <input class="form-control" type="number" placeholder="Enter Grade" required>
    </div>
  </div>

  <div class="row align-items-center">
    <div class="col">
      <label for="student1_name"></label>
    </div>
    <div class="col">
      <input class="form-control" type="number" placeholder="Enter Grade" required>
    </div>
    <div class="col">
      <input class="form-control" type="number" placeholder="Enter Grade" required>
    </div>
  </div>



</div>
<div class="d-grid gap-2">
<button class="btn btn-primary" type="submit">Compute Average Grade</button>
</div>
</form>
</body>
</html>