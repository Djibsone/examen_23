<!-- Delete Modal -->
<div class="modal fade" id="delete_modal" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title"><b>Suppression...</b></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="form-horizontal" method="post" action="controllers/delete.php">

        <div class="modal-body">
          <input type="hidden" class="del_id" name="id">
          <div class="text-center">
              <p class="text-danger">SUPPRIMER ?</p>
              <h2 class="bold name"></h2>
          </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler <span class="fa fa-close"></button>
            <button type="submit" class="btn btn-danger btn-flat" name="delete">Supprimer <span class="fa fa-trash"></span></button>
        </div>

      </form>

    </div>
  </div>
</div>