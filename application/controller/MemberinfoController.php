<?php
namespace application\controller;

class MemberinfoController extends Controller{
    public function MemberinfoGet(){
        $idinfo = array("u_id" => $_SESSION["u_id"]);
        $this->model = $this->getModel("User"); //getModel을 사용하여 다른 model사용 할 수 있도록 한다.(다른 모델안에 있는 변수 값을 사용한다.)
        $result = $this->model->getUser($idinfo, false); //session 은 원본데이터로 가져온다.
        $this->model->close();
        // $this->addDynamicProperty("u_id",$result[0]["u_id"]);
        $this->addDynamicPropertyArr($result[0]);
        return "memberinfo"._EXTENSION_PHP;
    }


    public function MemberinfoPost(){
        $arrinfo = $_SESSION[_STR_LOGIN_ID];
        $this->model->mypage($arrinfo);
    }

}
?>