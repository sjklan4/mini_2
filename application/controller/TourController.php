<?php
namespace application\controller;

class TourController extends Controller{ //class스 명을 파일명과 맞춰준다. 
    public function mainGet(){ // application에서 get을 받아오는 이름을 설정한 것과 같은것을 넣어준다.
        return "main"._EXTENSION_PHP; //설정한 뷰로 보내는 구문 
    }

}

?>

