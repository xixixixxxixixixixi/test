<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>top</title>
<script type="text/javascript" src="/ssChen/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/ssChen/Public/Admin/js/common.js"></script>
<link rel="stylesheet" type="text/css" href="/ssChen/Public/Admin/css/admin.css">
</head>
<body>
<h2>标题：<?php echo ($title); ?></h2><br />
封面：<img src="/ssChen/public/cover/<?php echo ($cover); ?>" alt=""/><br />
<?php echo ($content); ?>
</body>
</html>