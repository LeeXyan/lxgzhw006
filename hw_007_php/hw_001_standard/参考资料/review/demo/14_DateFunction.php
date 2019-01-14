<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('Asia/Shanghai');
//面试题:输出昨天的日期,格式为YYYY-MM-DD
echo date('Y-m-d', time() - 86400), '<hr>';
echo date('Y-m-d', strtotime('-15 days -20 minutes -30 seconds')), '<hr>';
echo microtime(true);