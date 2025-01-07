<!-- Add New Voter Modal -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addNewModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewModalLabel">Register to Vote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="voters_add.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname"
                            placeholder="Enter first name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname"
                            placeholder="Enter last name" required>
                    </div>
                    <div class="form-group">
                        <label for="voters_id">Student's Number</label>
                        <input type="text" class="form-control" id="voters_id" name="voters_id"
                            placeholder="Enter voter ID" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <label for="photo">Profile Picture</label>
                        <input type="file" class="form-control-file" id="photo" name="photo">
                    </div>
                    <button type="submit" class="btn btn-primary" name="add">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>