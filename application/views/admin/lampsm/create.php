<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Upload File Baru</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- card primary -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Pilih File Upload Semester</h3>
            </div>
            <form role="form" method="post" action="<?= base_url('admin/lampsm/create'); ?>" enctype="multipart/form-data">
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row">

                        <div class="col-md-6">
                            <h5>File Upload</h5>

                            <hr>

                            <input type="hidden" name="id_user" class="form-control form-control-sm col-10" value="<?= $usaha['user_id']; ?>">
                            <input type="hidden" name="id_usaha" class="form-control form-control-sm col-10" value="<?= $usaha['id_usaha']; ?>">
                            <input type="hidden" name="nm_usaha" class="form-control form-control-sm col-10" value="<?= $usaha['nm_usaha']; ?>">

                            <div class="form-group row field">

                                <label class="col-sm-4 col-form-label col-form-label-sm">Periode</label>
                                <div class="col-sm-6">
                                    <select name="periode" class="form-control" required>
                                        <option value="">:. Semester .:</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="input-group date" data-date="" data-date-format="yyyy-mm-dd">
                                    <label class="col-sm-4 col-form-label col-form-label-sm">Tahun</label>
                                    <div class="col-sm-6">
                                        <input id="date1" class="form-control form-control-sm col-6" type="text" name="tahun" readonly="">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label col-form-label-sm">Pilih File</label>
                                <div class="col-sm-8">
                                    <input type="file" name="u_file" class="form-control form-control-sm col-12" required>

                                </div>
                            </div>
                        </div>
                        <!-- end col-md-6 -->
                        <!-- end col-md-6 -->
                    </div>
                </div><!-- end card body-->
                <!-- card footer -->
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">upload</button>
                    <button type="button" name="batal" class="btn btn-primary" onclick="self.history.back()">batal</button>

                </div>
                <!-- end card footer -->
            </form>
        </div>
        <!-- /.card primary-->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->