<?php

use App\Models\Category;
  session_start();
  $path = "../app/http/controllers/products/crud/create.php";
  
  $categories = Category::all();
?>
<!-- Header -->
  <!-- Main Content -->
  <main class="content">
    <h1 class="title new-item">New Product</h1>
    
    <form method="POST" action="<?= $path?>" enctype="multipart/form-data">
      <div class="input-field">
        <label for="sku" class="label">Product SKU</label>
        <input type="text" id="sku" name="code" class="input-text" /> 
      </div>
      <div class="input-field">
        <label for="name" class="label">Product Name</label>
        <input type="text" id="name" name="name" class="input-text" /> 
      </div>
      <div class="input-field">
        <label for="price" class="label">Price</label>
        <input type="number" id="price" name="price" class="input-text" /> 
      </div>
      <div class="input-field">
        <label for="quantity" class="label">Quantity</label>
        <input type="number" id="quantity" name="qtd" class="input-text" /> 
      </div>
      <div class="input-field">
        <label for="category" class="label">Categories</label>
        <select multiple id="category" name="category_id[]" class="input-text">
           <?php foreach ($categories as $key => $value) { ?>
          <option value="<?=$value->id?>" ><?=$value->name?></option>
           <?php }?>
        </select>
      </div>

      <div class="input-field">
        <label for="img" class="label">Foto</label>
        <input type="file" id="img" name="img" class="input-text"/>
      </div>
      <div class="input-field">
        <label for="description" class="label">Description</label>
        <textarea id="description" name="description" class="input-text"></textarea>
      </div>
      <div class="actions-form">
        <a href="?page=products" class="action back">Back</a>
        <input class="btn-submit btn-action" type="submit" value="Save Product" />
      </div>
      
    </form>
  </main>
  <!-- Main Content -->
