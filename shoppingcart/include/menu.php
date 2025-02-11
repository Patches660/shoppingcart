<header class="d-flex justify-content-center py-3 sticky-top bg-light border-bottom shadow-sm">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <span class="nav-link">
                <?php 
                // Check if the username is set in the session
                if (isset($_SESSION['username'])) {
                    echo "Welcome " . $_SESSION['username'];
                } else {
                    echo "Welcome Guest"; // or handle the case when no user is logged in
                }
                ?>
            </span>
        </li>
        <li class="nav-item"><a href="<?php echo $base_url; ?>/product-list.php" class="nav-link">รายการสินค้า</a></li>
        <li class="nav-item"><a href="<?php echo $base_url; ?>/cart.php" class="nav-link">รถเข็น (<?php echo count($_SESSION['cart'] ?? []); ?>)</a></li>
        <li class="nav-item"><a href="<?php echo $base_url; ?>/index.php" class="nav-link">หลังบ้าน</a></li>
        <li class="nav-item"><a href="<?php echo $base_url; ?>/orders.php" class="nav-link">คำสั่งซื้อทั้งหมด</a></li>
        <?php if (isset($_SESSION['username'])): ?>
            <li class="nav-item"><a href="<?php echo $base_url; ?>/logout.php" class="nav-link">ออกจากระบบ</a></li>
        <?php else: ?>
            <li class="nav-item"><a href="<?php echo $base_url; ?>/login.php" class="nav-link">เข้าสู่ระบบ</a></li>
        <?php endif; ?>
    </ul>
</header>
