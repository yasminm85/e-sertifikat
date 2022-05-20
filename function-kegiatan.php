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
    $nama_kegiatan = $_POST["nama_kegiatan"];
    $tanggal_mulai = $_POST["tanggal_mulai"];
    $tanggal_selesai = $_POST["tanggal_selesai"];
    $tempat_kegiatan = $_POST["tempat_kegiatan"];
    $kota = $_POST["kota"];
    $provinsi = $_POST["provinsi"];
    $negara = $_POST["negara"];
   

    //query insert data
    $query = "INSERT INTO data_kegiatan VALUES
    ('','$nama_kegiatan', '$tanggal_mulai', '$tanggal_selesai', '$tempat_kegiatan', '$kota', '$provinsi', '$negara')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id_kegiatan){
    global $conn;
    mysqli_query($conn, "DELETE FROM data_kegiatan WHERE id_kegiatan = $id_kegiatan");
    return mysqli_affected_rows($conn);
}
function edit($data){
    global $conn;
    $id_kegiatan = $data["id_kegiatan"];
    $nama_kegiatan = htmlspecialchars($data["nama_kegiatan"]);
    $tanggal_mulai = htmlspecialchars($data["tanggal_mulai"]);
    $tanggal_selesai =htmlspecialchars($data["tanggal_selesai"]);
    $tempat_kegiatan = htmlspecialchars($data["tempat_kegiatan"]);
    $kota = htmlspecialchars($data["kota"]);
    $provinsi = htmlspecialchars($data["provinsi"]);
    $negara = htmlspecialchars($data["negara"]);
    
    //query update data
    $query = "UPDATE data_kegiatan SET
    nama_kegiatan = '$nama_kegiatan',
    tanggal_mulai = '$tanggal_mulai',
    tanggal_selesai = '$tanggal_selesai',
    tempat_kegiatan = '$tempat_kegiatan',
    kota = '$kota',
    provinsi = '$provinsi',
    negara = '$negara'
    WHERE id_kegiatan = $id_kegiatan
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



?>

