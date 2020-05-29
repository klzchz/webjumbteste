<?php


namespace App\http\controllers\categories;

use App\http\controllers\Controller;
use App\Models\Category;

class CategoryController  {

    private $category;
    
    public function __construct(Category $category)
    {   
      
        $this->category = $category;
    }

    public function store($request)
    {  
        session_start();
        $dataForm = [
            'name' => $request['name'],
            'code'=>$request['code']
           ];
           
           if($this->category->create($dataForm)) 
           {
               $_SESSION['msg'] = "Sucesso ao cadastrar Categoria";
           }else{
               $_SESSION['msg'] = "Erro ao cadastrar Categoria";
           }
           
           

    }
    public function update($id)
    {   
        //Atualiza Categoria
        $category = $this->category->find($id);

        if(!$category) {
            $_SESSION['msg'] = "Essa categoria não existe";
        }

        $dataForm = [
            'name' => $_POST['name'],
            'code'=>$_POST['code'],
           ];
   
           if($category->update($dataForm)) 
           {
               $_SESSION['msg'] = "Sucesso ao atualizar Categoria";
           }else{
               $_SESSION['msg'] = "Erro ao atualizar Categoria";
           }
           
           header('Location: ?page=categories');
    }
    public function destroy($id)
    {   
        //deleta Categoria
        $category = $this->category->find($id);

        if(!$category) {
            $_SESSION['msg'] = "Essa categoria não existe";
        }

        
        if($category->delete()) 
        {
            $_SESSION['msg'] = "Sucesso ao deletar Categoria";
        }else{
            $_SESSION['msg'] = "Erro ao deletar Categoria";
        }
        header('Location: ?page=categories');
        
    }

}
