

<?php 
  require "./controller/IndexController.php";
?>
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold text-primary" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         <form method="POST">
      <div class="modal-body">
       
          <div class="form-group my-2 ">
                        <label for="firstname" class="form-label me-4">First Name</label>
                        <input type="text" class="form-control rounded-5" id="firstname" placeholder="Enter First Name" name="firstname">
                    </div>
                    <div class="form-group my-2 ">
                        <label for="lastname" class="form-label me-4">Last Name</label>
                        <input type="text" class="form-control rounded-5" id="lastname" placeholder="Enter Last Name" name="lastname">
                    </div>
                      <div class="form-group my-2">
                        <label for="contact">Contact Number</label>
                        <input type="number" class="form-control rounded-5" id="contact" placeholder="Enter contact" name="contact">
                    </div>
                    <div class="form-group my-2">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control rounded-5" id="emal" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group my-2">
                        <label for="password">Password</label>
                        <input type="password" class="form-control rounded-5" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group my-2">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control rounded-5" id="password" placeholder="Password" name="confirmpassword">
                    </div>
                    <div class="form-group my-2">
                        <label for="profession" class="form-label">Profession Type: </label>
                        <select name="profession" class="form-control" id="profession">
                          <option value="Psychologist" >Psychologist</option>
                          <option value="Psychiatrist" >Psychiatrist</option>
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <label for="experience" class="form-label">Years of Experience: </label>
                        <input type="number" class="form-control rounded-5" id="experience" placeholder="..." name="experience">
                    </div>
                    <div class="form-group my-2">
                        <label for="license" class="form-label">License: </label>
                        <input type="number" class="form-control rounded-5" id="license" placeholder="..." name="license">
                    </div>
                    <div class="form-group my-2">
                        <label for="documents" class="form-label">Documents: </label>
                        <input name="fileType" type="file" class="form-control rounded-5" id="documents" placeholder="...">
                    </div>
                    
                    
        
        
      </div>
      <div class="modal-footer">
      <button type="submit" class="button btn-primary text-white" style="font-size:small; padding-left:3rem; padding-right: 3rem " name="profSubmitRegister" >Register</button>
        <button type="button" class="button btn-danger text-white" style="font-size:small; padding-left:3rem; padding-right: 3rem " data-dismiss="modal">Cancel</button>
     
      </div>
        </form>
    </div>
  </div>
</div>
