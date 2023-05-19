// document.getElementById("checkIdBtn").addEventListener("click", function() {
//     const userId = document.getElementsByName("u_id")[0].value;
//     fetch(`/user/checkId?u_id=${userId}`)
//       .then(response => response.text())
//       .then(text => {
//         const messageElem = document.getElementById("checkIdMessage");
//         messageElem.innerText = text;
//       });
//   });

  function chkDuplicationID(){ //(1)
    const id = document.getElementById('u_id');
    const idspan = document.getElementById('errMsgId');
    // /api/user = AipController에 입력한 u_id를 보내주는데 u_id = id.value값

    const url = "/api/user?u_id=" + id.value; //입력한값을 중복조회를 위해서 셋팅(get으로 보낼준비)
    const special_pattern = new RegExp('[^a-zA-Z0-9]'); //보내기전 데이터(ID 유효성검사)를 검사 작업
    if(id.value === ""){
      idspan.innerHTML = "아이디를 입력해주세요"
      return false;
    } else if(id.value.match(special_pattern)!==null){
      idspan.innerHTML = "영문숫자만 사용 가능합니다."
      return false;
    }
    // 완료후 아래 fetch진행  - const url의 진행 값을 보내기전 if문을 실행후 fetch에서 url의 값을 보낸다.
    let apiData = null; // 이 구문의 역활은?????????????????????
    // API - controller //(2) (4)
    fetch(url) // 3번 작업으로 보내준다. 그리고 가져온 데이터로 4번시작
    .then(data => {return data.json();}) //{controller에서 처리한 정보를 받아 오는것인가??? 정확한 의미는???}url에 담아 있는 id value값을 apidata에 넣고 
    .then(apiData => {              //aipData에 대해서 flg가 1이면 idspan apidata :  이미 사용중인..... 이 나오고
      if(apiData["flg"] === "1"){ //그 외는 '사용 가능한 아이디......'가 나온다.
        idspan.innerHTML = apiData["msg"]
      } else{
        idspan.innerHTML = apiData["msg"];
      }
    });

    // console.log(apiData);
  }