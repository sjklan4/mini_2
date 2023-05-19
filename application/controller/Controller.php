<?php
// 유저의 데이터를 최초로 확인하는 구문 역활
namespace application\controller;

use application\util\UrlUtil;
use \AllowDynamicProperties; //php 8 부터 동적값을 직접 설정해 주어야 한다. 
//필드에 설정되어 있지 않은 속성들을 중간에 추가 처리 등을 할 수 있다. 
// use \ AllowDynamicProperties와 같이 한셋트 클래스 필드의 값들이 동적으로 선언된다는 의미로  = 추후 작성중에 추가로 설정값을 더할 수 있다는 의미.
#[AllowDynamicProperties]  // 필드안에 미리 선언해 두면 나중에 없이도 사용 가능 

class Controller{
    protected $model;
    private static $modelList = [];
    private static $arrNeedAuth = ["product/list"];


    // 생성자
    // __construct(User, loginGet)의 형태가 아래 포함하고 있다.
    public function __construct($identityName, $action){
        //session start
        if(!isset($_SESSION)){
            session_start();
        }

        // 유저 로그인 및 권한 체크
        $this->chkAuthorization();

        // model 호출
        // application에서 수행해서 준 이름의 모델 을 실행 시키기 위한 구문
        $this->model = $this->getModel($identityName); // 작성시 getModel이라는 함수를 사용 할 것이라는 것을 미리 작성후 아래 함수를 작성해야 되는가?

        // 해당 controller의 메소드 호출
        // loginGet()을 호출 - application에 controllerName에 있는 아규먼트인 login이 $action에 담겨서 그이름의 VIEW를 셋팅
        $view = $this->$action(); // UserController.php에 있는 login

        if(empty($view)){
            echo "해당 Controller에 메소드가 없습니다. : ".$action;
            exit();
        }

        //view 호출
        require_once $this->getView($view); //__construct의 $action을 참조해서 불러오는 구문
    }
//-----------------------------------------------------------------------------------------------------------여기까지함230519 10:25----
    // model 호출하고 결과를 리턴

    protected function getModel($identityName){
        // model 생성 체크
        //private는 본인 자신만이 사용 가능  -  self를 통해서 불러 와야 한다. 
        if(!in_array($identityName, self::$modelList)){  //Controller > UserController 를 상속시키고 있다. Controller안에 ModelList가 들어 있어고 private로 되어 있어서 self를 통해서 접근 - 자식 속성에서 부모속성을 쓰기 위해서 self를 사용 
            $modelName = UrlUtil::replaceSlashToBackslash(_PATH_MODEL.$identityName._BASE_FILENAME_MODEL); // application / model / UserModel에서 /를 \로 변경 시켜주는 함수에 담아 놓고 객체화 시킨다.
            self::$modelList[$identityName] = new $modelName(); //model class 호출
        }
        return self::$modelList[$identityName];
    }


    // 파라미터를 확인해서 해당하는 view를 리턴하거나, redirect 
    protected function getView($view){ //$view = login.php가 담겨 있다. : 파일 자체가 담길수도 있었음?????
        // view를 체크
        // 위치 순서를 반환, 없으면 fasle - view체크 작업 
        if(strpos($view, _BASE_REDIRECT) === 0 ){
            header($view);
            exit();
        } 

        return _PATH_VIEW.$view; //최종 리턴값은 = application / view / login.php를 리턴 시킨다.
    }

    // 동적 속성(DynamicProperty)를 셋팅하는 메소드(key 값과 $val값을 받아서 사용하겠다는 구문)
    public function addDynamicProperty($key, $val){
        $this->$key = $val; 
    }

    public function addDynamicPropertyArr($data){ //다수 데이터 불러오는 addDynami구문 - propertyarr를 배열로 받아와서 모든 데이터를 보여줄수 있는 기능
        foreach($data as $key => $val) {
            $this->$key = $val; 
        }
    }

    // 유저 권한 체크 메소드
    protected function chkAuthorization(){
        $urlPath = UrlUtil::geturl();
        foreach( self::$arrNeedAuth as $authPath){
            if(!isset($_SESSION[_STR_LOGIN_ID]) && strpos($urlPath, $authPath) === 0){
                header(_BASE_REDIRECT."/Tour/main");
                exit;
            }   
        }
    }
}



?>