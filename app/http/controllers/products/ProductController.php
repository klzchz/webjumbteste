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

        /*Fazendo Upload dos Arquivos*/
        $uploaddir = '../../../../../assets/uploads/';

        if(isset($_FILES['img']))
        {
            $uploadfile = $uploaddir . basename($_FILES['img']['name']);

            if(move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile))
        {
            $dataForm['img'] =   $_FILES['img']['name'];
        }
            
        }

        if($product = $this->product->create($dataForm)) 
        {   
           
           $product->categories()->attach($request['category_id']);
          
            $_SESSION['msg'] = "Sucesso ao cadastrar Produto";
        }else{
            $_SESSION['msg'] = "Erro ao cadastrar Produto";
        }



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
           /*Fazendo Upload dos Arquivos*/
        $uploaddir = '../../../../../assets/uploads/';

        if(isset($_FILES['img']))
        {
            $uploadfile = $uploaddir . basename($_FILES['img']['name']);

            if(move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile))
        {
            $dataForm['img'] =   $_FILES['img']['name'];
        }
            
        }
   
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
        $uploaddir = '../../../../../assets/uploads/';

        if(!$product) {
            $_SESSION['msg'] = "Esse produto não existe";
        }

        if(isset($product->img) && file_exists($uploaddir.$product->img))
        {
           
            unlink($uploaddir.$product->img);
        }
        if($product->delete()) 
        {
            $_SESSION['msg'] = "Sucesso ao deletar Produto";
        }else{
            $_SESSION['msg'] = "Erro ao deletar Produto";
        }
        
    }

    public function deleteImage($id)
    {
        $product = $this->product->find($id);
        $uploaddir = '../../../../../assets/uploads/';

        if(isset($product->img) && file_exists($uploaddir.$product->img))
        {
           
            unlink($uploaddir.$product->img);
        }
        $product->img = '';
        $product->save();
    }

}
