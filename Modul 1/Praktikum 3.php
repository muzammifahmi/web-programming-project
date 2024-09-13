<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum 3</title>
</head>
<body background="pantai.jpg">
    <br><br><br><br>
    <form>
        <table align="center" bgcolor="#ADD8E6">
            <caption>INPUT DATA MAHASISWA</caption>
            <tr>
                <td>Nama</td><td>:</td><td><input type="text"></td>
            </tr>
            <tr>
                <td>Usia</td><td>:</td><td><input type="text" maxlength="2" size="1" ></td>
            </tr>
            <tr>
                <td>Kelamin</td><td>:</td><td>
                    <input type="radio" name="Kelamin" value="Laki-laki">
                    <label for="Laki-laki">laki-laki</label> 
                    <input type="radio" name="Kelamin" value="Perempuan">
                    <label for="Perempuan">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td><td>:</td><td><select name="" id="">
                    <option value="S1 Pendidikan Sastra Mesin">S1 Pend Sastra Mesin</option>
                    <option value="S1 Pendidikan Teknik Kedokteran">S1 Pend Teknik Kedokteran</option>
                    <option value="S1 Pendidikan Teknik Perbintangan">S1 Pend Teknik Perbintangan</option>
                    <option value="S1 Pendidikan Kedokteran Komputer">S1 Pend Kedokteran Komputer</option>
                </select></td>
            </tr><tr>
                <td>Email</td><td>:</td><td><input type="email" name="" id=""></td>
            </tr><tr>
                <td>Web</td><td>:</td><td><input type="text"></td>
            </tr><tr>
                <td>Hobi</td><td>:</td><td>
                    <input type="checkbox" name="" id="">Sepak Bola <br>
                    <input type="checkbox" name="" id="">Panahan<br>
                    <input type="checkbox" name="" id="">Berenang <br>
                    <input type="checkbox" name="" id="">Nonton Anime<br>
                </td>
            </tr><tr>
                <td>Password</td><td>:</td><td>
                    <input type="password" name="" id="">
                </td>
            </tr><tr>
                <td colspan="3" align="center"><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
