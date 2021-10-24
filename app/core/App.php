<?php
class App{
    protected $controller = 'HomeController';
    protected $action = 'Dashboard';
    protected $params = [];

    function __construct()
    {
        $arr = $this->UrlProcess();
        //lấy phần tử đầu tiên của mảng nếu có làm controller
        if(isset($arr[0]) && file_exists('./app/controller/'.$arr[0].'Controller.php'))
        {
            $this->controller = $arr[0].'Controller';
            //Xóa phần tử đầu tiên sau khi gán
            unset($arr[0]);
        }

        $this->controller = new $this->controller;

        //Lấy phần tử thứ 2 của mảng nếu có làm Action
        if(isset($arr[1]))
        {
            //Kiểm tra hàm đó có tồn tại trong controller ko
            if(method_exists($this->controller,$arr[1]))
            {
                $this->action = $arr[1];
                //Xóa đi phần tử thứ 1 khỏi mảng
                unset($arr[1]);
            }
        }
        
        //Lấy những phần tử còn lại làm params
        $this->params = $arr?array_values($arr):[];
        call_user_func_array([$this->controller,$this->action],['params'=>$this->params]);
    }
    
    function UrlProcess(){
        if(isset($_GET['url']))
        {
            $url = $_GET['url'];
            //Loại bỏ khoản trắng và ký tự ko cần thiết
            $url = filter_var(trim($url,'/'));
            //Tách url có dc thành mảng
            $url = explode('/',$url);
            return $url;
        }
    }
}