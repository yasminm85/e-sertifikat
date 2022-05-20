<?php 

require 'function-kegiatan.php';

$id_kegiatan = $_GET["id_kegiatan"];

if(hapus($id_kegiatan) > 0){
    echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href = 'table-kegiatan.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal dihapus');
        
        </script>
        ";
}

?>