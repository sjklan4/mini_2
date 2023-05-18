<?php
//config 파일
require_once("application/lib/config.php"); //config파일 부르기  - MVC방식설정을 통해서 GET방식으로 데이터를 받아오도록 만들어 준다.
require_once("application/lib/autoload.php"); //autoload파일

// 
new application\lib\Application(); //Applicaiotn 호출 = new Application과 같은 형식 지금은 단순 호출만 하는 형태, 중복된 이름이 올수도 있음으로 파일 디렉토리를 통해 분간을 하기 위해서 주소까지 작성'application\lib\'




?>