<?php

  session_start();
use App\Models\Category;

  $category = new Category();
  $categories = $category->all();

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
      <h1 class="title">Categories</h1>
    
        <div class="col-md-2">
          <a href="?page=addCategory" class="btn btn-primary btn-block">Add new Category</a>
        </div>
      
      
    </div>
    <table class="data-grid">
      <tr class="data-row">
        <th class="data-grid-th">
            <span class="data-grid-cell-content">Name</span>
        </th>
        <th class="data-grid-th">
            <span class="data-grid-cell-content">Code</span>
        </th>
        <th class="data-grid-th" width="200">
            <span class="data-grid-cell-content">Actions</span>
        </th>
      </tr>
    <?php foreach ($categories as $key => $value) {?>
      
      <tr class="data-row">
        <td class="data-grid-td">
           <span class="data-grid-cell-content"><?= $value->name ?></span>
        </td>
      
        <td class="data-grid-td">
           <span class="data-grid-cell-content"><?= $value->code ?></span>
        </td>
      
        <td class="data-grid-td">
          <div class="actions">
            <div class="btn btn-warning"><span>Edit</span></div>
            <div class="btn btn-danger"><span>Delete</span></div>
          </div>
        </td>
      </tr>
     <?php }?>
    </table>
  </main>
  