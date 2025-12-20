<?php
require_once '../connect.php';
require_once '../_base.php';

require_once '../admin/layout.php';

auth('Admin');

?>

<link rel="stylesheet" href="../css/admin.css">

<div class="layout">
    <table>
        <tr>
            <th>
                <h1><a href="/admin/product.php">Product</a></h1>
            </th>
            <th>
                <h1><a href="/admin/order.php">Order</a></h1>
            </th>
            <th>
                <h1><a href="/admin/member.php">Member</a></h1>
            </th>
            <th>
                <h1><a href="/admin/setting.php">Setting</a></h1>
            </th>
        <tr>
    </table>    
</div>

