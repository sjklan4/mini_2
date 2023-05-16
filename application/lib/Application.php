<?php

namespace application\lib;
use application\util\UrlUtil; //URLUTIL을 부르겠다는 의미

class Application{
        //생성자
        public function __construct(){
            $arrPath = UrlUtil::getUrlArrPath(); // 접속 URL을 배열로 획득 $arrPaht에는 배열 값들이 담기게 된다. 
            // 루뜨에 설정값이 없을시 아래 구문을 통해서 디폴트 값을 지정해준다.
            $identityName = empty($arrPath[0]) ? "Tour" : ucfirst($arrPath[0]); //USER를 담고 있는 구문(대문자 형식) =User를 불러오는 구문 : user는 무슨의미? URL주소?(여기는 *controller부분)
            // 아래 구문은 바로 Get으로 받아오면 안되는건가? 
            //$action = (empty($arrPath[1]) ? "login" : $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"])); //action부분의 소괄호 부분을 연산하고 아래 부분에 $server는 GET이라는 대문자로 나오고 그 글을 전체 소문자로 바꾼다음 다시 첫글자를 대문자로 바꾼다. 
            $action = (empty($arrPath[1]) ? "main" : $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"])); // *veiw부분 조정
            // application / controller / UserController.php 의 Path가 작동된다. 
            $controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;

            if(!file_exists($controllerPath)){
                echo "해당 컨트롤러 파일이 없습니다. : ".$controllerPath; //위 구문에 대한 파일 유무 확인용 구문
                exit();
            }
            
            // 해당 Controller 생성
            // /를 \로 바꿔주기 위해서 함수로 호출 시킨 구문 바뀐형태는 controllerName에 들어 간다. 
            $controllerName = UrlUtil::replaceSlashToBackslash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER); //application / controller / UserController 까지를 불러오는 구문 위의 extension_php부분만 제외된 상태
            // application \ controller \ UserController ('User', loginGet); 의 형태를 아래에서 부르는 구문 : 위에서 가져온 변수들을 아래에 변화 시켜서 넣고 실행 시킴
            new $controllerName($identityName, $action); // __construct실행
            // var_dump($identityName, $action);
            // exit;
        }
}


?>