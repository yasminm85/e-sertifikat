<?php 

$conn = mysqli_connect("localhost", "root","", "sertif");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $nama = $_POST["nama"];
    $divisi = $_POST["divisi"];
    $jurusan = $_POST["jurusan"];

    //query insert data
    $query = "INSERT INTO data_peserta VALUES
    ('','$nama', ' $divisi','$jurusan')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM data_peserta WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function edit($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $divisi = htmlspecialchars($data["divisi"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    
    //query update data
    $query = "UPDATE data_peserta SET
    nama = '$nama',
    divisi = '$divisi',
    jurusan = '$jurusan'
    WHERE id = $id
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>

