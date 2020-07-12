<div class="row">
    <div class="col-md-2">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-all-users-tab" data-toggle="pill" href="#v-pills-all-users"
               role="tab"
               aria-controls="v-pills-all-users" aria-selected="false">All Users</a>
            <a class="nav-link" id="v-pills-banned-users-tab" data-toggle="pill" href="#v-pills-banned-users" role="tab"
               aria-controls="v-pills-all-banned-users" aria-selected="false">Banned Users</a>
            <a class="nav-link" id="v-pills-complete-users-tab" data-toggle="pill" href="#v-pills-complete-users"
               role="tab"
               aria-controls="v-pills-all-complete-users" aria-selected="false">Completed Users</a>

        </div>

    </div>
    <div class="col-md-10">
        <div class="row">


            <div class="field-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-all-users" role="tabpanel"
                     aria-labelledby="v-pills-all-users-tab">
                    <div class="datatable col-md-12">
                        <table id="userTable" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Age</th>
                                <th>View</th>
                                <th>Ban</th>
                                <th>Verify</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $item): ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['username'] ?></td>
                                    <td><?= $item['derivedDob'] ?></td>
                                    <td><a href="<?= base_url('admin/users/view/' . $item['id']) ?>">View</a></td>
                                    <td>
                                        <a href="<?= base_url('admin/users/ban_user/' . $item['id']) ?>"> <?= $item['banned'] ? 'Unban User' : 'Ban User' ?></a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/users/verify_user/' . $item['id']) ?>"> <?= $item['verified'] ? 'Unverify User' : 'Verify User' ?></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade " id="v-pills-banned-users" role="tabpanel"
                     aria-labelledby="v-pills-banned-users-tab">
                    <div class="datatable col-md-12">
                        <table id="userTable-2" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Age</th>
                                <th>View</th>
                                <th>Ban</th>
                                <th>Verify</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($bannedUsers as $item): ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['username'] ?></td>
                                    <td><?= $item['derivedDob'] ?></td>

                                    <td><a href="<?= base_url('admin/users/view/' . $item['id']) ?>">View</a></td>
                                    <td>
                                        <a href="<?= base_url('admin/users/ban_user/' . $item['id']) ?>"> <?= $item['banned'] ? 'Unban User' : 'Ban User' ?></a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/users/verify_user/' . $item['id']) ?>"> <?= $item['verified'] ? 'Unverify User' : 'Verify User' ?></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade " id="v-pills-complete-users" role="tabpanel"
                     aria-labelledby="v-pills-complete-users-tab">
                    <div class="datatable col-md-12">
                        <table id="userTable-3" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Age</th>
                                <th>View</th>
                                <th>Ban</th>
                                <th>Verify</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($completedUsers as $item): ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['username'] ?></td>
                                    <td><?= $item['derivedDob'] ?></td>

                                    <td><a href="<?= base_url('admin/users/view/' . $item['id']) ?>">View</a></td>
                                    <td>
                                        <a href="<?= base_url('admin/users/ban_user/' . $item['id']) ?>"> <?= $item['banned'] ? 'Unban User' : 'Ban User' ?></a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('admin/users/verify_user/' . $item['id']) ?>"> <?= $item['verified'] ? 'Unverify User' : 'Verify User' ?></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>