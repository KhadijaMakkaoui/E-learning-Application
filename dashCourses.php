<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard- Courses List</title>
  <meta name="description" content="Dashboard of courses List">
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="./bootsrap/bootstrap.min.css" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="bootsrap/font/bootstrap-icons.css" />
</head>

<body>
  <div class="container-fluid ">
    <div class="row flex-nowrap">
      <!--        sidebar        -->
      <?php
      $activeHome = NULL;
      $activeStudent = NULL;
      $activePay = NULL;
      $activeCourses="active";
      include 'Component/sidebar.php';
      ?>
      <!--        content area         -->
      <div class="col-9 col-md-9 col-lg-9 col-xl-10">
        <?php
        include 'Component/header.php';
        ?>
        <main class="row mx-1" style="background-color: #f8f8f8">
          <div class="border-bottom d-flex justify-content-between mt-2">
            <h3 class=" ">Courses List</h3>
            <div class="">
              <a href="#" class="link-info "><i class="bi bi-arrow-down-up"></i></a>
              <a href="#" class="link-light bg-info rounded-2 px-2" data-bs-toggle="modal" data-bs-target="#AddForm">
                <i class="bi bi-person-plus-fill"></i>
              </a>
              <?php
              include "./include_Mysql/connection.php";
              
              ?>

            </div>
          </div>
          <div class="table-responsive" style="max-height: 400px;">
            <table class="table ">
              <thead class="text-secondary">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="bg-white">
                <!-- Afficher la list des apprenants -->
                <?php
                include "./include_Mysql/connection.php";
                $arr_courses = mysqli_query($conn, "SELECT * FROM courses");
                while ($course = mysqli_fetch_array($arr_courses)) : ?>
                  <tr>
                    <td> <?php echo $course['id'] ?></td>
                    <td> <?php echo $course['title'] ?></td>
                    <td> <?php echo $course['description'] ?></td>
                    
                  </tr>

                <?php endwhile; ?>

              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
  </div>

  <script src="./bootsrap/bootstrap.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>