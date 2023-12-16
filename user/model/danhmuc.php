    <?php
function list_danhmuc()
{
    $sql = "select * from danhmuc";
    $result = pdo_query_all($sql);
    return $result;
}

function add_danhmuc($ten_dm, $trangthai)
{
    $sql = "INSERT INTO danhmuc(tendanhmuc,trangthai) VALUES('$ten_dm', $trangthai)";
    pdo_execute($sql);
}

function update_danhmuc($iddm, $ten_dm, $trangthai)
{
    $sql = "update danhmuc set tendanhmuc='$ten_dm', trangthai=$trangthai where id_danhmuc=$iddm";
    pdo_execute($sql);
}


function getone_dm($iddm) {
    $sql="select * from danhmuc where id_danhmuc=$iddm";
    $result = pdo_query_one($sql);
    return $result;
}

function delete_danhmuc($iddm)
{
    $sql = "delete from danhmuc where id_danhmuc=$iddm";
    pdo_execute($sql);
}



?>