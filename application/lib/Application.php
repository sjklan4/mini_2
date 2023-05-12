<?php

namespace application\lib;
use application\util\UrlUtil;

class Application{
        //생성자
        public function __construct(){
            $arrPath = UrlUtil::getUrlArrPath(); // 접속 URL을 배열로 획득
            $identityName = empty($arrPath[0]) ? "User" : ucfirst($arrPath[0]);
            $action = (empty($arrPath[1]) ? "login" : $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"])); //action부분의 소괄호 부분을 연산하고 아래 부분에 $server는 GET이라는 대문자로 나오고 그 글을 전체 소문자로 바꾼다음 다시 첫글자를 대문자로 바꾼다. 

            $controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;

            if(!file_exists($controllerPath)){
                echo "해당 컨트롤러 파일이 없습니다. : ".$controllerPath;
                exit();
            }
            
            // 해당 Controller 생성
            $controllerName = UrlUtil::replaceSlashToBackslash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER);

            new $controllerName($identityName, $action);
            // var_dump($identityName, $action);
            // exit;
        }
}







?>