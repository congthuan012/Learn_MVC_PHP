<?php
class HomeController extends Controller{
    function Dashboard(){
        $title = 'products-management';
        $this->view('products-management/list',[
            'title'=>$title
        ]);
    }

    function Detail(){
        echo 'Đây là trang Detail';
    }
}
?>