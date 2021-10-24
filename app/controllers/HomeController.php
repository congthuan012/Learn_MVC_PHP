<?php
class HomeController extends Controller{
    function Dashboard(){
        $products = (new Products())->get();
        $this->view('products-management/home-page',['products'=>$products]);
    }

    function Detail(){
        echo 'Đây là trang Detail';
    }
}
?>