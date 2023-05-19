<?php
namespace application\controller;

class ApiController extends Controller{ //(3)
    public function userGet(){   //
        $arrGet = $_GET;
        $arrData = [ "flg" => "0"];
        // model 호출
        $this->model = $this->getModel("User"); //model을 지정해서 사용하는 구문(지금은 user모델)

        $result = $this->model->getUser($arrGet, false); // user모델을 getuser로 다시 지정해서 사용
        
        if(count($result) !== 0){
            $arrData["flg"] = "1";
            $arrData["msg"] = "이미 사용 중인 아이디입니다."; 
        } else {
            $arrData["flg"] = "0";
            $arrData["msg"] = "사용 가능한 아이디입니다."; 
        }

        // 배열을 JSON으로 변경
        $json = json_encode($arrData);
        header('Content-type: application/json');
        echo $json;
        exit();
    }


    public function userdlPost(){   //
        $arrPost = $_POST;
        var_dump($_POST); exit;
        $arrData = [ "flg" => "0"];
        // model 호출
        $this->model = $this->getModel("User"); //model을 지정해서 사용하는 구문(지금은 user모델)

        $result = $this->model->getUser($arrPost, false); // user모델을 getuser로 다시 지정해서 사용
        
        if(count($result) !== 0){
            $arrData["flg"] = "1";
            $arrData["msg"] = "확인되었습니다."; 

        } else {
            $arrData["flg"] = "0";
            $arrData["msg"] = "비밀번호가 일치하지 않습니다."; 
        }

        // 배열을 JSON으로 변경
        $json = json_encode($arrData);
        header('Content-type: application/json');
        echo $json;
        exit();
    }

    public function delPost(){   //
        $arrinfo["u_id"] =  $_SESSION[_STR_LOGIN_ID]; //session 비휘발성 데이터 
        $arrData = [ "flg" => "0"];
        // model 호출
        $this->model = $this->getModel("User"); //model을 지정해서 사용하는 구문(지금은 user모델)

        $result = $this->model->deletemember($arrinfo); // user모델을 getuser로 다시 지정해서 사용
        
        if($result){
            $arrData["errflg"] = "0";
            $arrData["url"] = "/tour/main"; 
            http_response_code(200); //각 오류 확인 값을 설정
        } else{
            $arrData["errflg"] = "1";
            http_response_code(301);
        }
    
    //     // 배열을 JSON으로 변경
        $json = json_encode($arrData);

        header('Content-type: application/json'); //api형식 지정 하는 구문
        echo $json; //php 에서 echo는 화면으로 응답한다는 의미
        exit();
    }

    // 글로벌 변수 자료 확인 필. = 

    // public function delPost(){
    //     $id = [ "u_id" => $_SESSION[_STR_LOGIN_ID]];
    //     $result = $this->model->deletemember($id,false);
    //     // $this->addDynamicProperty("userInfo",$result[0]); 
    //     $this->model->beginTransaction();
    //     $this->model->commit();
    //     session_unset();
    //     session_destroy();

    //     return "main"._EXTENSION_PHP;

    //     $json = json_encode($arrData);
    //     header('Content-type: application/json');
    //     echo $json;
    //     exit();
    // }

    
}

?>