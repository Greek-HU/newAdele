<form action="destroyPic" method="get">
  @csrf
  @method('DELETE')
<div class="modal fade" id="xModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Törlés</h5>
                <input type="hidden" id="delimg_id" name="delimg_id">
            </div>
            <div class="modal-body d-flex justify-content-center">
              <img class="rounded" src="#" alt="" id="deletedImg" height="150">
            </div>
            <div class="text-center">
              <p>Biztos benne hogy törli a "<span id="deletedImgTitle"></span>" című képet?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                <button type="submit" class="btn btn-primary">Törlés</button>
            </div>
        </div>
    </div>
</div>
</form>
