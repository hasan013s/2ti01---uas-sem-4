<?php 
        $app = new application;
        $id=$_GET['idproduk'];
       $delete="DELETE FROM `produk` WHERE id_produk='$id'";
       $app->Deleteproduk($delete);
    
        // ridirect link
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=dasboard.php?page=app/view_produk">';
    

?>