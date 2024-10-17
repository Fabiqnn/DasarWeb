<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Form</title>
</head>
<body>
    <h3>Penghasil Form</h3>
    <form name="Form">
        <label for="inputAngka">Masukkan inputan angka</label> <br>
        <input type="number" id="inputAngka" name="inputAngka" min="1" > <br>
    </form>

    <button onclick="pemanggilanFungsi()">Buat Form</button>

    
    <form action="hasil.php" method="POST" name="formSaya">
        <div id="kontainerForm"></div>
    </form>
    

    <script>

        function pemanggilanFungsi() {
            if (validasiFormAngka() == false) {
                alert ("Inputan Angka Tidak Boleh Kosong!");
            } else {
                generateForm();
            }
        }

        function validasiFormAngka() {
            let input = document.forms["Form"]["inputAngka"].value;
            if (input == "") {
                return false;
            }
        }

        function validasiform() {
            let nama = document.forms["formSaya"]["Nama"].value;
            let asal = document.forms["formSaya"]["Asal"].value;
            let nim = document.forms["formSaya"]["NIM"].value;

            if (nama == "" || asal == "" || nim == "") {
                return false;
            }
        }

        function generateForm() { 
            let jumlahForm = document.getElementById("inputAngka").value;

            let kontainerForm = document.getElementById("kontainerForm");

            kontainerForm.innerHTML = "" 

            for (let index = 0; index < jumlahForm; index++) {
                let labelNama = document.createElement("label");
                labelNama.innerHTML = "Nama";
                let inputNama = document.createElement("input");
                inputNama.setAttribute ("type", "text");
                inputNama.setAttribute ("name", "Nama[]");
                inputNama.setAttribute ("placeholder", "Masukkan Nama");

                let labelAsal = document.createElement("label");
                labelAsal.innerHTML = "Asal Kota : ";
                let inputAsal = document.createElement("input");
                inputAsal.setAttribute ("type", "text");    
                inputAsal.setAttribute ("name", "Asal[]");
                inputAsal.setAttribute ("placeholder", "Asal Kota");

                let labelNIM = document.createElement("label");
                labelNIM.innerHTML = "NIM : ";
                let inputNIM = document.createElement("input");
                inputNIM.setAttribute ("type", "text");
                inputNIM.setAttribute ("name", "NIM[]");
                inputNIM.setAttribute ("placeholder", "Masukkan NIM");
                
                kontainerForm.appendChild(labelNama);
                kontainerForm.appendChild(inputNama);
                kontainerForm.appendChild(labelAsal);
                kontainerForm.appendChild(inputAsal);
                kontainerForm.appendChild(labelNIM);
                kontainerForm.appendChild(inputNIM);
                kontainerForm.appendChild(document.createElement("br"));
            }

            let submit = document.createElement("input");
            submit.setAttribute ("type", "submit");
            submit.setAttribute ("value", "Submit");

            kontainerForm.appendChild(submit);

        }
    </script>
</body>
</html>