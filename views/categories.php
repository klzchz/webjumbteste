<?php

  session_start();
  $path = "../app/http/controllers/categories/crud/delete.php?id=";
  
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
            <a  class="btn btn-warning " href="?page=addCategory&id=<?=$value->id?>"><span>Edit</span></a>
            <a onclick="confirm('Você realmente deseja excluir ?')" href="<?= $path.$value->id ?>" class="btn btn-danger"><span>Delete</span></a>
          </div>
        </td>
      </tr>
     <?php }?>
    </table>
  </main>
  