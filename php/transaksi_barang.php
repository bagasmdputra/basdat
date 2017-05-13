<?php 

    $db = pg_connect('host=localhost dbname=bagaskoro.meyca user=postgres password=Basdat');

        $query = "SELECT * FROM TRANSAKSI_SHIPPED WHERE email_pembeli='Marica@gmail.com'"; 

        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
            
//            
//            if ($myrow['status']=='1'){
//                $stat = 'Transaksi dilakukan'
//            }else if ($myrow['status']=='2'){
//                $stat = 'Barang sudah dibayar'
//            }else if ($myrow['status']=='3'){
//                $stat = 'Barang sudah dikirim'
//            }else{
//                $stat = 'Barang sudah diterima'
//            }

            
            printf ("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>
                                    <p><a class=\"button stroke orange\" href=\"../sub/produklist.php\">Daftar produk</a></p>
                              </td></tr>",
                    $myrow['no_invoice'],
                    $myrow['nama_toko'], 
                    $myrow['tanggal'],
                    $myrow['tanggal'],
                    $myrow['total_bayar'],
                    $myrow['alamat_kirim'],
                    $myrow['biaya_kirim'],
                    $myrow['no_resi'],
                    $myrow['nama_jasa_kirim']
                   );
        } 
        ?> 