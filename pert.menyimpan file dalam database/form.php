<!DOCTYPE html>
<html Lang="en";
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    </head>
    
    <body>
        <h2>
            FORM TAMBAH MAHASISWA
        </h2>
        <FORM ACTION="simpan.php" method="POST">
            NIM : <br>
            <input type="text" name="txtnim"><br>

            Nama : <br>
            <input type="text" name="txtnama"><br>

        Jenis Kelamin : <br>
    <select name="txtjenkel">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>

    Tempat Tanggal Lahir : <br>
    <input type="text" name="txtlahir"><br>
    Nomor Hp: <br>
    <input type="text" name="txthp"><br>
    <button type="submit">Simpan</button>

        </FORM>
    </body>
    </html>