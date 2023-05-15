<!DOCTYPE html>
<html>
<head>
    <title>Araç Listesi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f7f7f7;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Araç Listesi</h1>


    <?php
   // Veritabanı bağlantısı
   $servername = "localhost";
   $username = "zumra";
   $password = "12345";
   $dbname = "arackiralama";
   
   // MySQLi kullanarak bağlantı oluştur
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   // Bağlantıyı kontrol et
   if ($conn->connect_error) {
       die("Veritabanina bağlanirken hata oluştu: " . $conn->connect_error);
   }
   
   // Verileri almak için sorgu
   $sql = "SELECT * FROM araclar";
   $result = $conn->query($sql);
    ?>

    <table>
        <tr>
            <th>Araç ID</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Yıl</th>
            <th>Renk</th>
            <th>Günlük Kiralama Fiyatı</th>
        </tr>
        <?php
        // Verileri ekrana yazdırma
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["arac_id"] . "</td>";
                echo "<td>" . $row["marka"] . "</td>";
                echo "<td>" . $row["model"] . "</td>";
                echo "<td>" . $row["yil"] . "</td>";
                echo "<td>" . $row["renk"] . "</td>";
                echo "<td>" . $row["gunluk_kiralama_fiyati"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tabloda veri bulunmamaktadır.</td></tr>";
        }
        ?>
    </table>
    
</body>
</html>

