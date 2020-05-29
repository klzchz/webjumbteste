<?php

use App\Models\Product;

  session_start();
  $path = "../app/http/controllers/products/crud/delete.php?id=";

  $product = new Product();
  $products = $product->with('categories')->get();

?>
  <!-- Main Content -->
  <main class="content">
  <?php 
      if(isset($_SESSION['msg']))
      {
          echo $_SESSION['msg'];
      }
      unset($_SESSION['msg']);
    ?>
    <div class="header-list-page">
      <h1 class="title">Products</h1>
      <div class="col-md-2">
        <a href="?page=addProduct"  class="btn btn-primary btn-block">Add new Product</a>
      </div>
      
    </div>
    <table class="data-grid">
      <tr class="data-row">

        <th class="data-grid-th">
            <span class="data-grid-cell-content">Name</span>
        </th>
        <th class="data-grid-th">
            <span class="data-grid-cell-content">SKU</span>
        </th>
        <th class="data-grid-th">
            <span class="data-grid-cell-content">Price</span>
        </th>
        <th class="data-grid-th">
            <span class="data-grid-cell-content">Quantity</span>
        </th>
        <th class="data-grid-th">
            <span class="data-grid-cell-content">Categories</span>
        </th>

        <th class="data-grid-th">
            <span class="data-grid-cell-content" width="200">Actions</span>
        </th>
      </tr>
      <?php foreach ($products as $key => $product) {?>
      
      
      <tr class="data-row">
        <td class="data-grid-td">
           <span class="data-grid-cell-content"><?= $product->name ?></span>
        </td>
      
        <td class="data-grid-td">
           <span class="data-grid-cell-content"><?= $product->code ?></span>
        </td>

        <td class="data-grid-td">
           <span class="data-grid-cell-content">R$ <?= number_format($product->price,2,',','.') ?></span>
        </td>

        <td class="data-grid-td">
           <span class="data-grid-cell-content"><?= $product->qtd ?></span>
        </td>

        <td class="data-grid-td">
           <span class="data-grid-cell-content">
          <?php
            foreach ($product->categories as $key => $category) {
              echo " <small>".$category->name."</small> <br/>";
            }
          ?>
           </span>
        </td>
      
        <td class="data-grid-td">
          <div class="actions">
            <a href="/?page=updateProduct&id=<?=$product->id?>" class="btn btn-warning"><span>Edit</span></a>
            <a onclick="confirm('Deseja realmente excluir ?')" href="<?= $path.$product->id?>" class="btn btn-danger"><span>Delete</span></a>
          </div>
        </td>
      </tr>
      <?php }?>
    </table>
  </main>
  <!-- Main Content -->
