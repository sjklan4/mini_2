
// object.onclick = function(){loginpage};
// object.addEventListener("click",  );




// 
document.addEventListener("click", function() {
    delbtn();
});
function delbtn(){
    const getpass = prompt("비밀번호를 입력하세요."); // 입력시 비밀번호가 getpass에 담긴다.
    const url = "/api/userdl"; //user = apicontroller에 userGEt()을 호출 시킨다. 
// 아래 시작은 prompt에 입력한 데이터를 url로 그 데이터를 post방식으로 해서 controller.php에 있는 userdlpost로 보내 주고 실행을 시킨다.
// userdlpost에서 확인 작업이 끝나면json형식으로 받은 데이터들중 arrData가 1이면 const confirmDelete를 실행 탈퇴여부 확인
// 확인을 하면 다시 url로 id를 확하기 위해서 현재 u_id를 delpost로 보내서 확인 작업후 deletemember model을 실행시켜서 삭제 진행후 
// $arrData의 tour/main(값은 str로 받아옴)을 location.href을 통해서 이동 하도록 한다.
    let apiData = null;
    fetch(url,{
        method : "POST"
        , header: {"Content-Type": "application/json"}
        ,body: JSON.stringify({u_pw: getpass})
    })
    .then(response => {return response.json();})
    .then(apiData => {
        if (apiData.flg === "1") {
            const confirmDelete = confirm("정말 탈퇴하시겠습니까?");
            if (confirmDelete) {
                const url = "/api/del";
                fetch(url,{method : "POST"})
                .then(chkdata =>{return chkdata.json();})
                .then(response => location.href = response["url"])
            }
        }
    })
    .catch(error => alert(error.message));
}
// 각 fetch를 함수화로 싱크 작업 실시 
// if (confirmDelete) {
//     const url = "/api/del?u_id=".u_id;
//     fetch(url,{method : "POST"})
//     .then(response => response.json())
// }




// document.addEventListener("click", function() {
//     delbtn();
// });

// function delbtn() {
//     const getpass = prompt("Enter your password."); // Prompt the user to enter a password
//     const url = "/api/userdl?u_pw=" + encodeURIComponent(getpass); // Encode the password before appending it to the URL

//     fetch(url, { method: "POST", headers: { "Content-Type": "application/json" } })
//         .then(response => response.json())
//         .then(apiData => {
//             if (apiData.flg === "0") {
//                 const confirmDelete = confirm("Are you sure you want to delete?");
//                 if (confirmDelete) {
//                     const u_id = "php5066"; // Replace with the actual user ID
//                     const deleteUrl = "/api/del?u_id=" + encodeURIComponent(u_id); // Encode the user ID before appending it to the URL

//                     fetch(deleteUrl, { method: "POST" })
//                         .then(response => response.json())
//                         .then(data => {
//                             // Handle the response after deletion if needed
//                         })
//                         .catch(error => console.error(error));
//                 }
//             }
//         })
//         .catch(error => console.error(error));
// }



// function delbtn(){
//     document.addEventListener("click",function(){
    
//     var getpass = prompt("비밀번호를 입력하세요."); //입력시 비밀번호가 getpass에 담긴다.
//     const url = "/api/user?u_pw=" + getpass;
//     // let apiData = null;
//     fetch(url)
//     .then(response => response.json())
//     .then(apiData => {
//       if (apiData.flg === "1") { // 올바른 속성명은 "flg"입니다.
//         var confirmDelete = confirm("정말 탈퇴하시겠습니까?");
//         if (confirmDelete) {
//           submit(); // submit 함수 호출
//         }
//       } else {
//         alert("비밀번호가 틀렸습니다.");
//       }
//     })
//     .catch(error => {
//       console.error("API 요청 에러:", error);   
//     });

//     .then(data =>{return data.json();})
//     .then(apiData =>{
//         if(getpass === "upw"){
//             alert("정말 탈퇴하시겠습니까?");
//             submit();
//         } else{
//             alert("비밀번호가 틀렸습니다.")
//         }
//     })    
// } )
// }

// document.addEventListener("DOMContentLoaded", function() {
//     const deleteButton = document.createElement("button");
//     deleteButton.textContent = "삭제";
//     deleteButton.addEventListener("click", function() {
//       const confirmDelete = confirm("정말 삭제하시겠습니까?");
//       if (confirmDelete) {
//         delbtn();
//       }
//     });
    
//     document.body.appendChild(deleteButton);
//   });
  
//   function delbtn() {
//     const getpass = prompt("비밀번호를 입력하세요.");
//     const url = "/api/userdl?u_pw=" + encodeURIComponent(getpass);
  
//     fetch(url, { method: "POST", headers: { "Content-Type": "application/json" } })
//       .then(response => response.json())
//       .then(apiData => {
//         if (apiData.flg === "0") {
//           const u_id = "예시_사용자_ID"; // 실제 사용자 ID로 대체해주세요
//           const deleteUrl = "/api/del?u_id=" + encodeURIComponent(u_id);
  
//           fetch(deleteUrl, { method: "POST" })
//             .then(response => response.json())
//             .then(data => {
//               // 삭제 후에 응답을 처리하는 부분이 필요하다면 처리해주세요
//             })
//             .catch(error => console.error(error));
//         }
//       })
//       .catch(error => console.error(error));
//   }




