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

<style>
.layout {
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

.admin-cards {
    display: flex;
    gap: 30px; /* space between buttons */
    flex-wrap: wrap;
}

.admin-card {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 150px;
    height: 150px;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
    text-decoration: none;
    border-radius: 20px;
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
    transition: all 0.3s ease;
}

.admin-card:hover {
    transform: translateY(-5px) scale(1.05);
    box-shadow: 0 12px 20px rgba(0,0,0,0.4);
    background: linear-gradient(135deg, #2575fc, #6a11cb);
    color: #fff;
}
</style>


