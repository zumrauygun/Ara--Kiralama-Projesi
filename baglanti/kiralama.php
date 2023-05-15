<!DOCTYPE html>
<html>
<head>
    <title>Kiralama Listesi</title>
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
    <h1>Kiralama Listesi</h1>

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
   $sql = "SELECT * FROM kiralama";
   $result = $conn->query($sql);
    ?>

    <table>
        <tr>
            <th>Kiralama ID</th>
            <th>Müşteri ID</th>
            <th>Araç ID</th>
            <th>Kiralama Tarihi</th>
            <th>Teslim Tarihi</th>
            <th>Toplam Ücret</th>
        </tr>
        <?php
        // Verileri ekrana yazdırma
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["kiralama_id"] . "</td>";
                echo "<td>" . $row["kullanici_id"] . "</td>";
                echo "<td>" . $row["arac_id"] . "</td>";
                echo "<td>" . $row["kiralama_tarihi"] . "</td>";
                echo "<td>" . $row["teslim_tarihi"] . "</td>";
                echo "<td>" . $row["toplam_ucret"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tabloda veri bulunmamaktadır.</td></tr>";
        }
        ?>
    </table>

</body>
</html>