<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil User</title>
</head>
<body>
    <h2>User</h2>
    <a href="form_user.php"><button>Tambah User</button></a>
    <table border="1" style="margin-top: 10px;">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
        <?php 

        include "koneksi.php";
        
        $sql = "SELECT * FROM users ORDER BY id_user DESC";
        $tampil = mysqli_query($con, $sql);
        if(mysqli_num_rows($tampil)>0){
            $no = 1;
            while($r = mysqli_fetch_array($tampil)){
                echo "<tr>";
                echo "<td>".$no."</td>";
                echo "<td>".$r["id_user"]."</td>";
                echo "<td>".$r["nama_lengkap"]."</td>";
                echo "<td>".$r["email"]."</td>";
                echo "<td>".$r["level"]."</td>";
                echo "<td><a href='hapus_user.php?id=$r[id_user]'>hapus</a></td>";
                echo "</tr>";
                $no++;
            }
        }else{
            echo "0 results";
        }
        
        ?>
    </table>
</body>
</html>