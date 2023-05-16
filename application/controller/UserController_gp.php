<?php
namespace application\controller;

class UserController extends Controller{ //controller가 없는 이유는 디폴트 값이거나 Controller을 부모값으로 받아 왔음으로 controller가 없다. 
    public function loginGet(){
        return "login"._EXTENSION_PHP;
    }

    public function loginPost(){
        $result = $this->model->getUser($_POST);
        if(count($result) === 0){
            $errMsg = "입력하신 회원 정보가 없습니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            return "login"._EXTENSION_PHP;
        }
        // session에 User ID 저장
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"];

        //리스트 페이지 리턴
        return _BASE_REDIRECT."/tour/main"; //로그인시 페이지 리턴 위치 (문자열로 리턴.)
    }

    // 로그아웃 메소드
    public function logoutGet(){
        session_unset();
        session_destroy();
        //f로그인 페이지 리턴
        return "login"._EXTENSION_PHP;
    }

    public function accountGet(){
        return "account"._EXTENSION_PHP;
    }

    public function checkIdGet() {
        $userId = isset($_GET['u_id']) ? $_GET['u_id'] : "";
        $result = $this->model->getUserById($userId);
    
        if ($result) {
            echo "이미 사용 중인 아이디입니다.";
        } else {
            echo "사용 가능한 아이디입니다.";
        }
    }
    
    public function accountPost() {
        $result = $this->model->accountUser($_POST);
        if ($result) {
            return _BASE_REDIRECT . "/user/login";
        } else {
            $errMsg = "회원 가입에 실패했습니다.";
            $this->addDynamicProperty("errMsg", $errMsg);
            return "account" . _EXTENSION_PHP;
        }
    }

    public function memberinfoGet(){
        return "memberinfo"._EXTENSION_PHP;
        
    }
    // return "account"._EXTENSION_PHP;


    //회원가입(유효성체크))------------------------------------
    public function registGet(){
        return "regist"._EXTENSION_PHP;
    }

    public function registPost(){
        $arrPost = $_POST;
        $arrChkErr = [];
        //유효성체크
        //ID 글자수 체크
        if(mb_strlen($arrPost["u_id"]) === 0 || mb_strlen($arrPost["u_id"]) > 12){           //DB의 길이/설정 값과 같은 숫자로 해야 된다. 
            $arrChkErr["u_id"] = "ID는 12글자 이하로 입력해 주세요.";
        }  
        // ID 영문숫자 체크(do)

        //PW 글자수 체크
        if(mb_strlen($arrPost["u_pw"]) <8 || mb_strlen($arrPost["u_pw"]) > 20){           //DB의 길이/설정 값과 같은 숫자로 해야 된다. 
            $arrChkErr["u_pw"] = "PW는 8 ~ 20 글자로 입력해 주세요.";
        }
        //PW 영문숫자특수문자 체크(do)

        //비밀번호와 비밀번호 체크 확인
        if($arrPost["u_pwchk"] !== $arrPost["u_pwchk"]){
            $arrChkErr["u_pwchk"] = "비밀번호와 비밀번호확인이 일치하지 않습니다.";
        }
        // 이름 글자수 체크
        if(mb_strlen($arrPost["member_name"]) === 0 || mb_strlen($arrPost["member_name"]) > 50){           //DB의 길이/설정 값과 같은 숫자로 해야 된다. 
            $arrChkErr["member_name"] = "이름은 50자이내로 해주세요";
        } 

        // 유효성체크 에러일 경우
        if(!empty($arrChkErr)){
            //에러 메세지 셋팅
                $this->addDynamicProperty('arrError', $arrChkErr);
                return "regist"._EXTENSION_PHP;
        }

        //로그인페이지로 이동
        return _BASE_REDIRECT."/user/login";
       
    //---------------------------------------------------------------------------------  
    }
    
}

?>