<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<div align="left">
    <h2>Enter name of Students</h2>
    <form action="/enter-grades" method=POST>
        @csrf   
        <label for="s1name">Student 1 Name:</label><br>
        <input class="form-control" type="text" name="student1_name" placeholder="Enter Name" required>
        <label for="s2name">Student 2 Name:</label><br>
        <input class="form-control" type="text" name="student2_name"placeholder="Enter Name" required>
        <label for="s3name">Student 3 Name:</label><br>
        <input class="form-control" type="text" name="student3_name"placeholder="Enter Name" required>
        <label for="s4name">Student 4 Name:</label><br>
        <input class="form-control" type="text" name="student4_name"placeholder="Enter Name" required>
        <label for="s5name">Student 5 Name:</label><br>
        <input class="form-control" type="text" name="student5_name"placeholder="Enter Name" required>
        <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Save Students</button>
        </div>
    </form>
</div>
</body>
</html>