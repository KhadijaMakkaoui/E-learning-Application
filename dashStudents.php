<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="/bootsrap/bootstrap.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="bootsrap/font/bootstrap-icons.css" />
  </head>
  <body>
    <div class="container-fluid vh-100">
      <div class="row flex-nowrap">
        <!--        sidebar        -->
        <div
          class="col-3 col-md-3 col-lg-3 col-xl-2 px-0 vh-100 background-sidebar"
        >
          <div class="">
            <img
              src="/images/logo_eclass.png"
              class="img-fluid"
              id="img-logo"
              alt="logo"
            />
          </div>
          <div class="d-flex flex-column align-items-center">
            <div class="text-center mt-4">
              <img
                src="/images/img-youcode.png"
                class="w-50 rounded-circle"
                id="img-profile"
                alt="profile picture"
              />
            </div>
            <div class="text-center mt-1">
              <h5 class="d-none d-sm-inline">Admin name</h5>
              <h6 class="text-info fs">Admin</h6>
            </div>
            <!-- <div class="d-flex flex-column align-items-lg-center px-3 pt-2 text-white min-vh-100"> -->
            <div class="small">
              <ul
                class="nav nav-pills flex-column align-items-center align-items-sm-start pb-5"
                id="menu"
              >
                <li class="nav-item">
                  <a
                    href="dashHome.html"
                    class="nav-link align-middle px-0 link-dark"
                  >
                    <i class="fs-6 bi-house"></i>
                    <span class="d-none d-sm-inline">Home</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="#"
                    data-bs-toggle="collapse"
                    class="nav-link px-0 align-middle link-dark"
                  >
                    <i class="fs-6 bi-bookmark"></i>
                    <span class="d-none d-sm-inline">Course</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="dashStudents.html"
                    class="nav-link active px-0 align-middle link-dark"
                  >
                    <i class="fs-6 bi-mortarboard"></i>
                    <span class="ms-1 d-none d-sm-inline">Students</span></a
                  >
                </li>
                <li class="nav-item">
                  <a
                    href="dashPayment.html"
                    class="nav-link px-0 align-middle link-dark"
                  >
                    <i class="fs-6 bi-currency-dollar"></i>
                    <span class="ms-1 d-none d-sm-inline">Payment</span>
                  </a>
                  <!-- data-bs-toggle="collapse" -->
                </li>
                <li class="nav-item">
                  <a
                    href="#submenu3"
                    data-bs-toggle="collapse"
                    class="nav-link px-0 align-middle link-dark"
                  >
                    <i class="fs-6 bi-file-earmark-text"></i>
                    <span class="ms-1 d-none d-sm-inline">Report</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link px-0 align-middle link-dark">
                    <i class="fs-6 bi-grid"></i>
                    <span class="ms-1 d-none d-sm-inline">Settings</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="index.html"
                    class="nav-link px-0 align-middle link-dark align-self-end"
                  >
                    <i class="fs-6 bi-box-arrow-right"></i>
                    <span class="d-none d-sm-inline">Log out</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--        content area         -->
        <div class="col-9 col-md-9 col-lg-9 col-xl-10">
          <nav class="navbar row mx-1">
            <div class="col-2 d-flex flex-row w-100 justify-content-between">
              <div>
                <a class="link-secondary">
                  <i class="fs-5 bi-caret-left-square"></i>
                </a>
              </div>
              <div class="input-group" style="width: 170px">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search .."
                />
                <button
                  class="btn btn-outline-secondary rounded-end me-2"
                  type="button"
                  id="button-addon2"
                >
                  <i class="fs-6 bi-search"></i>
                </button>
                <i class="fs-5 bi-bell text-secondary mt-1"></i>
              </div>
            </div>
          </nav>
          <main class="row mx-1" style="background-color: #f8f8f8">
            <div class="border-bottom d-flex justify-content-between">
              <h2 class=" ">Students List</h2>
              <div class="">
                <a href="#" class="link-info px-2"
                  ><i class="bi bi-arrow-down-up"></i
                ></a>
                <input
                  type="button"
                  class="btn text-light"
                  value="ADD NEW STUDENT"
                  style="background-color: #00c1fe"
                />
              </div>
            </div>
            <div class="table-responsive">
              <table class="table">
                <thead class="text-secondary">
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Enroll Number</th>
                    <th scope="col">Date of admission</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="background-color: white">
                    <th scope="row">
                      <img src="images/table-pic.svg" alt="user-pic" />
                    </th>
                    <td>username</td>
                    <td>user@email.com</td>
                    <td>0612346789</td>
                    <td>1234567898765</td>
                    <td>08-Dec,2021</td>
                    <td style="color: #00c1fe">
                      <i class="bi bi-pen"></i>
                      <i class="bi bi-trash"></i>
                    </td>
                  </tr>
                  <tr style="background-color: white">
                    <th scope="row">
                      <img src="images/table-pic.svg" alt="user-pic" />
                    </th>
                    <td>username</td>
                    <td>user@email.com</td>
                    <td>0612346789</td>
                    <td>1234567898765</td>
                    <td>08-Dec,2021</td>
                    <td style="color: #00c1fe">
                      <i class="bi bi-pen"></i>
                      <i class="bi bi-trash"></i>
                    </td>
                  </tr>
                  <tr style="background-color: white">
                    <th scope="row">
                      <img src="images/table-pic.svg" alt="user-pic" />
                    </th>
                    <td>username</td>
                    <td>user@email.com</td>
                    <td>0612346789</td>
                    <td>1234567898765</td>
                    <td>08-Dec,2021</td>
                    <td style="color: #00c1fe">
                      <i class="bi bi-pen"></i>
                      <i class="bi bi-trash"></i>
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