<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#click").click(function() {
                $("#tabel").slideToggle("slow");
            });
        });
    </script>
    <style>
        #click, #tabel {
            padding: 5px;
            text-align: center;
            background-color: #a7dbd8;
            border: solid 2px #e0e4cc;
            border-radius: 5px;
        }
        
        #click {
            font-size: 20px;
        }

        #tabel {
            display:  none;
            padding: 50px 50px 75px 50px;
        }

        #rata {
            font-size: 35px;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #D3D3D3;
        }

        th, td {
            text-align: left;
            padding: 16px;
            border: 1px solid #D3D3D3;
        }

        td {
            background-color: white;
        }

        th {
          background-color: #D3D3D3;  
        }

    </style>
    <title>Data Siswa</title>
</head>
<body>
    <h1>DATA SISWA</h1>
    <div id="click" >Click to show database</div>
    <div id="tabel">
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php
                $dataSiswa = array(
                    array("Andi", 15, "10A", "Malang"),
                    array("Siti", 16, "10B", "Batu"),
                    array("Budi", 17, "10A", "Sidoarjo"),
                    array("Anton", 18, "15B", "Jakarta")
                );
    
                for ($i=0; $i < count($dataSiswa); $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < count($dataSiswa[$i]); $j++) { 
                        echo "<td>" . $dataSiswa[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
            ?>

        </table>

    <br>

        <div id="rata">
            <?php
                $rata;
                $jumlah = 0;
                for ($i=0; $i < count($dataSiswa); $i++) { 
                    $jumlah += $dataSiswa[$i][1];
                }
                $rata = $jumlah / count($dataSiswa);
                
                echo "Rata-rata Umur Siswa: " . $rata . " Tahun";
            ?>
        </div>
    </div>

</body>
</html>