<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengaturan Sistem</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <!-- /.content-header -->
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#slide" data-toggle="tab">Slide Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#slide2" data-toggle="tab">Slide Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#running_text" data-toggle="tab">Running Text</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-two-tabContent">
                                <div class="tab-pane active" id="slide">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a class="btn btn-sm btn-success" href="" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus"></i> Tambah Slide</a>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped table-responsive datatable">
                                                <thead>
                                                    <tr align="center">
                                                        <th width="5%">No</th>
                                                        <th width="50%">Nama Slide</th>
                                                        <th>Nama File</th>
                                                        <th>Jenis</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    foreach ($slide as $row) { ?>
                                                        <tr>
                                                            <td align="center"><?php echo $i; ?></td>
                                                            <td><?php echo $row->nama_slide; ?></td>
                                                            <td><?php echo $row->nama_file;; ?></td>
                                                            <td><?php echo $row->jenis;; ?></td>
                                                            <td>
                                                                <a href="<?php echo site_url('media/deleteSlide/' . $row->id_slide . '/' . $row->nama_file) ?>" title="Hapus" class="btn btn-sm btn-danger beforeDeleteK"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        $i++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="slide2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a class="btn btn-sm btn-success" href="" data-toggle="modal" data-target="#tambahBeritaModal"><i class="fas fa-plus"></i> Tambah Berita</a>
                                            <a class="btn btn-sm btn-primary" href="<?php echo base_url() ?>assets/ITENAS_TEMPLATE.png"><i class="fas fa-download"></i> Template Berita</a>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped table-responsive datatable">
                                                <thead>
                                                    <tr align="center">
                                                        <th width="5%">No</th>
                                                        <th width="50%">Judul</th>
                                                        <th>Nama File</th>
                                                        <th>Kategori</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    foreach ($berita as $row) { ?>
                                                        <tr>
                                                            <td align="center"><?php echo $i; ?></td>
                                                            <td><?php echo $row->judul; ?></td>
                                                            <td><?php echo $row->nama_file; ?></td>
                                                            <td><?php echo $row->kategori; ?></td>
                                                            <td>
                                                                <a href="<?php echo site_url('media/deleteBerita/' . $row->id_berita . '/' . $row->nama_file) ?>" title="Hapus" class="btn btn-sm btn-danger beforeDeleteK"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        $i++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="running_text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a class="btn btn-sm btn-success" href="" data-toggle="modal" data-target="#tambahrunModal"><i class="fas fa-plus"></i> Tambah Teks</a>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-striped table-responsive datatable">
                                                <thead>
                                                    <tr align="center">
                                                        <th width="5%">No</th>
                                                        <th width="80%">Teks</th>
                                                        <th width="15%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    foreach ($running_text as $row) { ?>
                                                        <tr>
                                                            <td align="center"><?php echo $i; ?></td>
                                                            <td><?php echo $row->desk_text; ?></td>
                                                            <td>
                                                                <a href="" class="btn btn-sm btn-info" title="Edit" data-toggle="modal" data-target="#editrunModal<?php echo $row->id_text ?>"><i class="fas fa-edit"></i></a> |
                                                                <a href="<?php echo site_url('media/deleteRunning/' . $row->id_text) ?>" title="Hapus" class="btn btn-sm btn-danger beforeDeleteK"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        $i++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.k -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>

<div id="tambahModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Slide</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formSlide" method="post" action="<?php echo site_url('media/addSlide') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col col-lg-12">
                            <div class="form-group">
                                <label>Nama Slide</label>
                                <input type="text" name="nama_slide" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Upload File</label>
                                <input type="file" class="dropify" data-allowed-file-extensions="png jpg mp4" name="file" />
                            </div>
                            <div class="modal-footer">
                                <button id="btnSubmit" type="submit" class="btn btn-primary pull-right" value="Tambah" name="submit">Submit</button>
                                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="tambahBeritaModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Berita</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('media/addberita') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col col-lg-12">
                            <div class="form-group">
                                <label>Nama Berita</label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Upload Gambar</label>
                                <input type="file" class="dropify" data-allowed-file-extensions="png jpg jpeg" name="file" />
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori">
                                    <option value="" selected disabled hidden>Pilih...</option>
                                    <option value="Kemahasiswaan">Kemahasiswaan</option>
                                    <option value="Karir & Alumni">Karir & Alumni</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary pull-right" value="Tambah" name="submit">Submit</button>
                                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="tambahrunModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Running Text</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('media/addRunning') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col col-lg-12">
                            <div class="form-group">
                                <label>Deskripsi Running Text</label>
                                <textarea name="desk_text" class="form-control"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary pull-right" value="Tambah" name="submit">Submit</button>
                                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
foreach ($running_text as $row) { ?>
    <div id="editrunModal<?php echo $row->id_text ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit Running Text</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?php echo site_url('media/updateRunning/' . $row->id_text) ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label>Deskripsi Running Text</label>
                                    <textarea name="desk_text" class="form-control" rows="6"><?php echo $row->desk_text ?></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary pull-right" value="Tambah" name="submit">Edit</button>
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    $i++;
}
?>
<script>
    $('#btnSubmit').click(function() {
        // Get userid from checked checkboxes
        Swal.fire({
            imageUrl: "<?= base_url() ?>assets/img/loader.gif",
            imageHeight: 30,
            title: "Checking...",
            text: "Please wait",
            showConfirmButton: false,
            showCancelButton: false,
            showCloseButton: false,
            allowEscapeKey: false,
            allowOutsideClick: false
        });
        // AJAX request
        $.ajax({
            url: '<?= base_url() ?>media/pengaturan/addSlide',
            type: 'post',
            data: $("#formSlide").serialize() + '&form_name=' + $("#formSlide").attr("name"),
            success: function(data) {
                Swal.fire({
                    title: 'Data Berhasil Disimpan',
                    icon: 'success',
                    showConfirmButton: false,
                    showCancelButton: false,
                    showCloseButton: false,
                    allowEscapeKey: false,
                    allowOutsideClick: false
                })
            },
            error: function(data) {
                Swal.fire({
                    title: 'Data Gagal Disimpan',
                    icon: 'Error'
                })
            }
        });
    });
</script>