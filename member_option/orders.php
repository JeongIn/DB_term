<html>
    <head>
        <meta charset="utf-8">
        <title> 주문신청 </title>
    </head>
    
    <body>
        <form method="post" action="order_save.php">
            <h1>주문신청</h1>
            <table border="1">
                <tr>
                    <td>날짜</td>
                    <td><input type="text" size="50" maxlength="12" name="date"></td>
                </tr>
                <tr>
                    <td>인원수</td>
                    <td><input type="text" size="50" maxlength="2" name="number"></td>
                </tr>
                <tr>
                    <td>내용</td>
                    <td><input type="text" size="50" maxlength="50" name="contents"></td>
                </tr>
                <tr>
                    <td>음식점 id</td>
                    <td><input type="text" size="50" maxlength="15" name="res_id"></td>
                </tr>
            </table>
            <input type="submit" value="신청">
        </form>
    </body>
</html>