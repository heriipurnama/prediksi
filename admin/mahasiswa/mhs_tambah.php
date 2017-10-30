<div id='content' >
  <h1> Form Input Data Mahasiswa</h1>
  <form method="post" action="mhs_simpan.php">
    <table border = '1' align ='center'>
      <tr>
        <td>NIM</td>
        <td><input type="text" name="username" maxlength="20" required/></td>
      </tr>
      <tr>
        <td>DOSEN WALI</td>
        <td>
          <select name='id_wali' required>
            <?php
            include_once("../wali/crudWali.php");
            $sql= "select * from wali";
            $data = bacaWali($sql);
            // sampe sini berarti berhasil query
            foreach($data as $wali){
            $id_wali    = $wali['id_wali'];
            $nama_wali  = $wali['nama_wali'];
            echo "<option value=$id_wali>$nama_wali</option>";
            }
            ?>
          </select>
        </td>
      </tr>
      
      
      
      <tr>
        <td>NAMA MAHASISWA</td>
        <td><input type="text" name="nama_mhs" maxlength="30" required/></td>
      </tr>
      <tr>
        <td>TAHUN MASUK </td>
        <td>
          <select name="th_masuk" required>
            <option value="">Select tahun</option>
            <?php
            $thn_skr = date('Y');
            for ($x = $thn_skr; $x >= 2010; $x--) {
            ?>
            <option value="<?php echo $x ?>"><?php echo $x ?></option>
            <?php
            }
            ?>
          </select>
        </tr>
        <tr>
          <td>STATUS</td>
          <td>
            <select name="status" required>
              <option value="">Select</option>
              <option value="LC">LULUS CEPAT</option>
              <option value="LT">LULUS TEPAT</option>
              <option value="LL">LULUS LAMBAT</option>
              <option value="BL">BELUM LULUS</option>
            </select>
          </td>
        </tr>
        <tr>
          <td  colspan ='3' align ='center'>
            <input type="submit" value="Simpan">
            <input type="reset" value="Reset">
          </td>
        </tr>
        <input type ="hidden" name="nim" />
      </table>
    </form>
  </div>