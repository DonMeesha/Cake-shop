<?php

include('includes/header.php');
include('includes/navbar.php');

?>
<br><br><br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action ="code.php" method="POST">
          <div class="modal-body">
          <div class="form-group">
           <label>Username</label>
           <input type="text" name="username" class="form-control" placeholder="Enter Username">
       </div>
       <div class="form-group">
           <label>Email</label>
           <input type="email" name="email" class="form-control" placeholder="Enter Email">
       </div>
       <div class="form-group">
           <label>Password</label>
           <input type="password" name="password" class="form-control" placeholder="EnterUsername">
       </div>
       <div class="form-group">
           <label>Confirm Password</label>
           <input type="passwrod" name="confrimpassword" class="form-control" placeholder="EnterUsername">
       </div>
      </div>
       
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save </button>
      </div>
       </form>
    </div>
   
  </div>
</div>

<div class="container-fluid">
<div class="card-shadow mb-4">
    <h6 class="n-0 font-weight-bold text-prmary">Admin Profile
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="addadminprofile">Add Admin Profile</button></h6>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="datatable" width="100%" collspacing="0">
            <thead>
                <tr>
                    <th> Name</th>
                    <th> City</th>
                    <th> Age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

<?php

include('includes/scripts.php');
include('includes/footer.php');

?>