<?php
require_once '../connect.php';
require_once '../_base.php';

require_once '../admin/layout.php';

auth('Admin');

?>

<link rel="stylesheet" href="../css/admin.css">

<div class="layout">
    <div class="admin-cards">
        <a href="/admin/product.php" class="admin-card">Product</a>
        <a href="/admin/order.php" class="admin-card">Order</a>
        <a href="/admin/member.php" class="admin-card">Member</a>
        <a href="/admin/setting.php" class="admin-card">Setting</a>
    </div>
</div>

