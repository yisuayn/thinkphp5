<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"D:\software\phpstudy_pro\WWW\chengyuetp5\public/../application/index\view\index\index.html";i:1712454653;}*/ ?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
    <!-- 引入 layui.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.9.8/layui.min.js"
        integrity="sha512-suQgjUDCn1QNcz7IPRlWQb6IcjctO0WK7SH5QmGn7otk0K+2veKOITyfsd2URWaSsWsLBdXU87MX2MHDqkxVCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.9.8/layui.js"
        integrity="sha512-wr2CJEbfG2lCok8dbfh12ZK76eVe0/4XRacTqUi+G1b77x+SpbVyMGn6nf0mWyvEuOAp2TfpMuq6U8fob09xgA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/mhDoLbDldZc3qpsJHpLogda//BVZbgYuw6kof4u2FrCedxOtgRZDTHgHUhOCVim"
        crossorigin="anonymous"></script>
</head>

<body>
    <table class="layui-table">
        <colgroup>
            <col width="150">
            <col width="200">
            <col>
        </colgroup>
        <thead>
            <tr>
                <th>昵称</th>
                <th>加入时间</th>
                <th>签名</th>
                <th>地址</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($result) || $result instanceof \think\Collection || $result instanceof \think\Paginator): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['password']; ?></td>
                <td><?php echo $user['address']; ?></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</body>

</html>