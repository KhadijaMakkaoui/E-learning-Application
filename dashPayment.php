<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="/bootsrap/bootstrap.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="bootsrap/font/bootstrap-icons.css" />

</head>

<body>
  <div class="container-fluid">
    <div class="row flex-nowrap">
      <!--      sidebar      -->
      <?php
          include 'Component/sidebar.php';
      ?>
      <!--          content area         -->
      <div class="col-9 col-md-9 col-lg-9 col-xl-10">
        <nav class="navbar row">
          <div class="col-9 col-md-9 col-lg-9 col-xl-10 d-flex flex-row w-100 justify-content-between">
            <div>
              <a class="link-secondary">
                <i class="fs-5 bi-caret-left-square"></i>
              </a>
            </div>
            <div class="input-group" style="width:170px;">
              <input type="text" class="form-control" placeholder="Search .." />
              <button class="btn btn-outline-secondary rounded-end me-2" type="button" id="button-addon2">
                <i class="fs-6 bi-search"></i>
              </button>
              <i class="fs-5 bi-bell text-secondary mt-1"></i>
            </div>
          </div>
        </nav>
        <main class="row" style="background-color: #f8f8f8">
            <div class="border-bottom d-flex justify-content-between">
              <h2>Payment Details</h2>
              <div>
                <a href="#" class="link-info px-2"><i class="bi bi-arrow-down-up"></i></a>
              </div>

            </div>
          <div class="table-responsive">

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
                <tr>

                  <td>Karthi</td>
                  <td>First</td>
                  <td>00985767760</td>
                  <td>1234567898765</td>
                  <td>DHS 500,000</td>
                  <td>08-Dec,2021</td>
                  <td style="color: #00C1FE;">
                    <i class="bi bi-eye"></i>
                  </td>
                </tr>
                <tr>

                  <td>username</td>
                  <td>user@email.com</td>
                  <td>0612346789</td>
                  <td>1234567898765</td>
                  <td>DHS 500,000</td>
                  <td>08-Dec,2021</td>
                  <td style="color: #00C1FE;">
                    <i class="bi bi-eye"></i>
                  </td>
                </tr>
                <tr>

                  <td>username</td>
                  <td>user@email.com</td>
                  <td>0612346789</td>
                  <td>1234567898765</td>
                  <td>DHS 500,000</td>
                  <td>08-Dec,2021</td>
                  <td style="color: #00C1FE;">
                    <i class="bi bi-eye"></i>
                  </td>
                </tr>

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