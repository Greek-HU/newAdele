<form action="updatePic" method="post">
    @csrf
    @method('PUT')
<div class="modal fade" id="editImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kép szerkesztése</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <input type="hidden" id="img_id" name="img_id">

            </div>
            <div class="modal-body text-center">
                <div >
                    <img class="rounded" src="#" id="editedImg" alt="" height="150">
                </div>
                <div class="p-2">
                    <input type="text" name="newTitle" id="editedImgTitle">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégsem</button>
                <button type="submit" class="btn btn-success">Mentés</button>
            </div>
        </div>
    </div>
</div>
</form>
