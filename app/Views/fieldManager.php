<div class="row">
    <div class="col-md-2  ">
        <div class="sidepanel nav flex-column nav-pills nav-column" id="v-pills-tab-fields" role="tablist"
             aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-annual-income-tab" data-toggle="pill"
               role="tab" data-formtype="annualincome"
               aria-controls="v-pills-annual-income" aria-selected="true">Annual Income</a>
            <a class="nav-link" id="v-pills-blood-group-tab" data-toggle="pill" role="tab"
               data-formtype="bloodgroup"
               aria-controls="v-pills-blood-group" aria-selected="false">Blood Group</a>
            <a class="nav-link" id="v-pills-body-type-tab" data-toggle="pill" role="tab"
               data-formtype="bodytype"
               aria-controls="v-pills-body-type" aria-selected="false">Body Type</a>
            <a class="nav-link" id="v-pills-Complexion-tab" data-toggle="pill" role="tab"
               data-formtype="complexion"
               aria-controls="v-pills-Complexion" aria-selected="false">Complexion</a>
            <a class="nav-link" id="v-pills-Denomination-tab" data-toggle="pill" role="tab"
               data-formtype="denomination"
               aria-controls="v-pills-Denomination" aria-selected="false">Denomination</a>
            <a class="nav-link" id="v-pills-diet-tab" data-toggle="pill" role="tab"
               data-formtype="diet"
               aria-controls="v-pills-diet" aria-selected="false">Diet</a>
            <a class="nav-link" id="v-pills-Height-tab" data-toggle="pill"
               role="tab"
               data-formtype="height"
               aria-controls="v-pills-Height-" aria-selected="false">Height</a>
            <a class="nav-link" id="v-pills-Highest-education-tab" data-toggle="pill"
               role="tab"
               data-formtype="highestedu"
               aria-controls="v-pills-Highest-education" aria-selected="false">Highest Education</a>
            <a class="nav-link" id="v-pills-language-tab" data-toggle="pill" role="tab"
               data-formtype="language"
               aria-controls="v-pills-language" aria-selected="false">Language</a>
            <a class="nav-link" id="v-pills-martial-status-tab" data-toggle="pill"
               role="tab"
               data-formtype="martialstatus"
               aria-controls="v-pills-martial-status" aria-selected="false">Marital Status</a>
            <a class="nav-link" id="v-pills-occupation-tab" data-toggle="pill" role="tab"
               data-formtype="occupation"
               aria-controls="v-pills-occupation" aria-selected="false">Occupation</a>
            <a class="nav-link" id="v-pills-marital-expectation-tab" data-toggle="pill"
               role="tab"
               data-formtype="partnerexpec"
               aria-controls="v-pills-partnerexpec" aria-selected="false">Partner Expectation</a>

        </div>
    </div>

    <div class="col-md-10">

        <div id="static-content">
            <h4 style="margin-top: 25px;" id="formtitle"></h4>
            <div class="row">
                <div class="col-md-5 mt-2">
                    <div class="value-box">
                        <label class="value-edit-label" for="">Add a value</label>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter a new value</label>
                            <input type="text" class="form-control" id="new-value">
                        </div>
                        <button onclick="addValue();" type="button"
                                class="btn btn-primary">Submit
                        </button>
                    </div>
                </div>
                <div class="col-md-5 mt-2">
                    <h4 id="formtitle"></h4>
                    <div class="value-box" id="edit-box" style="display: none">
                        <div class="label-wrapper">
                            <label class="value-edit-label" for="">Edit a value</label>
                            <i onclick="closeEditBox()" class="fas fa-times-circle icon"></i>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Enter a new value</label>
                            <input type="text" class="form-control" id="edit-value">
                            <input type="hidden" value="" id="edit-id">
                        </div>
                        <button onclick="editValue();" type="button"
                                class="btn btn-primary">Submit
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-12 datatable">
                <table id="table" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Value</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $item): ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['field_value'] ?></td>
                            <td><i class="far fa-edit icon"
                                   onclick="openEditBox('<?= $item['field_value'] ?>',<?= $item['id'] ?>)"></i></td>
                            <td><i class="fas fa-trash-alt icon" onclick="deleteValue(<?= $item['id'] ?>)"></i></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
