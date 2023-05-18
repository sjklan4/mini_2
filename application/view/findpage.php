<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="mainCon">
            <div class="registerTitle">아이디 찾기</div>
            <div class="findIdPw">
            <form action="/aplication/view/member_process.php?mode=findId" method="post">
                <p>이름 : <input type="text"  name="name" placeholder="이름 입력" size="30" required></p>
                <p class="findEmail">이메일 : <input type="text"  name="email" placeholder="이메일 입력" size="30" required></p>
                <div class="findBtn">
                <input type="submit" value="찾기">&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
            </div>
            <div class="findMenu">
                <button onclick="location.href='findId.php'">아이디 찾기</button>&nbsp;&nbsp;&nbsp;
                <button onclick="location.href='findPw.php'">비밀번호 찾기</button>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>