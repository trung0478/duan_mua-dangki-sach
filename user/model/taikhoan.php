<?php 
function insert_taikhoan($email, $user, $pass)
{
    // $birth = date('Y/d/m');
    $sql = "insert into taikhoan(email,ho_ten,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE ho_ten = '" . $user . "' AND pass = '" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function getOneAccount($id_taikhoan) {
    $sql = "SELECT * FROM taikhoan WHERE id_taikhoan = $id_taikhoan";
    $sp = pdo_query_one($sql);
    return $sp;
}


function sendMail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) {
        sendMailPass($email, $taikhoan['ho_ten'], $taikhoan['pass']);
        return "Gửi email thành công";
    } else {
        return "Email bạn nhập ko có trong hệ thống";
    }
}

function sendMailPass($email, $username, $pass)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);


    // gửi mailtrap
    // $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = '12ed79a42d61df';                     //SMTP username
    // $mail->Password   = 'd75a337785e533';     

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'thanhtung2432004@gmail.com';                     //SMTP username
        $mail->Password   = 'kwjm vrkt xilq rcjn';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients ngưởi nhận
        $mail->setFrom('thanhtung2432004@gmail.com', 'Chủ tịch');
        $mail->addAddress($email, $ho_ten);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'BAN YEU CAU LAY LAI MAT KHAU!';

        $mail->Body    = 'Mau khau cua ban la' . $pass . ' Nhé !';
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


function status($n) {
    switch ($n) {
        case 1:
            $status_message = "<span class='text-success'>Chưa xử lý</span>";
            break;
        case 2:
            $status_message = "<span class='text-success'>Đã xác nhận</span>";
            break;
        case 3:
            $status_message = "<span class='text-success'>Đang giao hàng</span>";
            break;
        case 4:
            $status_message = "<span class='text-success'>Đã giao hàng</span>";
            break;
        case 5:
            $status_message = "<span class='text-success'>Đã nhận hàng</span>";
            break;
        case 0:
            $status_message = "<span class='text-danger'>Đã hủy đơn</span>";
            break;
        
        default:
            $status_message = "Chưa xử lý";
            break;
    }
    return $status_message;
}


function lichsu_dh($id_taikhoan) {
    $sql = "SELECT * FROM donhang
    WHERE id_taikhoan = $id_taikhoan
    ORDER BY id_donhang DESC";
    $order = pdo_query_all($sql);
    return $order;
}

function chitiet_lichsu_dh_one($id_dh) {
    $sql = "SELECT donhang_chitiet.*, donhang.* FROM donhang_chitiet
    JOIN donhang ON donhang_chitiet.id_donhang = donhang.id_donhang
    WHERE donhang_chitiet.id_donhang = $id_dh";
    $order = pdo_query_one($sql);
    return $order;
}

function chitiet_lichsu_dh_all($id_dh) {
    $sql = "SELECT donhang_chitiet.*, donhang.* FROM donhang_chitiet
    JOIN donhang ON donhang_chitiet.id_donhang = donhang.id_donhang
    WHERE donhang_chitiet.id_donhang = $id_dh";
    $order = pdo_query_all($sql);
    return $order;
}

function update_dh($trangthai, $id_dh){
    $sql ="update donhang set trangthai = $trangthai where id_donhang=$id_dh";
    pdo_execute($sql);
}


?>