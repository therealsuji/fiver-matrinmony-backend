<?php if ($action == 'add'): ?>
    <div class="container margin-container">
        <div class="row">
            <a class="back" href="<?= base_url('admin/country') ?>"><i class="fa fa-angle-left" aria-hidden="true"></i>
                Back</a>
            <div class="col-md-12">
                <?php if (session('success')): ?>
                    <div class="alert alert-success" role="alert">
                        Successfully Added City
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-12">

                <form action="<?= base_url('/admin/country/addCityAction') ?>" method="post">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Select State</label>
                            <select name="state" class="form-control">
                                <?php foreach ($state as $val): ?>
                                    <option value="<?= $val['id'] ?>"><?= $val['field_value']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>City Name</label>
                            <input type="text" class="form-control" name="city">
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
                <form action="<?= base_url('/admin/country/editCityAction') ?>" method="post">
                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Select State</label>
                            <select name="state" class="form-control">
                                <?php foreach ($state as $val): ?>
                                    <option <?php if ($item['state'] == $val['id']) {
                                        echo 'selected';
                                    } ?> value="<?= $val['id'] ?>"><?= $val['field_value']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>City Name</label>
                            <input type="text" class="form-control" name="city" value="<?= $item['field_value'] ?>">
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
