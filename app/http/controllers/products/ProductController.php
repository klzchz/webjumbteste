<?php


namespace App\http\controllers;

use App\Models\Product;
use App\http\Controller\Controller;


class ProductController extends Controller {

    private $product;
    
    public function __construct(Product $product)
    {   
        session_start();
        $this->product = $product;
    }

    public function store()
    {   

        $dataForm = [
            'name'=>$_POST['name'],
            'code'=>$_POST['code'],
            'price'=>$_POST['price'],
            'description'=>$_POST['description'],
            'qtd'=>$_POST['qtd']
            
        ];

        /*Fazendo Upload dos Arquivos*/
        $uploaddir = '../../../assets/uploads/';

        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
       
        
        if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
        {
            $dataForm['img'] =   basename($_FILES['userfile']['name']);
        }


    }
    public function update($id)
    {

    }
    public function delete($id)
    {
        
    }

}
