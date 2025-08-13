<?php
$currentFileName = basename($_SERVER['PHP_SELF']);
// echo $currentFileName;
?>

</div>
    <footer class="bottom-footer" id="mobile-footer">
        <div class="bot-item">
            <a href="./classes.php" class="<?= ($currentFileName=="classes.php")?'bot-active': '' ?>"><i class="fss fas fa-users"></i> Batches</a>
        </div>
        <div class="bot-item bot-2">
            <a href="./zarud-learning.php" class="<?= ($currentFileName=="zarud-learning.php")?'bot-active': '' ?>"><i class="fss fas fa-book"></i>My Learning</a>
        </div>
        <div class="bot-item bot-center">
            <a href="./index.php" class="center-home  <?= ($currentFileName=="index.php")?'bot-active': '' ?>" style="font-size: 1.3rem !important"><i class="fas fa-home"></i></a>
        </div>
        <div class="bot-item bot-3">
            <a href="./mem-zarud-history.php" class="<?= ($currentFileName=="mem-zarud-history.php")?'bot-active': '' ?>"><i class="fss fas fa-history"></i> Batch Purchases</a>
        </div>
        <div class="bot-item">
            <a href="./profile.php" class="<?= ($currentFileName=="profile.php")?'bot-active': '' ?>"><i class="fss fas fa-user"></i> Account</a>
        </div>
    </footer>


<!-- Footer -->
<footer class="text-end px-3" id="desktop-footer">
    <p>Developed By <a href="https://www.vedsar.com/" target="_blank">Vedsar India Private Limited. </a></p>
</footer>
<!-- /Footer -->

</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->