<!DOCTYPE html>
<html>
<head>
    <title>Ödeme Listesi</title>
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
    <h1>Ödeme Listesi</h1>

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
   $sql = "SELECT * FROM odeme";
   $result = $conn->query($sql);
    ?>

    <table>
        <tr>
            <th>Ödeme ID</th>
            <th>Kiralama ID</th>
            <th>Ödeme Tarihi</th>
            <th>Kart No</th>
            <th>Tutar</th>
        </tr>
        <?php
        // Verileri ekrana yazdırma
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["odeme_id"] . "</td>";
                echo "<td>" . $row["kiralama_id"] . "</td>";
                echo "<td>" . $row["odeme_tarihi"] . "</td>";
                echo "<td>" . $row["kart_no"] . "</td>";
                echo "<td>" . $row["tutar"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tabloda veri bulunmamaktadır.</td></tr>";
        }
        ?>
    </table>

</body>
</html>