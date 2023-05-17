// document.getElementById("checkIdBtn").addEventListener("click", function() {
//     const userId = document.getElementsByName("u_id")[0].value;
//     fetch(`/user/checkId?u_id=${userId}`)
//       .then(response => response.text())
//       .then(text => {
//         const messageElem = document.getElementById("checkIdMessage");
//         messageElem.innerText = text;
//       });
//   });

  function chkDuplicationID(){
    const id = document.getElementById('u_id');
    const idspan = document.getElementById('errMsgId');

    const url = "/api/user?u_id=" + id.value;
    const special_pattern = new RegExp('[^a-zA-Z0-9]');
    if(id.value === ""){
      idspan.innerHTML = "아이디를 입력해주세요"
      return false;
    } else if(id.value.match(special_pattern)!==null){
      idspan.innerHTML = "영문숫자만 사용 가능합니다."
      return false;
    }
    
    let apiData = null;
    // API
    fetch(url)
    .then(data => {return data.json();})
    .then(apiData => {
      if(apiData["flg"] === "1"){
        idspan.innerHTML = apiData["msg"]
      } else{
        idspan.innerHTML = apiData["msg"];
      }
    });

    // console.log(apiData);
  }