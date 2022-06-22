<div class="modal fade effect-scale" id="chgRoleUser" role="dialog" aria-labelledby="chgRoleUserLabel" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
                <h5 class="tx-poppins tx-medium mg-b-0">Hak Akses</h5>
                <button type="button" class="btn btn-icon btn-sp-icon tx-poppins tx-medium bdr-sp-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
            </div>
            <div class="modal-body">
                <p>Saat ini Anda berperan sebagai <b>Pegawai</b>.</p>
                <div class="form-group form-floating">
                    <select class="form-select" id="select_user" required>
                        <option value="">Pilih salah satu</option>
                        <option value="beranda/index.php">Pegawai</option>
                        <option value="beranda/admin-index.php">Administrator Institut Teknologi Sepuluh Nopember</option>
                    </select>
                    <label for="select_user">Hak Akses Anda</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Batal</button>
                <input class="btn btn-its-3 tx-poppins tx-medium" type="button" id="goBtn" value="Ganti">
            </div>
        </div>
    </div>
</div>