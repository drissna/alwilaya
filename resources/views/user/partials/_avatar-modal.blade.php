<div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="avatar-form" action="{{ route('user.profilePicture') }}" enctype="multipart/form-data" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="avatar-modal-label">Changer votre image de profile</h4>
                </div>
                <div class="modal-body">
                    <div class="avatar-body">
                        <div class="avatar-upload">
                            <input type="hidden" class="avatar-src" name="avatar_src">
                            <input type="hidden" class="avatar-data" name="avatar_data">
                            <label for="avatarInput">Sélectionner</label>
                            <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
                        </div>

                        <div class="row">
                            <div class="col-md-9">
                                <div class="avatar-wrapper"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="avatar-preview preview-lg"></div>
                                <div class="avatar-preview preview-md"></div>
                                <div class="avatar-preview preview-sm"></div>
                            </div>
                        </div>

                        <div class="row avatar-btns">
                            <div class="col-md-9">
                                <div class="btn-group" style="margin-bottom: 5px;">
                                    <button style="width: 200px;" type="button" class="btn btn-primary" data-method="rotate" data-option="-90" title="Rotate -90 degrees">Rotation a gauche</button>
                                    <button style="width: 80px;" type="button" class="btn btn-primary" data-method="rotate" data-option="-15">-15deg</button>
                                    <button style="width: 80px;" type="button" class="btn btn-primary" data-method="rotate" data-option="-30">-30deg</button>
                                    <button style="width: 80px;" type="button" class="btn btn-primary" data-method="rotate" data-option="-45">-45deg</button>
                                </div>
                                <div class="btn-group" style="margin-bottom: 5px;">
                                    <button style="width: 200px;" type="button" class="btn btn-primary" data-method="rotate" data-option="90" title="Rotate 90 degrees">Rotation a droite</button>
                                    <button style="width: 80px;" type="button" class="btn btn-primary" data-method="rotate" data-option="15">15deg</button>
                                    <button style="width: 80px;" type="button" class="btn btn-primary" data-method="rotate" data-option="30">30deg</button>
                                    <button style="width: 80px;" type="button" class="btn btn-primary" data-method="rotate" data-option="45">45deg</button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-block avatar-save">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
            </form>
        </div>
    </div>
</div>
<div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>