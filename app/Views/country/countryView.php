<?php if ($action == 'add'): ?>
    <div class="container margin-container">
        <div class="row">
            <a class="back" href="<?= base_url('admin/country') ?>"><i class="fa fa-angle-left" aria-hidden="true"></i>
                Back</a>
            <div class="col-md-12">
                <?php if (session('success')): ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Added Country
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <form action="<?= base_url('/admin/country/addCountryAction') ?>" method="post">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Country Name</label>
                            <input type="text" class="form-control" name="country">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php elseif ($action == 'edit'): ?>
    <div class="container margin-container">
        <div class="row">
            <a class="back" href="<?= base_url('admin/country') ?>"><i class="fa fa-angle-left" aria-hidden="true"></i>
                Back</a>
            <div class="col-md-12">
                <?php if (session('success')): ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Edited Country
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <form action="<?= base_url('/admin/country/editCountryAction') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Country Name</label>
                            <input type="text" class="form-control" name="country" value="<?= $item['field_value'] ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>
