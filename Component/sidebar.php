<?php

$sidebar=<<<sidebar
<div class="col-2 col-md-3 col-xl-2 px-0 vh-100 background-sidebar">
<div class="">
    <img src="./images/logo_eclass.png" class="img-fluid" id="img-logo" alt="logo" />
</div>
<div class="d-flex flex-column align-items-center ">
    <div class="text-center mt-4">
        <img src="./images/img-youcode.png" class="w-50 rounded-circle" id="img-profile"
            alt="profile picture" />
    </div>
    <div class="text-center mt-1">
        <h5 class="d-none d-sm-inline">Admin name</h5>
        <h6 class="text-info fs">Admin</h6>
    </div>
    <div class="small">
        <ul class="nav nav-pills flex-column  align-items-center align-items-sm-start pb-5"
            id="menu">

            <li class="nav-item">

                <a href="./dashHome.php" class="nav-link align-middle px-0  link-dark $activeHome">
                    <i class="fs-6 bi-house"></i>
                    <span class="d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="./dashCourses.php" data-bs-toggle="collapse"
                    class="nav-link px-0 align-middle link-dark $activeCourses">
                    <i class="fs-6 bi-bookmark"></i> <span class="d-none d-sm-inline">Course</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="./dashStudents.php" class="nav-link px-0 align-middle link-dark $activeStudent">
                    <i class="fs-6 bi-mortarboard"></i> <span
                        class="ms-1 d-none d-sm-inline">Students</span></a>
            </li>
            <li class="nav-item">
                <a href="./dashPayment.php" data-bs-toggle="collapse"
                    class="nav-link px-0 align-middle link-dark $activePay">
                    <i class="fs-6 bi-currency-dollar"></i> <span
                        class="ms-1 d-none d-sm-inline">Payment</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#submenu3" data-bs-toggle="collapse"
                    class="nav-link px-0 align-middle link-dark">
                    <i class="fs-6 bi-file-earmark-text"></i> <span
                        class="ms-1 d-none d-sm-inline">Report</span> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link px-0 align-middle link-dark">
                    <i class="fs-6 bi-grid"></i> <span
                        class="ms-1 d-none d-sm-inline">Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.html" data-bs-toggle="collapse"
                    class="nav-link px-0 align-middle  link-dark align-self-end">
                    <i class="fs-6 bi-box-arrow-right "></i>
                    <span class=" d-none d-sm-inline">Log out</span> </a>
            </li>
        </ul>
    </div>
</div>
</div>
sidebar;
echo $sidebar;
?>