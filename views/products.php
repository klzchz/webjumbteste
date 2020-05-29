<?php

use App\Models\Product;

  session_start();
  $path = "../app/http/controllers/products/crud/delete.php?id=";

  $product = new Product();
  $products = $product->all();

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
            <span class="data-grid-cell-content">Actions</span>
        </th>
      </tr>
      <tr class="data-row">
        <td class="data-grid-td">
           <span class="data-grid-cell-content">Product 1 Name</span>
        </td>
      
        <td class="data-grid-td">
           <span class="data-grid-cell-content">SKU1</span>
        </td>

        <td class="data-grid-td">
           <span class="data-grid-cell-content">R$ 19,90</span>
        </td>

        <td class="data-grid-td">
           <span class="data-grid-cell-content">100</span>
        </td>

        <td class="data-grid-td">
           <span class="data-grid-cell-content">Category 1 <Br />Category 2</span>
        </td>
      
        <td class="data-grid-td">
          <div class="actions">
            <div class="action edit"><span>Edit</span></div>
            <div class="action delete"><span>Delete</span></div>
          </div>
        </td>
      </tr>
    
    </table>
  </main>
  <!-- Main Content -->
