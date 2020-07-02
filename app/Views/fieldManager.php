<div class="row   ">
    <div class="col-md-2  ">
        <div class="sidepanel nav flex-column nav-pills nav-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
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
            <a class="nav-link" id="v-pills-Denomination-tab" data-toggle="pill"  role="tab"
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
        <div class="col-md-4 mt-4">
            <h4 id="formtitle" for=""></h4>
            <div class="value-box">
                <label for="">Add a value</label>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter a new value</label>
                    <input type="text" class="form-control" id="value">
                </div>
                <button onclick="valueChanger('add');" type="button"
                        class="btn btn-primary">Submit
                </button>
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
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                </tr>
                <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
