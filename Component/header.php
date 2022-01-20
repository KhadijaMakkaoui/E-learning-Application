<?php 
$header=<<<navbar
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
navbar;
echo $header;
?>