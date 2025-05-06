<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="formTT">
    <form action="" method="post">
        <table>
        <h1 style="text-align:center;">THÔNG TIN GHI DANH</h1>
            <tr>
                <td>Mã ghi danh: <input type="text" name="txtMaGD">(*)<br></td>
            </tr>
            <tr>
                <td>Họ và chữ lót: <input type="text" name="txtHoSV">(*)<br></td>
                <td>Tên: <input type="text" name="txtTen">(*)<br></td>
            </tr>
            <tr>
                <td>Ngày sinh: <input type="text" name="txtNS">(*)<br></td>
                <td>Giới tính: <input type="radio" name="GT" value=1 required>Nam<input type="radio" name="GT" value=0>Nữ(*)</td>
            </tr>
            <tr>
                <td>Email: <input type="text" name="txtemail"><br></td>
                <td>Điện thoại liên hệ: <input type="text" name="txtDTLH"><br></td>
            </tr>
            <tr>
                <td colspan="3">Ngành đăng ký: <select name="nganhdk">
                    <option value="">Lập trình máy tính</option>
                    <option value="">Quản trị mạng</option>
                    <option value="">Quản trị cơ sở dữ liệu</option>
                    <option value="">Thiết kế đồ hoạ</option>
                </select>(*)Đăng ký túc xá:<input type="checkbox" name="txtKTX">
                </td>
                
            </tr>
            <tr>
                <td><button type="submit" name="btnLuu" value="btnLuu">Lưu</button></td>
            </tr>
        
<?php 
if(isset($_POST['btnLuu'])){

    $MaGD = $_POST['txtMaGD'];
    $HoSV = $_POST['txtHoSV'];
    $TenSV = $_POST['txtTen'];
    $NS = $_POST['txtNS'];
    $gtinh = $_POST['GT'];
    $email = $_POST['txtemail'];
    $sdt = $_POST['txtDTLH'];
    $Nganhdk = $_POST['nganhdk'];
    if(empty($_POST['txtKTX'])){
        $dkiktx = 0;
    }else{
        $dkiktx = 1;
    }
    require('connect.php');
    $Them = "Insert into tbl_sinhvien values('$MaGD','$HoSV','$TenSV', '$NS', '$gtinh', '$email', '$sdt', '$Nganhdk', '$dkiktx')";
    mysqli_query($conn, $Them);
    header('location: thongtinghidanh.php');
}


?>
    </table>
</form>
</div>
</body>
</html>