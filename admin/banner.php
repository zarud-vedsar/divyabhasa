<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";
?>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Banner</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Banner</li>
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
                    <div class="text-end mb-4">
                        <a href="./add-banner.php" class="btn btn-primary"><i class="fas fa-edit"></i> Add banner</a>
                    </div>

                    <div class="table-responsive">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Added Date</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $select_banner = runFatch("SELECT * FROM tbl_banner ORDER BY id DESC");
                                $count = 1;
                                if ($select_banner) {
                                    foreach ($select_banner as $banner) {
                                ?>
                                        <tr id="removeBannerDelete_<?= @$banner['id'] ?>">
                                            <td><?= $count++ ?></td>
                                            <td>
                                                <h2 class="table-avatar m-0">
                                                    <a class="avatar avatar-sm me-2"><img class="avatar-img" src="../upload/<?= @$banner['image'] ?>" alt="Image"></a>
                                                </h2>
                                            </td>
                                            <td><?= @$banner['title'] ?></td>
                                            <td><?= @$banner['date'] ?></td>
                                            <td class="d-flex align-items-center pt-3">
                                                <input type="checkbox" id="switch<?= $count ?>" <?php if (@$banner['status'] == 1) echo 'checked' ?: '' ?> data-switch="bool" data-collection="banner" data-ref_id="<?= @$banner['id'] ?>" class="statusBanner" />
                                                <label for="switch<?= $count ?>" data-on-label="On" data-off-label="Off"></label>
                                            </td>
                                            <td class="text-end">
                                                <div class="actions">
                                                    <a href="./add-banner.php?banner_id=<?= @$banner['id'] ?>" class="btn btn-sm bg-danger-light" title="Edit">
                                                        <i class="feather-edit"></i>
                                                    </a>

                                                    <a href="javascript:void(0);" title="Delete" class="btn btn-sm bg-danger-light deleteBanner" data-files="image" data-remove="#removeBannerDelete_<?= @$banner['id'] ?>" data-collection="banner" data-ref_id="<?= @$banner['id'] ?>"> <i class="feather-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Overview Section -->
    </div>

    <?php
    require "./inc/footer.php";
    require "./inc/script.php";
    ?>