<div class="container margin-container">
    <div class="row action-btns">
        <div class="col-md-12">
            <a class="back" href="<?= base_url('admin/users') ?>"><i class="fa fa-angle-left" aria-hidden="true"></i>
                Back</a>

            <div class="wrapper">
                <a href="<?= base_url('admin/users/verify_user/' . $details['id']) ?>?>">
                    <button type="button" class="btn <?= $details['verified'] ? 'btn-danger' : 'btn-success' ?>
             "> <?= $details['verified'] ? 'Unverify User' : 'Verify User' ?></button>
                </a>
                <a href="<?= base_url('admin/users/ban_user/' . $details['id']) ?>?>">
                    <button type="button" class="btn <?= $details['banned'] ? 'btn-success ' : 'btn-danger' ?>
             "> <?= $details['banned'] ? 'Unban User' : 'Ban User' ?></button>
                </a>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="row">

            <div class="col-md-12">
                <div class="heading">User Password</div>
            </div>
            <div class="col-md-12">
                <?php if (session('success')): ?>
                    <div class="alert alert-success" role="alert">
                        Successfully changed password
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <form action="<?= base_url('admin/users/setUserPassword') ?>" method="post">
                    <input type="hidden" name="id"  value="<?= $details['id'] ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="text" class="form-control" name="password"
                                       value="<?= $details['password'] ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="heading">User Details</div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" disabled value="<?= $details['username'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="heading">Basic Details</div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" disabled value="<?= $user['name'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Surname</label>
                    <input type="text" class="form-control" disabled value="<?= $user['surname'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Date of Birth</label>
                    <input type="text" class="form-control" disabled value="<?= $user['dob'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <input type="text" class="form-control" disabled value="<?= $user['gender'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Martial Status</label>
                    <input type="text" class="form-control" disabled value="<?= $user['martial_status'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No</label>
                    <input type="text" class="form-control" disabled value="<?= $user['mobile_no'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Country</label>
                    <input type="text" class="form-control" disabled value="<?= $user['country'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Country</label>
                    <input type="text" class="form-control" disabled value="<?= $user['country'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">State</label>
                    <input type="text" class="form-control" disabled value="<?= $user['state'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" disabled value="<?= $user['city'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Postal Code</label>
                    <input type="text" class="form-control" disabled value="<?= $user['postal_code'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="heading">Church Details</div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name of Church Priest</label>
                    <input type="text" class="form-control" disabled value="<?= $user['name_church_priest'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Church Contact No</label>
                    <input type="text" class="form-control" disabled value="<?= $user['church_contact_no'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Denomination</label>
                    <input type="text" class="form-control" disabled value="<?= $user['denomination'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name of Church</label>
                    <input type="text" class="form-control" disabled value="<?= $user['name_church'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Church Address</label>
                    <input type="text" class="form-control" disabled value="<?= $user['church_add'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Year of Baptism</label>
                    <input type="text" class="form-control" disabled value="<?= $user['year_baptism'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Ministry</label>
                    <input type="text" class="form-control" disabled value="<?= $user['ministry'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="heading">User Family Details</div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Fathers Name</label>
                    <input type="text" class="form-control" disabled value="<?= $user['fathers_name'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mothers Name</label>
                    <input type="text" class="form-control" disabled value="<?= $user['mothers_name'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">No. Brothers</label>
                    <input type="text" class="form-control" disabled value="<?= $user['no_brothers'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">No. Sister</label>
                    <input type="text" class="form-control" disabled value="<?= $user['no_sisters'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Parent Contact No.</label>
                    <input type="text" class="form-control" disabled value="<?= $user['parent_contact'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="heading">User Personal Details</div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Highest Education</label>
                    <input type="text" class="form-control" disabled value="<?= $user['highest_edu'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Specialization</label>
                    <input type="text" class="form-control" disabled value="<?= $user['specialization'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Occupation</label>
                    <input type="text" class="form-control" disabled value="<?= $user['occupation'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Designation</label>
                    <input type="text" class="form-control" disabled value="<?= $user['designation'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Annual Income</label>
                    <input type="text" class="form-control" disabled value="<?= $user['annual_income'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mother Tongue</label>
                    <input type="text" class="form-control" disabled value="<?= $user['mother_tongue'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Language</label>
                    <input type="text" class="form-control" disabled value="<?= $user['language'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Drinks</label>
                    <input type="text" class="form-control" disabled value="<?= $user['drink'] ? 'Yes' : 'No' ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Smoke</label>
                    <input type="text" class="form-control" disabled value="<?= $user['smoke'] ? 'Yes' : 'No' ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Diet</label>
                    <input type="text" class="form-control" disabled value="<?= $user['diet'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Partner Expectation</label>
                    <input type="text" class="form-control" disabled value="<?= $user['partner_expectation'] ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="heading">User Physical Details</div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Height</label>
                    <input type="text" class="form-control" disabled value="<?= $user['height'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Weight</label>
                    <input type="text" class="form-control" disabled value="<?= $user['weight'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Complexion</label>
                    <input type="text" class="form-control" disabled value="<?= $user['complexion'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Blood Group</label>
                    <input type="text" class="form-control" disabled value="<?= $user['blood_group'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Body Type</label>
                    <input type="text" class="form-control" disabled value="<?= $user['body_type'] ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Disability</label>
                    <input type="text" class="form-control" disabled value="<?= $user['disability'] ?>">
                </div>
            </div>
        </div>
    </div>
