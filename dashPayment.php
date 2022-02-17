<?php
session_start();
include 'checkLogin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard- Payment Details</title>
  <meta name="description" content="Dashboard of Payment Details">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./bootsrap/bootstrap.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="bootsrap/font/bootstrap-icons.css" />

</head>

<body>
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <!--      sidebar      -->
      <?php
      $activeHome = NULL;
      $activeStudent = NULL;
      $activePay = "active";
      $activeCourses=NULL;
      include 'Component/sidebar.php';
      ?>
      <!--          content area         -->
      <div class="col-9 col-md-9 col-lg-9 col-xl-10">
        <?php
        include 'Component/header.php';
        ?>
        <main class="row" style="background-color: #f8f8f8">
          <div class="border-bottom d-flex justify-content-between">
            <h2>Payment Details</h2>
            <div>
              <a href="#" class="link-info px-2"><i class="bi bi-arrow-down-up"></i></a>
            </div>

          </div>
          <div class="table-responsive " style="max-height: 400px;">

            <table class="table table-striped">
              <thead class="text-secondary">
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Payement Schedule</th>
                  <th scope="col">Bill Number</th>
                  <th scope="col">Amount Paid</th>
                  <th scope="col">Balance amount</th>
                  <th scope="col">Date of admission</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                 include "./include_Mysql/connection.php";
                 $arr_payments= mysqli_query($conn,"SELECT * FROM payment_details");
                 while ($p = mysqli_fetch_array($arr_payments)) : ?>
                  <tr> 
                      <td> <?php echo $p['Name'] ?></td>
                      <td> <?php echo $p['schedual'] ?></td>
                      <td> <?php echo $p['Bill'] ?></td>
                      <td> <?php echo $p['Amount'] ?></td>
                      <td> <?php echo $p['Balance'] ?></td>
                      <td> <?php echo $p['Date_addmission'] ?></td>

                    <td style="color: #00c1fe"> <i class="bi bi-eye"></i></td>
                  </tr>
                   
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
  </div>
  <script src="/bootsrap/bootstrap.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

</body>

</html>