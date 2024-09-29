
<?php 


function confirmation_modal($contents , $header){
    return '
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">'.$contents.'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
           Are you sure that you want to '.$contents.' this '.$header.'?
        
      </div>
      <div class="modal-footer">
     
        <button type="button" class="button btn-primary text-white" style="font-size:small; padding-left:3rem; padding-right: 3rem " data-toggle="modal" data-dismiss="modal" data-target="#EditModal" >Yes</button>
        <button type="button" class="button btn-danger text-white" style="font-size:small; padding-left:3rem; padding-right: 3rem " data-toggle="modal" data-dismiss="modal" data-target="#userModal">No</button>
      </div>
    </div>
  </div>
</div>';
}

require_once 'EditModal.php';

?>