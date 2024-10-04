<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, th, td{
            width: 100%;
            border: 1px solid white;
        }

        table {
            border-radius: 3px;
        }

        th {
            background-color: pink;
            color: #2B3643;
            padding: 5px;
            text-align: center;
        }

        td {
            padding: 5px;
            background-color: #F5F5DC;
        }

        body {
            background-color: #b063d8;
        }

    </style>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];

        echo "<table>";
            echo "<tr>";
                echo "<th>Nama</th>";
                echo "<th>Domisili</th>";
                echo "<th>Jenis Kelamin</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>{$Dosen ['nama']}</td>";
                echo "<td>{$Dosen ['domisili']}</td>";
                echo "<td>{$Dosen ['jenis_kelamin']}</td>";
            echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>