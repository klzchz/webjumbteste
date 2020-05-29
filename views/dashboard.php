<?php

use App\Models\Product;
  $products = Product::all();
?>
<!-- Main Content -->
  <main class="content">
    <div class="header-list-page">
      <h1 class="title">Dashboard</h1>
    </div>
    <div class="infor">
      You have <?= Product::count()?> products added on this store: <a href="?page=addProduct" class="btn-action">Add new Product</a>
    </div>
    <ul class="product-list">
    <?php foreach ($products as $key => $product) {?>
   
   
      <li>
        <div class="product-image">
        
          <img src="<?= isset($product->img) ? 'assets/uploads/'.$product->img : 'assets/images/product/tenis-runner-bolt.png' ?>" layout="responsive" width="164" height="145" alt="Tênis Runner Bolt" />
        </div>
        <div class="product-info">
          <div class="product-name"><span><?= $product->name?></span></div>
          <div class="product-price"><span class="special-price"><?= $product->qtd ?> available</span> <span>R$ <?=number_format($product->price,2,',','.')?></span></div>
        </div>
      </li>
      <li>
      
    <?php } ?>
    </ul>
  </main>
  <!-- Main Content -->
