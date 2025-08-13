<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";

if (isset($_GET['trainer_id']) && !empty($_GET['trainer_id'])) {
    $trainer_id = $_GET['trainer_id'];

    $select_trainer = runFatch("SELECT * FROM tbl_trainer WHERE id = '{$trainer_id}'");
}
?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Trainer Edit</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="./trainer.php">Trainer</a></li>
                            <li class="breadcrumb-item active">Trainer Add/Edit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Overview Section -->
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form id="register_trainer">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title student-info">Trainer Information</h5>
                            </div>

                            <input type="hidden" name="hidden_id" value="<?= @$select_trainer[0]['id'] ?>">

                            <div class="col-12 mb-3">
                                <input type="hidden" name="hidden_profile" value="<?= @$select_trainer[0]['profile'] ?>">

                                <label for="image" class="mb-1">Profile Image <span class="text-danger">*</span></label>
                                <div class="uploadOuter mb-3">
                                    <span class="dragBox">
                                        Drag and Drop image here
                                        <input type="file" name="profile" onChange="dragNdrop(event)" ondragover="drag()" ondrop="drop()" id="uploadFile" />
                                    </span>
                                </div>
                                <div id="preview">
                                    <?php
                                    if (isset($select_trainer[0]['profile']) && !empty($select_trainer[0]['profile'])) {
                                    ?>
                                        <img src="../upload/<?= @$select_trainer[0]['profile'] ?>" alt="image-priview">
                                    <?php
                                    } else {
                                    ?>
                                        <img src="./assets/img/demo.png" alt="image-priview">
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Trainer Name <span class="login-danger">*</span></label>
                                    <input name="name" type="text" class="form-control" placeholder="Enter Trainer Name" value="<?= @$select_trainer[0]['name'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Trainer Designation <span class="login-danger">*</span></label>
                                    <input name="designation" type="text" class="form-control" placeholder="Enter Trainer Designation" value="<?= @$select_trainer[0]['designation'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Phone No <span class="login-danger">*</span></label>
                                    <input name="phone" type="number" class="form-control max_length_10" placeholder="Enter Phone No" value="<?= @$select_trainer[0]['phone'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="Enter Email" value="<?= @$select_trainer[0]['email'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Address</label>
                                    <input name="address" type="text" class="form-control" placeholder="Enter Address" value="<?= @$select_trainer[0]['address'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>Zip Code</label>
                                    <input name="zip_code" type="number" class="form-control" placeholder="Enter Zip Code" value="<?= @$select_trainer[0]['zip_code'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group local-forms">
                                    <label>State</label>
                                    <select name="state_id" class="form-control" id="select_state">
                                        <option value="">-- Select --</option>
                                        <?php
                                        $select_state = runFatch("SELECT * FROM tbl_states");
                                        if ($select_state) {
                                            foreach ($select_state as $state) {
                                                $selected = @$select_trainer[0]['state_id'] == $state['id'] ? "selected" : "";
                                        ?>
                                                <option value="<?= $state['id'] ?>" <?= $selected ?>><?= $state['name'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group local-forms" id="city_div" style="display: none;">
                                    <label>City</label>
                                    <select name="city_id" class="form-control" id="select_city" style="display: none;">

                                        <?php
                                        $select_cities = runFatch("SELECT * FROM tbl_cities");
                                        print_r($select_cities);
                                        if ($select_cities) {
                                            foreach ($select_cities as $cities) {
                                                $selected = $select_trainer[0]['city_id'] == $cities['id'] ? 'selected' : '';
                                        ?>
                                                <option <?= $selected ?> value="<?= $cities['id'] ?>">
                                                    <?= $cities['city'] ?>
                                                </option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- /Overview Section -->
    </div>

    <?php
    require "./inc/footer.php";
    require "./inc/script.php";
    ?>

    <script>
        $(document).on('change', '#select_state', function() {
            const state = $(this).val();

            $.ajax({
                url: './inc/config/get-city.php',
                type: "POST",
                data: {
                    state
                },
                success: function(response) {
                    const res_json = JSON.parse(response);
                    console.log(state);
                    $('#select_city').hide();
                    let options = '<option value="">Select City</option>';
                    if (res_json.length) {
                        res_json.forEach(data => {
                            options += `<option value='${data.id}' >${data.city}</option>`;
                        });
                        $('#city_div').show(300);
                        $('#select_city').show(300).html(options);
                    }
                }
            });
        });

        $(document).on('change', '#select_state', function(e) {
            e.preventDefault();
            const city = $('#select_city').val();
        })

        window.onload = function() {
            const selectState = document.querySelector('#select_state');
            const selectCity = document.querySelector('#select_city');
            const selectCityMain = document.querySelector('#city_div');

            const stateValue = selectState.value;
            if (stateValue) {
                selectCityMain.style.display = 'block';
                selectCity.style.display = 'block';
            } else {
                selectCityMain.style.display = 'none';
                selectCity.style.display = 'none';
            }
        };
    </script>