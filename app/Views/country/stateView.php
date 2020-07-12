<?php if ($action == 'add'): ?>
    <div class="container margin-container">
        <div class="row">
            <a class="back" href="<?= base_url('admin/country') ?>"><i class="fa fa-angle-left" aria-hidden="true"></i>
                Back</a>
            <div class="col-md-12">
                <?php if (session('success')): ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Added State
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <form action="<?= base_url('/admin/country/addStateAction') ?>" method="post">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Select Country</label>
                            <select name="country" class="form-control">
                                <?php foreach ($country as $val): ?>
                                    <option value="<?= $val['id'] ?>"><?= $val['field_value']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>State Name</label>
                            <input type="text" class="form-control" name="state">
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
                        Successfully Edited State
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <form action="<?= base_url('/admin/country/editStateAction') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Select Country</label>
                            <select name="country" class="form-control">
                                <?php foreach ($country as $val): ?>
                                    <option <?php if ($item['country'] == $val['id']) {
                                        echo 'selected';
                                    } ?> value="<?= $val['id'] ?>"><?= $val['field_value']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Country Name</label>
                            <input type="text" class="form-control" name="state" value="<?= $item['field_value'] ?>">
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
