<?php
namespace application\util;

class UrlUtil{
    //$_GET["url"]를 분석해서 리턴
    public static function getUrl(){
        return isset($_GET["url"]) ? $_GET["url"] : "" ;
    }
    
    //URL을 "/"로 구분해서 배열을 만들고 리턴
    public static function getUrlArrPath(){
        $url = UrlUtil::getUrl();                       //static으로 선언시 ::으로 사용 가능 static으로 선언시 함수가 메모리로 전달되어 있다.
        return $url !== "" ? explode("/", $url) : "";
    }
    // "/"를 "\"로 치환해주는 메소드
    public static function replaceSlashToBackslash($str){
        return str_replace("/","\\",$str);
    }
}
// 아래 구문을 커트시켜서 위의 구문처럼 표현
// $path = isset($_GET["url"]) ? $_GET["url"] : "";
// $arr_path = $path !== "" ? explode("/", $path) : ""; 
?>