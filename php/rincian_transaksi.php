<?php 
    

    $number = $_GET['invoice_no'];

    $db = pg_connect('host=localhost dbname=bagaskoro.meyca user=postgres password=Basdat');
//    email diganti dari session
        $email = "gaston@gmail.com";

        $query = "
            SELECT a.kode_produk, nama,berat, kuantitas, b.harga, sub_total, komentar 
            FROM LIST_ITEM a 
            LEFT JOIN PRODUK b 
                ON a.kode_produk = b.kode_produk 
            LEFT JOIN 
                    (SELECT * FROM ULASAN WHERE email_pembeli='$email')  c 
                ON c.kode_produk = b.kode_produk 
            WHERE no_invoice='$number' "; 

        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
            
            $kode_produk = $myrow['kode_produk'];
            $ulasan = "<button type=\"submit\" disabled>Ulas</button>";
                
            if(is_null($myrow['komentar'])){
                $ulasan = "<p><a class=\"button stroke orange\" href=\"../sub/ulas.php?kode_produk=$kode_produk\">Ulas</a></p>";
            }
            
            
            printf ("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>
                                    %s
                              </td></tr>",
                    $myrow['nama'],
                    $myrow['berat'], 
                    $myrow['kuantitas'],
                    $myrow['harga'],
                    $myrow['sub_total'],
                    $ulasan
                    
                   );
        } 
        ?> 