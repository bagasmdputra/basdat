<?php 

    $db = pg_connect('host=localhost dbname=bagaskoro.meyca user=postgres password=Basdat');

        $query = "
        SELECT a.no_invoice, b.nama, a.tanggal, a.status, a.total_bayar, a.nominal, a.nomor 
        FROM TRANSAKSI_PULSA a LEFT JOIN PRODUK b ON a.kode_produk = b.kode_produk
        WHERE email_pembeli='Kendal@gmail.com'"; 

        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
   
            $stat = "hai";
            if ($myrow['status']=='1'){
                $stat = "Transaksi dilakukan";
            }else{
                $stat = "Pulsa sudah dibayar";
            }

            printf ("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
                    $myrow['no_invoice'],
                    $myrow['nama'], 
                    $myrow['tanggal'],
                    $stat,
                    $myrow['total_bayar'],
                    $myrow['nominal'],
                    $myrow['nomor']
                   );
        }

?> 