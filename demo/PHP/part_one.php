<?php
 $html = file_get_contents("http://wilsonliu.cn");
    print_r($http_response_header);

    $fp = fopen("http://blog.wilsonliu.cn", "r");
    print_r(stream_get_meta_data($fp));
    fclose($fp);