<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table align = 'center' border = '1px' cellspacing = '0px'>
            <tr>
                <td>STT</td>
                <td>Mã ghi danh</td>
                <td>Họ và chữ lót</td>
                <td>Tên</td>
                <td>Ngày sinh</td>
                <td>GioiTinh</td>
                <td>Email</td>
                <td>Điện thoại liên hệ</td>
                <td>Ngành đăng ký</td>
                <td>Đăng ký ký túc xá</td>
                <td>Chức năng</td>
            </tr>
            
            
       
    <?php
    require('connect.php');
    $selectsv = 'select * from tbl_sinhvien';
    $BangSV = mysqli_query($conn, $selectsv);
    if(mysqli_num_rows($BangSV)){
        $STT = 0;
        while($row = mysqli_fetch_assoc($BangSV)){
            $STT++;
            $MaG = $row['MaGD'];
            echo '<tr>';
            echo '<td>' . $STT . '</td>';
            echo '<td>' . $row['MaGD'] . '</td>';
            echo '<td>' . $row['HoSV'] . '</td>';
            echo '<td>' . $row['TenSV'] . '</td>';
            echo '<td>' . $row['NgaySinh'] . '</td>';
            if($row['GioiTinh'] == 1){
                echo '<td>Nam</td>';
            }else{
                echo '<td>Nữ</td>';
            }
            echo '<td>' . $row['Email'] . '</td>';
            echo '<td>' . $row['DienThoaiLH'] . '</td>';
            echo '<td>' . $row['NganhDK'] . '</td>';
            if($row['DangKyKTX'] == 1){
                echo '<td>Có</td>';
            }else{
                echo '<td>Không</td>';
            }
            echo "<td><a href='xoa.php?id=$MaG'>Xoá</a> | <a href='sua.php?id=$MaG'>Sửa</td>";
            echo '</tr>';
        }
    }
    if(isset($_POST['btnThem']))
    {
        header('location: ghidanh.php');
    }
    ?>
    <tr>
        <td colspan="11" align="center"><button value="btnThem" name="btnThem">Thêm</button></td>
    </tr>
     </table>
    </form>
</body>
</html>