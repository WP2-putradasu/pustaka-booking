<html>

<head>
    <title>View Input Cinema</title>
</head>

<body>
    <center>
        <form action="<?= base_url('cinema/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Pemesanan Tiket Cinema 99
                    </th>
                </tr> 
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th align= "left">Nama Pemesan</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th align= "left">Judul Film</th>
                    <td>:</td>
                    <td>
                    <select name="judul" id="judul">
                            <option value="">Pilih Judul Film</option>
                            <option value="Parasite">Parasite</option>
                            <option value="Hereditary">Hereditary</option>
                            <option value="The Closet">The Closet</option>
                            <option value="Kamen Rider Reiwa">Kamen Rider Reiwa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th align= "left">Pukul</th>
                    <td>:</td>
                    <td>
                        <input type="radio"name="pukul" value="14.20">14.20 
                        <input type="radio"name="pukul" value="15.40">15.40 
                        <input type="radio"name="pukul" value="16.40">16.40
                    </td>
                </tr>
                <tr>
                    <th  align= "left">Tipe Studio</th>
                    <td>:</td>
                    <td>
                        <input type="radio"name="tipe" value="Reguler 2D">Reguler 2D 
                        <input type="radio"name="tipe" value="3D">3D 
                        <input type="radio"name="tipe" value="Velvet">velvet 
                    </td>
                </tr>
                <tr>
                    <th align= "left">Jumlah Pesan</th>
                    <td>:</td>
                    <td colspan="1">
                        <input type="text" name="jumlah" id="jumlah" >
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Hitung">
                        <input type="reset" value="Batal">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html> 