<?php
//config 파일
require_once("application/lib/config.php"); //config파일 부르기  - MVC방식설정을 통해서 GET방식으로 데이터를 받아오도록 만들어 준다.
require_once("application/lib/autoload.php"); //autoload파일

new application\lib\Application(); //Applicaiotn 호출




?>