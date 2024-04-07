<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"D:\software\phpstudy_pro\WWW\chengyuetp5\public/../application/solution\view\index\index.html";i:1712133072;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 layui.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/layui/2.9.8/css/layui.css"
        integrity="sha512-rS4sRT9gLRT9wNIcmJPoU7+DI1vteqW3Bm51AlhupZ6JUxMYLhk4dKeL7y2rPBsi3JKth+Oz/BNvNjQAnpWdiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/layui/2.9.8/css/layui.min.css"
        integrity="sha512-iXwIoZrWFn0FwCfnWPe8khdppLH1+hwE7bZYkmjAJaF4Lz/BhdKbd2lgQONvSkCJiezdhLsCgFM2znkDN1uyJw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <!-- 引入 layui.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.9.8/layui.min.js"
        integrity="sha512-suQgjUDCn1QNcz7IPRlWQb6IcjctO0WK7SH5QmGn7otk0K+2veKOITyfsd2URWaSsWsLBdXU87MX2MHDqkxVCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.9.8/layui.js"
        integrity="sha512-wr2CJEbfG2lCok8dbfh12ZK76eVe0/4XRacTqUi+G1b77x+SpbVyMGn6nf0mWyvEuOAp2TfpMuq6U8fob09xgA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <button type="button" class="layui-btn">一个标准的按钮</button>
    <ul>
        <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
        <li>
            <button type="button" class="layui-btn"><?php echo $user['id']; ?></button>
            <a href="http:/" class="layui-btn"><?php echo $user['username']; ?></a>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</body>

</html>