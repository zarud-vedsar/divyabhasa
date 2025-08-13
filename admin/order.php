<?php
require "./inc/head.php";
require "./inc/headbar.php";
require "./inc/sidebar.php";
?>

<style>
    .p_card {
        width: 200px;
        margin: 0;
    }
</style>

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Order</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Order</li>
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

                    <div class="table-responsive">
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Order Id</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Fetch total number of records
                                $total_records_query = runFatch("SELECT COUNT(*) AS total_records FROM tbl_order")[0];
                                $total_records = $total_records_query['total_records'];

                                // Pagination configuration
                                $records_per_page = 500; // Number of records per page
                                $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number, default is 1
                                $offset = ($page - 1) * $records_per_page; // Offset for SQL query


                                // Fetch records with pagination
                                $select_Order = runFatch("SELECT * FROM tbl_order ORDER BY id DESC LIMIT $offset, $records_per_page");
                                $count = $offset + 1; // Counter for serial number

                                if ($select_Order) {
                                    foreach ($select_Order as $order) {
                                ?>
                                        <tr>
                                            <td><?= $count++ ?></td>
                                            <td><?= @$order['order_id'] ?></td>
                                            <td>
                                                <div class="d-flex gap-3">
                                                    <?php
                                                    $product_select = @$order['products'];
                                                    $product_item = json_decode($product_select, true);

                                                    if ($product_item) {
                                                        foreach ($product_item as $product) {
                                                            $product_id = @$product['product_id'];
                                                            $select_product = runFatch("SELECT * FROM tbl_product WHERE id = '{$product_id} '");
                                                    ?>

                                                            <div class="card p_card">
                                                                <a href="./product-view.php?product_id=<?= @$product_id ?>">
                                                                    <div class="card-body d-flex flex-column align-items-center">
                                                                        <img src="../upload/<?= @$select_product[0]['image'] ?>" alt="" class="img-fluid" style="height: 100px;">
                                                                        <p class="text-dark mt-3"><?= substr(@$select_product[0]['product_name'], 0, 15) . "..." ?></p>
                                                                        <div class="d-flex gap-3 justify-content-between">
                                                                            <h6>Qty:<?= @$product['qty']; ?></h6>
                                                                            <h6>Price:<?= @$product['price']; ?></h6>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </td>
                                            <td><?= $order['date'] ?></td>
                                            <td>₹<?= $order['amount'] ?></td>
                                            <td>
                                                <?php
                                                $delivery_status = $order['delivery_status'];
                                                if (!$delivery_status) {
                                                ?>
                                                    <p class="m-0 text-warning">Pending</p>
                                                <?php
                                                } else {
                                                    ?>
                                                    <p class="m-0 text-info"><?= $order['delivery_status'] ?></p>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td class="text-end">
                                                <button class="btn btn-danger" id="change_delivery_status" data-order_id="<?= @$order['id'] ?>" data-bs-toggle="modal" data-bs-target="#top-modal">Delivery Status</button>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <?php
                    // Calculate total number of pages
                    $total_pages = ceil($total_records / $records_per_page);

                    // Calculate number of pages to display
                    $max_pages_displayed = 10; // Adjust this number as needed
                    $start_page = max(1, $page - floor($max_pages_displayed / 2));
                    $end_page = min($start_page + $max_pages_displayed - 1, $total_pages);

                    // Generate pagination links
                    ?>
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-end">
                                    <?php if ($page > 1) : ?>
                                        <li class="page-item"><a class="page-link" href="?page=1">First</a></li>
                                        <li class="page-item"><a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a></li>
                                    <?php endif; ?>
                                    <?php for ($i = $start_page; $i <= $end_page; $i++) : ?>
                                        <li class="page-item <?= ($page == $i) ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                                    <?php endfor; ?>
                                    <?php if ($page < $total_pages) : ?>
                                        <li class="page-item"><a class="page-link" href="?page=<?= $page + 1 ?>">Next</a></li>
                                        <li class="page-item"><a class="page-link" href="?page=<?= $total_pages ?>">Last</a></li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Overview Section -->

    </div>


    <div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-top">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="topModalLabel">Delivery Status</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="delivery_status">
                    <div class="modal-body">
                        <h5>Delivery Status</h5>
                        <div class="col-md-12">
                            <input name="hidden_id" type="hidden" id="order_id">
                            <div class="form-group local-forms m-0 my-3">
                                <select name="delivery_status" class="form-control">
                                    <option value="">Select Delivery Status</option>
                                    <option value="Canceled">Canceled</option>
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="In Transport">In Transport</option>
                                    <option value="Out For Delivery">Out For Delivery</option>
                                    <option value="Delivered">Delivered</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    require "./inc/footer.php";
    require "./inc/script.php";
    ?>

    <script>
        $(document).on('click', '#change_delivery_status', function() {
            let order_id = $(this).data('order_id');
            $('#order_id').val(order_id);
        });
    </script>