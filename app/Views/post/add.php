<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?php echo session()->getFlashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <?php echo session()->getFlashdata('error'); ?>
                                    </div>
                                <?php endif; ?>
                            <div class="card-body">
                                <h4 class="card-title"><?= $pages ?></h4>
                                <form method="POST" action="<?= base_url('dashboard/post/add') ?>" enctype="multipart/form-data">
                                <?= csrf_field() ?>     
                                    <input type="text" name="author" class="form-control" value="<?= $id ?>" hidden>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Judul</label>
                                                    <input type="text" name="title" class="form-control" placeholder="Judul" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Konten</label>
                                                    <textarea type="text" id="editor" name="content" class="form-control" placeholder="Konten" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Kategori</label>
                                                    <select name="category" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected>Pilih Kategori..</option>
                                                        <?php 
                                                        foreach($category as $row): ?>
                                                        <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label>Gambar</label>
                                                    <div class="custom-file">
                                                        <input type="file" name="picture" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Status</label>
                                                    <select name="status" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected>Pilih Status...</option>
                                                        <option value="draft">DRAFT</option>
                                                        <option value="publish">PUBLISH</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info"><?= $pages ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?= $this->endSection() ?>