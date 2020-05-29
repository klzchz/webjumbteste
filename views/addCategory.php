<?php 

use App\Models\Category;
  session_start();
  if(isset($_GET['id']))
  {

    $category = Category::find($_GET['id']);

    if(!$category)
        header('Location: ?page=categories');

    $path = "../app/http/controllers/categories/crud/update.php?id=".$_GET['id'];
    $name = "<input type='text' name='name' id='category-name' class='input-text' value='{$category->name}'required />";
    $code = "<input type='text' name='code' id='category-code' class='input-text'  value='{$category->code}'required />";
    
  }else
  {
    $name = "<input type='text' name='name' id='category-name' class='input-text' required />";
    $code = "<input type='text' name='code' id='category-code' class='input-text'  requiredc/>";
    $path = "../app/http/controllers/categories/crud/create.php";
  }
  
?>
<!-- Header -->
  <!-- Main Content -->
  <main class="content">

    <h1 class="title new-item">New Category</h1>
    <?php 
      if(isset($_SESSION['msg']))
      {
          echo $_SESSION['msg'];
      }
      unset($_SESSION['msg']);
    ?>
    
    <form method="POST" action="<?=$path?>">
      <div class="input-field">
        <label for="category-name" class="label">Category Name</label>
        <?=$name?>
        
      </div>
      <div class="input-field">
        <label for="category-code" class="label">Category Code</label>
        <?=$code?>
        
      </div>
      <div class="actions-form">
        <a href="?page=categories" class="action back">Back</a>
        <input class="btn-submit btn-action"  type="submit" value="Save" />
      </div>
    </form>
  </main>
  <!-- Main Content -->
