<?php


namespace App\http\controllers\products;

use App\Models\Product;



class ProductController  {

    private $product;
    
    public function __construct(Product $product)
    {   
        session_start();
        $this->product = $product;
    }

    public function store($request)
    {   

        $dataForm = [
            'name'=>$request['name'],
            'code'=>$request['code'],
            'price'=>$request['price'],
            'description'=>$request['description'],
            'qtd'=>$request['qtd']
            
        ];
        
        if($product = $this->product->create($dataForm)) 
        {   
           
           $product->categories()->attach($request['category_id']);
          
            $_SESSION['msg'] = "Sucesso ao cadastrar Produto";
        }else{
            $_SESSION['msg'] = "Erro ao cadastrar Produto";
        }
        /*Fazendo Upload dos Arquivos*/
        // $uploaddir = '../../../assets/uploads/';

        // $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
       
        
        // if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
        // {
        //     $dataForm['img'] =   basename($_FILES['userfile']['name']);
        // }


    }
    public function update($id,$request)
    {
            
        $product = $this->product->find($id);
     
        if(!$product) {
            $_SESSION['msg'] = "Esse produto não existe";
        }
     
        $dataForm = [
            'name' => $request['name'],
            'code'=>$request['code'],
           ];
         
   
           if($product->update($dataForm)) 
           {
            $product->categories()->sync($request['category_id']);
               $_SESSION['msg'] = "Sucesso ao atualizar Produto";
             
           }else{
               $_SESSION['msg'] = "Erro ao atualizar Produto";
           }
    }
    public function destroy($id)
    {
        //deleta produto
        $product = $this->product->find($id);

        if(!$product) {
            $_SESSION['msg'] = "Esse produto não existe";
        }

        
        if($product->delete()) 
        {
            $_SESSION['msg'] = "Sucesso ao deletar Produto";
        }else{
            $_SESSION['msg'] = "Erro ao deletar Produto";
        }
        
    }

}
