
    <div class="container" >
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" aria-labelledby="addForm" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addForm">Addition Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                     <div class="modal-body">
                        <form method="POST" action="" >
                       
                            <div class="form-group mb-2">
                                <input type="text" name="Name" class="form-control" placeholder="Enter Name..." required="">
                            </div><!-- form-group -->
                            <div class="form-group mb-2">
                                <input type="email" name="Email" class="form-control" placeholder="Enter Email..." required="">
                            </div><!-- form-group -->
                            <div class="form-group mb-2">
                                <input type="text" name="Phone" class="form-control" placeholder="Enter Phone..." required="">
                            </div><!-- form-group -->
                            <div class="form-group mb-2">
                                <input type="number" name="Enroll_Number" class="form-control" placeholder="Enter Enroll Number..." required="" min="1">
                            </div><!-- form-group -->
                            <div class="form-group mb-2">
                                <input type="date" name="Date_addmission" class="form-control" placeholder="Enter Date addmission..." required="">
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary btn-info text-white">Add</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
