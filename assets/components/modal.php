<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        Would you like to register as a

      </div>
      <div class="modal-footer">

        <button type="button" class="button btn-primary text-white" style="font-size:small; padding-left:3rem; padding-right: 3rem " data-toggle="modal" data-dismiss="modal" data-target="#registerModal">Psychologist/Psychiatrist?</button>
        <button type="button" class="button btn-secondary text-white" style="font-size:small; padding-left:3rem; padding-right: 3rem " data-toggle="modal" data-dismiss="modal" data-target="#userModal">Patient?</button>
      </div>
    </div>
  </div>
</div>

<?php
include './assets/components/registermodal.php';
include './assets/components/userregistermodal.php';
?>