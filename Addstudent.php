<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/bootsrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootsrap/font/bootstrap-icons.css">

</head>

<body>
    <div class="container my-5" style="max-width: 500px;">
        <h1 class="text-center">ADD NEW STUDENT</h1>
        <div class="text-center">
            <img src="images/img-youcode.png" class="rounded-circle" alt="image apprenant">
        </div>
        <form action="dashStudents.php" method="GET">
            <div class="mb-3">
                <label for="img" class="form-label">Profil picture</label>
                <input class="form-control" type="file" name="img">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="Name" placeholder="Student">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="user@email.com">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" name="phone" aria-describedby="phone number" placeholder="XXXXXXX">
            </div>
            <div class="mb-3">
                <label for="EnrollNum" class="form-label">Enroll number</label>
                <input type="number" class="form-control" name="EnrollNum" aria-describedby="Name" min="0" placeholder="12345">
            </div>
            <div class="mb-3">
                <label for="dateAdd" class="form-label">Date of admission</label>
                <input type="date" class="form-control" name="dateAdd" aria-describedby="date" min="0" placeholder="">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-info" aria-describedby="button">Info</button>
            </div>
        </form>
    </div>

</body>

</html>