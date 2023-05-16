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

    const url = "/api/user?u_id=" + id.value;
    let apiData = null;
    // API
    fetch(url)
    .then(data => {return data.json();})
    .then(apiData => {
      const idspan = document.getElementById('errMsgId');
      if(apiData["flg"] === "1"){
        idspan.innerHTML = apiData["msg"]
      } else{
        idspan.innerHTML = "";
      }
    });

    // console.log(apiData);
  }