<div class="modal fade effect-scale" id="file-upload" tabindex="-1" role="dialog" aria-labelledby="file-uploadLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content tabs-animated">
        <div class="modal-header bd-0 d-flex align-items-center pd-b-0">
          <h5 class="tx-poppins tx-medium mg-b-0">Tambah Berkas</h5>
          <button type="button" class="btn btn-icon btn-its-custom-1 tx-poppins tx-medium rounded-its-50p d-flex align-items-center" data-dismiss="modal"><ion-icon name="close" class="mg-y-2 tx-18"></ion-icon></button>
          <ul class="nav nav-tabs d-none" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">upload</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="select-tab" data-toggle="tab" href="#select" role="tab" aria-controls="select" aria-selected="false">select</a>
            </li>
          </ul>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="modal-body">
              <a href="#" onclick="uploadbtn()">
                <div class="bd pd-15 pd-sm-20 rounded-its-10 mg-b-10 d-flex justify-content-between align-items-center">
                  <div class="media d-flex justify-content-start align-items-center">
                    <div class="avatar mg-r-15"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="cloud-upload" class="tx-20"></ion-icon></span></div>
                    <div class="media-body">
                      <p class="tx-poppins tx-medium tx-15 tx-color-01 mg-b-0">Unggah Berkas</p>
                      <span class="tx-13 tx-color-03">Pilih dari komputer Anda</span>
                    </div>
                  </div>
                  <div class="btn btn-icon btn-its-custom-1 rounded-its-50p"><i data-feather="chevron-right"></i></div>
                </div>
              </a>
              <a href="#" onclick="selectbtn()">
                <div class="bd pd-15 pd-sm-20 rounded-its-10 d-flex justify-content-between align-items-center">
                  <div class="media d-flex justify-content-start align-items-center">
                    <div class="avatar mg-r-15"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="folder-open" class="tx-20"></ion-icon></span></div>
                    <div class="media-body">
                      <p class="tx-poppins tx-medium tx-15 tx-color-01 mg-b-0">Berkas Saya</p>
                      <span class="tx-13 tx-color-03">Pilih berkas yang sudah pernah Anda unggah</span>
                    </div>
                  </div>
                  <div class="btn btn-icon btn-its-custom-1 rounded-its-50p"><i data-feather="chevron-right"></i></div>
                </div>
              </a>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" data-dismiss="modal">Tutup</button>
            </div>
          </div>
          <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
            <form>
              <div class="modal-body">
                <p class="tx-poppins tx-medium tx-15">Unggah Berkas</p>
                <div class="form-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Pilih berkas</label>
                  </div>
                </div>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="nama-berkas" placeholder="Nama berkas" required>
                  <label for="nama-berkas">Nama Berkas</label>
                </div>
                <div class="form-group form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="keterangan-berkas" style="min-height: 100px" required></textarea>
                  <label for="keterangan-berkas">Keterangan</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" onclick="homebtn()">Sebelumnya</button>
                <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Unggah</button>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="select" role="tabpanel" aria-labelledby="select-tab">
            <form>
              <div class="modal-body">
                <p class="tx-poppins tx-medium tx-15">Pilih Berkas</p>
                <div class="form-group form-floating">
                  <input type="text" class="form-control" id="myInput" placeholder="Cari...">
                  <label for="myInput">Cari berkas...</label>
                </div>
                <div class="row row-xs" id="myList">
                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mg-b-10 list-search">
                    <div class="bd pd-15 pd-sm-20 rounded-its-10 pos-relative">
                      <div class="dropdown pos-absolute t-5 r-5">
                        <a href="" class="dropdown-link btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="dropdown"><ion-icon name="ellipsis-vertical" class="mg-y-2 tx-18"></ion-icon></a>
                        <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                          <a href="" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="download-sharp" class="tx-18"></ion-icon></span></div> Unduh</a>
                        </div>
                      </div>
                      <div class="custom-control custom-checkbox pos-absolute t-15 l-10">
                        <input type="checkbox" class="custom-control-input" id="check_1" name="berkas" required>
                        <label class="custom-control-label" for="check_1"></label>
                      </div>
                      <div class="pd-y-30 mg-b-15 d-flex justify-content-center align-items-center">
                        <a href="#">
                          <img src="../../assets/img/format-pdf.svg" class="wd-50 wd-md-50 wd-lg-50">
                        </a>
                      </div>
                      <div>
                        <a href="#" class="tx-poppins tx-medium tx-color-02 mg-b-0 crop-text-1" title="File berkas dsfsdf dsfsfse dfsg.pdf">File berkas dsfsdf dsfsfse dfsg.pdf</a>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1" title="Dokumen yang diupload hanya contoh untuk keperluan demo.">5 hari &bullet; Dokumen yang diupload hanya contoh untuk keperluan demo.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mg-b-10 list-search">
                    <div class="bd pd-15 pd-sm-20 rounded-its-10 pos-relative">
                      <div class="dropdown pos-absolute t-5 r-5">
                        <a href="" class="dropdown-link btn btn-icon btn-its-custom-1 rounded-its-50p d-flex align-items-center" data-toggle="dropdown"><ion-icon name="ellipsis-vertical" class="mg-y-2 tx-18"></ion-icon></a>
                        <div class="dropdown-menu dropdown-menu-right rounded-its-10 blur-transparent">
                          <a href="" class="dropdown-item-its tx-poppins tx-medium"><div class="avatar avatar-sm mg-r-10"><span class="avatar-initial rounded-circle bg-black-1 tx-color-01"><ion-icon name="download-sharp" class="tx-18"></ion-icon></span></div> Unduh</a>
                        </div>
                      </div>
                      <div class="custom-control custom-checkbox pos-absolute t-15 l-10">
                        <input type="checkbox" class="custom-control-input" id="check_2" name="berkas">
                        <label class="custom-control-label" for="check_2"></label>
                      </div>
                      <div class="pd-y-30 mg-b-15 d-flex justify-content-center align-items-center">
                        <a href="#">
                          <img src="../../assets/img/format-img.svg" class="wd-50 wd-md-50 wd-lg-50">
                        </a>
                      </div>
                      <div>
                        <a href="#" class="tx-poppins tx-medium tx-color-02 mg-b-0 crop-text-1" title="Gambar.png">Gambar.png</a>
                        <p class="tx-13 tx-color-03 mg-b-0 crop-text-1" title="Deskripsi">1 minggu &bullet; Deskripsi</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-its-custom-1 tx-poppins tx-medium" onclick="homebtn()">Sebelumnya</button>
                <button type="submit" class="btn btn-its-3 tx-poppins tx-medium">Pilih</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function uploadbtn(){
      $('[href="#upload"]').tab('show');
    }
    function selectbtn(){
      $('[href="#select"]').tab('show');
    }
    function homebtn(){
      $('[href="#home"]').tab('show');
    }
    function tabbtn(){
      $('[href="#home"]').tab('show');
    }
  </script>
  <script>
    $('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
      var $old_tab = $($(e.target).attr("href"));
      var $new_tab = $($(e.relatedTarget).attr("href"));
  
      if($new_tab.index() < $old_tab.index()){
        $old_tab.css('position', 'relative').css("right", "0").show();
        $old_tab.animate({"right":"-100%"}, 300, function () {
          $old_tab.css("right", 0).removeAttr("style");
        });
      }
      else {
        $old_tab.css('position', 'relative').css("left", "0").show();
        $old_tab.animate({"left":"-100%"}, 300, function () {
          $old_tab.css("left", 0).removeAttr("style");
        });
      }
    });
  
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
      var $new_tab = $($(e.target).attr("href"));
      var $old_tab = $($(e.relatedTarget).attr("href"));
  
      if($new_tab.index() > $old_tab.index()){
        $new_tab.css('position', 'relative').css("right", "-2500px");
        $new_tab.animate({"right":"0"}, 500);
      }
      else {
        $new_tab.css('position', 'relative').css("left", "-2500px");
        $new_tab.animate({"left":"0"}, 500);
      }
    });
  
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      // your code on active tab shown
    });
  </script>
  
  <!-- Filter berkas -->
  <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myList .list-search").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>