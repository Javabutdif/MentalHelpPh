
<?php 


function edit_modal($patient_id){
    $retrievePatient = retrieve_edit_patient($patient_id);



    return '
<div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="POST">
      <div class="modal-body">
        
          <div class="form-group my-2 ">
                        <label for="first_name" class="form-label me-4">First Name</label>
                        <input type="text" class="form-control rounded-5" id="first_name" placeholder="Enter First name" name="firstName" value="'.$retrievePatient['firstname'].'">
                    </div>
                      <div class="form-group my-2 ">
                        <label for="last_name" class="form-label me-4">Last Name</label>
                        <input type="text" class="form-control rounded-5" id="last_name" placeholder="Enter Last name" name="lastName">
                    </div>
                    <div class="form-group my-2">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control rounded-5" id="emal" placeholder="Enter email" name="userEmail">
                    </div>
                  
                    <div class="form-group my-2">
                        <label for="gender" class="form-label">Gender: </label>
                        <input type="text" class="form-control rounded-5" id="gender" placeholder="Enter your gender..." name="userGender">
                    </div>
                    <div class="form-group my-2">
                        <label for="age" class="form-label">Age: </label>
                        <input type="number" class="form-control rounded-5" id="age" placeholder="Enter your age..." name="userAge">
                    </div>
                    <div class="form-group my-2">
                        <label for="address" class="form-label">Address: </label>
                        <input type="text" class="form-control rounded-5" id="address" placeholder="Enter your address..." name="userAddress">
                    </div>
                    <div class="form-group my-2">
                        <label for="status" class="form-label">Status: </label>
                        <select name="userStatus" class="form-control" id="status">
                          <option value="Single" >Single</option>
                          <option value="Married" >Married</option>
                          <option value="Prefer not to say" >Prefer not to say</option>
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <label for="contact" class="form-label">Contact Number: </label>
                        <input type="text" class="form-control rounded-5" id="contact" placeholder="Enter your contact number..." name="userContact">
                    </div>
                    
                   
                    
                    
     
        
      </div>
      <div class="modal-footer">
      <button type="submit" class="button btn-primary text-white" style="font-size:small; padding-left:3rem; padding-right: 3rem; " name="submitRegister">Register</button>
        <button type="button" class="button btn-danger text-white" style="font-size:small; padding-left:3rem; padding-right: 3rem " data-dismiss="modal">Cancel</button>
     
      </div>
           </form>
    </div>
  </div>
</div>
';

}
?>