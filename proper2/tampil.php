<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="mid">Jangan Lupa Like Komen & Skrikeb</h1>
  <p><a href="tampil.php">Lihat Data Yang Tersimpan</p></a>
  <button id="tambahKolom">Tambah</button>
  <pre></pre>
  <table id="tableKas">
    <thead>
      <tr>
        <th rowspan="2">Tanggal</th>
        <th rowspan="2">Keterangan</th>
        <th rowspan="2">Nomor Kas</th>
        <th rowspan="2">Sisa Anggaran</th>
        <th colspan="4">Penerimaan</th>
        <th colspan="13">Pengeluaran</th>
        <th rowspan="2">Jumlah</th>
        <th rowspan="2">Sisa</th>
      </tr>
      <tr>
        <th>Iuran Cabang</th>
        <th>Bunga Tabungan</th>
        <th>Rupa-rupa</th>
        <th>Jumlah</th>
        <th>Gaji Pokok</th>
        <th>Tunj. Kinerja</th>
        <th>Uang Jalan</th>
        <th>Tunj. Jabatan</th>
        <th>Uang Makan</th>
        <th>Tunj. Operasional</th>
        <th>Tunj. Premium</th>
        <th>IPENS</th>
        <th>ASTEK</th>
        <th>BPJS</th>
        <th>Cuti</th>
        <th>THRK</th>
        <th>Rupa-rupa</th>
      </tr>
    </thead>
    <tbody>
        <?php
            include "koneksi.php";
            $data = mysqli_query($conn, "select * from anggaran");
            $sisaAnggaran = 0;
            $iuranCabang = 0;
            $bungaTabungan = 0;
            $rupaAwal = 0;
            $jumlahPenerimaan = 0;
            $gajiPokok = 0;
            $tunjKinerja = 0;
            $uangJalan = 0;
            $tunjJabatan = 0;
            $uangMakan = 0;
            $tunjOperasional = 0;
            $tunjPremium = 0;
            $ipens = 0;
            $astek = 0;
            $bpjs = 0;
            $cuti = 0;
            $thrk = 0;
            $rupaAkhir = 0;
            $jumlahAkhir = 0;
            $sisa = 0;
            while($d = $data->fetch_array()){
                $sisaAnggaran += $d['sisa_th_lalu'];
                $iuranCabang += $d['iuran_cabang'];
                $bungaTabungan += $d['bunga_tabungan'];
                $rupaAwal += $d['rupa_awal'];
                $jumlahPenerimaan = $iuranCabang+$bungaTabungan+$rupaAwal;
                $gajiPokok += $d['gaji_pokok'];
                $tunjKinerja += $d['tunj_kinerja'];
                $uangJalan += $d['uang_jalan'];
                $tunjJabatan += $d['tunj_jabatan'];
                $uangMakan += $d['uang_makan'];
                $tunjOperasional += $d['tunj_operasional'];
                $tunjPremium += $d['tunj_premium'];
                $ipens += $d['ipens'];
                $astek += $d['astek'];
                $bpjs += $d['bpjs'];
                $cuti += $d['cuti'];
                $thrk += $d['thrk'];
                $rupaAkhir += $d['rupa_akhir'];
                $jumlahAkhir = $gajiPokok+$tunjKinerja+$uangJalan+$tunjJabatan+$uangMakan+$tunjOperasional+$tunjPremium+$ipens+$astek+$bpjs+$cuti+$thrk+$rupaAkhir;
                ?>
                <tr>
                    <td id="tanggal"><?= $d["tanggal"];?></td>
                    <td id="keterangan"><?= $d["keterangan"];?></td>
                    <td id="nomorKasa"><?= $d["no_kas"];?></td>
                    <td id="sisaAnggaran"><?= $d["sisa_th_lalu"];?></td>
                    <td id="iuranCabang"><?= $d["iuran_cabang"];?></td>
                    <td id="bungaTabungan"><?= $d["bunga_tabungan"];?></td>
                    <td id="rupaAwal"><?= $d["rupa_awal"];?></td>
                    <td id="jumlahPenerimaan">0</td>
                    <td id="gajiPokok"><?= $d["gaji_pokok"];?></td>
                    <td id="tunjKinerja"><?= $d["tunj_kinerja"];?></td>
                    <td id="uangJalan"><?= $d["uang_jalan"];?></td>
                    <td id="tunjJabatan"><?= $d["tunj_jabatan"];?></td>
                    <td id="uangMakan"><?= $d["uang_makan"];?></td>
                    <td id="tunjOperasional"><?= $d["tunj_operasional"];?></td>
                    <td id="tunjPremium"><?= $d["tunj_premium"];?></td>
                    <td id="ipens"><?= $d["ipens"];?></td>
                    <td id="astek"><?= $d["astek"];?></td>
                    <td id="bpjs"><?= $d["bpjs"];?></td>
                    <td id="cuti"><?= $d["cuti"];?></td>
                    <td id="thrk"><?= $d["thrk"];?></td>
                    <td id="rupaAkhir"><?= $d["rupa_akhir"];?></td>
                    <td id="jumlahAkhir">0</td>
                    <td id="sisa">0</td>
                </tr>
                <?
            }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan=3>Jumlah :</td>
            <td><?= $sisaAnggaran?></td>
            <td><?= $iuranCabang?></td>
            <td><?= $bungaTabungan?></td>
            <td><?= $rupaAwal?></td>
            <td><?= $jumlahPenerimaan?></td>
            <td><?= $gajiPokok?></td>
            <td><?= $tunjKinerja?></td>
            <td><?= $uangJalan?></td>
            <td><?= $tunjJabatan?></td>
            <td><?= $uangMakan?></td>
            <td><?= $tunjOperasional?></td>
            <td><?= $tunjPremium?></td>
            <td><?= $ipens?></td>
            <td><?= $astek?></td>
            <td><?= $bpjs?></td>
            <td><?= $cuti?></td>
            <td><?= $thrk?></td>
            <td><?= $rupaAkhir?></td>
            <td><?= $jumlahAkhir?></td>
            <td><?= $sisa?></td>
        </tr>
    </tfoot>
</table>
</body>
</html>