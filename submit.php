<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  header("Location: /");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submitted - Web Developer Intern Assessment</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h2>Congratulations!</h2>
  <p>Your submission has been received.</p>
  <dl>
    <dt>
      First name:
    </dt>
    <dd>
      <?= htmlspecialchars($_POST["firstName"]) ?>
    </dd>
    <dt>
      Last name:
    </dt>
    <dd>
      <?= htmlspecialchars($_POST["lastName"]) ?>
    </dd>
    <dt>
      Date of Birth:
    </dt>
    <dd>
      <?= htmlspecialchars($_POST["dateOfBirth"]) ?>
    </dd>
    <dt>
      Gender:
    </dt>
    <dd>
      <?= htmlspecialchars($_POST["gender"]) ?>
    </dd>
  </dl>
</body>

</html>