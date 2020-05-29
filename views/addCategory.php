<?php 
  session_start();
  $path = "../app/http/controllers/categories/crud/create.php";
?>
<!-- Header -->
  <!-- Main Content -->
  <main class="content">
    <?php 
      if(isset($_SESSION['msg']))
      {
          echo $_SESSION['msg'];
      }
      unset($_SESSION['msg']);
    ?>
    <h1 class="title new-item">New Category</h1>
    
    <form method="POST" action="<?=$path?>">
      <div class="input-field">
        <label for="category-name" class="label">Category Name</label>
        <input type="text" name="name" id="category-name" class="input-text" />
        
      </div>
      <div class="input-field">
        <label for="category-code" class="label">Category Code</label>
        <input type="text" name="code" id="category-code" class="input-text" />
        
      </div>
      <div class="actions-form">
        <a href="?page=categories" class="action back">Back</a>
        <input class="btn-submit btn-action"  type="submit" value="Save" />
      </div>
    </form>
  </main>
  <!-- Main Content -->
