<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Developer Intern Assessment</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h2>A Simple Web Form</h2>
  <form action="/submit.php" method="post">
    <label for="">First name</label>
    <input type="text" name="firstName" required>
    <label for="">Last name</label>
    <input type="text" name="lastName" required>
    <label for="">Date of Birth</label>
    <input type="date" name="dateOfBirth" required>
    <label for="">Gender</label>
    <select name="gender" required>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Others">Others</option>
    </select>
    <button type="submit">Submit</button>
  </form>
</body>

</html>