<?php
function asset($url)
{
    return 'http://php_mvc.local/public/'.$url;
}
function dd($arr)
{
    echo '<pre>',var_dump($arr),'</pre>';
    exit;
}
?>