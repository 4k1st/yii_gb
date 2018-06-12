<?php

namespace app\controllers;

use yii\web\Controller;
use yii\base\BaseObject;
use app\models\Product;
use app\components\TestService;

class TestController extends Controller
{
        public function actionHello(){
        return $this->render("hello");
        //return"Hello world";
    }
    
       public function actionHello2(){
        return $this->render("hello")   ;
        //return"Hello world2";
    }
    
    public function actionIndex(){
        
       return \yii::$app->test->run();
        
        
        $product= new Product(15,"product1","category4",158);
        
        $pr['id']=$product->printId();
        $pr['name']=$product->printName();
        $pr['category']=$product->printCategory();
        $pr['price']=$product->printPrice();
        return $this->render('index',['model' =>$pr]);
    }
    
    public function actionProduct()
    {
        $product= new Product(15,"product1","category4",158);
        
        $pr['id']=$product->printId();
        $pr['name']=$product->printName();
        $pr['category']=$product->printCategory();
        $pr['price']=$product->printPrice();
        return $this->render('index',['model' =>$pr]);
        
    }
}
