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
    <link rel="stylesheet" href="bootsrap/font/bootstrap-icons.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!--             sidebar              -->
            <?php
            include 'Component/sidebar.php';
            ?>
            <!--        content area         -->
            <div class="col">
                <nav class="navbar row">
                    <div class="col-2 d-flex flex-row w-100  justify-content-between ">
                        <div>
                            <a class="link-secondary">
                                <i class="fs-5 bi-caret-left-square"></i>
                            </a>
                        </div>
                        <div class="input-group" style="width:170px;">
                            <input type="text" class="form-control" placeholder="Search ..">
                            <button class="btn btn-outline-secondary rounded-end me-2" type="button" id="button-addon2">
                                <i class="fs-6 bi-search"></i>
                            </button>
                            <i class="fs-5 bi-bell text-secondary mt-1"></i>
                        </div>

                    </div>
                </nav>
                <main class="row mx-2 mt-4 justify-content-evenly">
                    <div class="card" style="width: 225px;height: 157px;" id="card-student">
                        <div class="card-body d-flex flex-column">
                            <i class="fs-1 bi-mortarboard" style="color: #74C1ED;"></i>
                            <h6 class="card-subtitle mb-2 text-secondary">Students</h6>
                            <h3 class="align-self-end">243</h3>
                        </div>
                    </div>
                    <div class="card" style="width: 225px;height: 157px;" id="card-course">
                        <div class="card-body d-flex flex-column">
                            <i class="fs-1 bi-bookmark" style="color: #EE95C5;"></i>
                            <h5 class="card-subtitle mb-2 text-secondary">Course</h5>
                            <h3 class="align-self-end">13</h3>
                        </div>
                    </div>
                    <div class="card" style="width: 225px; height: 157px;" id="card-pay">
                        <div class="card-body d-flex flex-column">
                            <i class="fs-1 bi-currency-dollar" style="color: #00C1FE;"></i>
                            <h6 class="card-subtitle mb-2 text-secondary">Payments</h6>
                            <h3 class="align-self-end">556,000 DHS</h3>
                        </div>
                    </div>
                    <div class="card" style="width: 225px; height: 157px;" id="card-user">
                        <div class="card-body d-flex flex-column">
                            <i class="fs-1 bi-person text-light"></i>
                            <h6 class="card-subtitle mb-2 text-light">Users</h6>
                            <h3 class="align-self-end">3</h3>
                        </div>
                    </div>
                </main>
            </div>

        </div>
    </div>



    <script src="/bootsrap/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>