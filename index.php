<?php
        error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

    require_once 'connect.php';
    require_once '_head.php';
    require_once '_base.php';

    $user_id = $_SESSION['user_id'] ?? null;

    $stm = $_db->prepare('
        SELECT p.*, SUM(ol.quantity) AS total_quantity
        FROM orderlist ol
        JOIN product p ON p.product_id = ol.product_id
        WHERE status = 1
        GROUP BY p.product_id
        ORDER BY total_quantity DESC
        LIMIT 3
    ');
    $stm->execute();
    $top_products = $stm->fetchAll();
?>

<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" href="../css/allbackgroundimg.css">
<link rel="stylesheet" href="../css/shopnow.css">


<style>
    .zero_img img {
        height: 80%;
        animation: slideIn 2s ease-in-out;
    }

    @keyframes slideIn {
        from { opacity: 0; transform: translateY(-50px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .top_seller {
        text-align: center;
        margin: 20px 0;
    }

    .top-seller-title {
        font-size: 48px;
        background: linear-gradient(45deg, #b2a5ff, #ff8fc7);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        animation: glow 2s ease-in-out infinite alternate;
    }

    @keyframes glow {
        from { text-shadow: 2px 2px 4px rgba(0,0,0,0.3); }
        to { text-shadow: 2px 2px 8px rgba(0,0,0,0.5); }
    }

    .product-card {
        animation: fadeInUp 1s ease-in-out;
        animation-fill-mode: both;
        border: 2px solid #ddd;
        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .product-card:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 24px rgba(0,0,0,0.3);
    }

    .product-card:nth-child(1) { animation-delay: 0.2s; }
    .product-card:nth-child(2) { animation-delay: 0.4s; }
    .product-card:nth-child(3) { animation-delay: 0.6s; }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
        .product-container {
            gap: 20px;
        }
        .product-card {
            width: 100%;
            max-width: 300px;
        }
        .top-seller-title {
            font-size: 36px;
        }
    }
</style>

<section class="top_seller">
    <h2 class="top-seller-title">🔥Top Seller🔥</h2>
</section>

<div class="background">
    <img src="/icon/background1.jpg" alt="Our background image">
</div>

<div class="product-container">
    <?php foreach ($top_products as $t): ?>
        <div class="product-card">
            <?php if ($user): ?>
                <a href="./page/purchase/product.php?user_id=<?= $user->user_id ?>&p_id=<?= $t->product_id ?>" class="product-cell">
            <?php else: ?>
                <a href="page/user/login.php" style="text-decoration: none;">
            <?php endif ?>
                <img src="./image/<?= $t->image ?>" alt="product_img">
                <h2><?= $t->product_name ?></h2><br>
                <p><?= $t->flavour ?></p><br>
                <h3>RM <?= $t->price ?></h3>
            </a>
        </div>
    <?php endforeach; ?>  
</div><br>


<?php 
    include '_foot.php';
?>


