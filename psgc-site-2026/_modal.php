<!-- PARTIAL: _modal.php -->

<div class="row crate-image">
  <div class="col-sm">
    <img class="img-fluid tag-image_border tag-trigger_modal" src="<?php echo $_mdata['imgUrl'];?>" data-bs-toggle="modal" data-bs-target="#<?php echo $_mdata['target'];?>" alt="<?php echo $_mdata['alt'];?>">
  </div>
  <div class="col-sm align-self-center">
    <p class="align-middle"><?php echo $_mdata['desc'];?></p>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="<?php echo $_mdata['target'];?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo $_mdata['title'];?></h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="<?php echo $_mdata['imgUrl'];?>" alt="<?php echo $_mdata['alt'];?>">
      </div>
    </div>
  </div>
</div>
