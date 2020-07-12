<div class="row">
    <div class="col-md-2">

        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-country-tab" data-toggle="pill" href="#v-pills-country" role="tab"
               aria-controls="v-pills-country" aria-selected="true">Country</a>
            <a class="nav-link " id="v-pills-state-tab" data-toggle="pill" href="#v-pills-state" role="tab"
               aria-controls="v-pills-state" aria-selected="true">State</a>
            <a class="nav-link " id="v-pills-city-tab" data-toggle="pill" href="#v-pills-city" role="tab"
               aria-controls="v-pills-city" aria-selected="true">City</a>
        </div>
    </div>
    <div class="col-md-10">

        <div class="tab-content margin-container" id="v-pills-tabContent">
            <div class="col-md-12">
                <?php if (session('success')): ?>
                    <div class="alert alert-success" role="alert" style="text-transform: capitalize">
                        Successfully deleted <?= (session('type'))?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="tab-pane fade show active" id="v-pills-country" role="tabpanel"
                 aria-labelledby="v-pills-country-tab">
                <div class="container">

                    <div class="row action-btns">
                        <div class="col-md-12">
                            <div class="wrapper">
                                <a href="<?= base_url('admin/country/add_country/') ?>">
                                    <button type="button" class="btn btn-primary">Add Country</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 datatable">
                    <table id="tableCountry" class="wide-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Country</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($country as $item): ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['field_value'] ?></td>
                                <td><a href="<?= base_url('/admin/country/edit_country/' . $item['id']) ?>">
                                        <i class="far fa-edit icon"></i></a></td>
                                <td><a href="<?= base_url('/admin/country/deleteField/' . $item['id'].'/country') ?>"><i
                                                class="far fa-trash-alt icon"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade " id="v-pills-state" role="tabpanel" aria-labelledby="v-pills-state-tab">
                <div class="container">

                    <div class="row action-btns">
                        <div class="col-md-12">
                            <div class="wrapper">
                                <a href="<?= base_url('admin/country/add_state/') ?>">
                                    <button type="button" class="btn btn-primary">Add State</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 datatable">
                    <table id="tableState" class="wide-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($state as $item): ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['country'] ?></td>
                                <td><?= $item['field_value'] ?></td>
                                <td><a href="<?= base_url('/admin/country/edit_state/' . $item['id']) ?>"><i
                                                class="far fa-edit icon"></i></a></td>
                                <td><a href="<?= base_url('/admin/country/deleteField/' . $item['id'].'/state') ?>"><i
                                                class="far fa-trash-alt icon"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade  " id="v-pills-city" role="tabpanel" aria-labelledby="v-pills-city-tab">
                <div class="container">
                    <div class="row action-btns">
                        <div class="col-md-12">
                            <div class="wrapper">
                                <a href="<?= base_url('admin/country/add_city/') ?>">
                                    <button type="button" class="btn btn-primary">Add City</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 datatable">
                    <table id="tableCity" class="wide-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($city as $item): ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['country'] ?></td>
                                <td><?= $item['state'] ?></td>
                                <td><?= $item['field_value'] ?></td>
                                <td><a href="<?= base_url('/admin/country/edit_city/' . $item['id']) ?>"><i
                                                class="far fa-edit icon"></i></a></td>
                                <td><a href="<?= base_url('/admin/country/deleteField/' . $item['id'].'/city') ?>"><i
                                                class="far fa-trash-alt icon"></i></a></td>

                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>