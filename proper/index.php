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
  <button onclick="tambahKolom()">Tambah</button>
  <pre></pre>
  <table>
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
      <tr>
        <td>
          <input type="date" name="" id="">
        </td>
        <td>
        <input type="text">
        </td>
        <td>
          <input type="text">
        </td>
        <td>
          <input type="number" value=0  onchange="updateAnggaran(this)" value="0">
        </td>
        <td>
          <input type="number" id="cabang" value="0" onchange="updateIuran(this)" value="0">
        </td>
        <td>
          <input type="number" id="UBunga" value="0" onchange="updateBunga(this)">
        </td>
        <td>
          <input type="number" id="URupa" value="0" onchange="updateRupa(this)">
        </td>
        <td>
          <span id="jumlas">0</span>
        </td>
        <td>
          <input type="number" value="0" onchange="updateGaji(this)">
        </td>
        <td>
          <input type="number" value="0" onchange="updateTunjK(this)">
        </td>
        <td>
          <input type="number" value="0" onchange="updateUangJ(this)">
        </td>
        <td>
          <input type="number" value="0" onchange="updateTunjJ(this)">
        </td>
        <td>
          <input type="number" value="0" onchange="updateUangM(this)">
        </td>
        <td>
          <input type="number" value="0" onchange="updateTunjOps(this)">
        </td>
        <td>
          <input type="number" value="0" onchange="updateTunjPrem(this)">
        </td>
        <td>
          <input type="number" value="0" onchange="updateIpen(this)">
        </td>
        <td>
          <input type="number" value="0"  onchange="updateAstek(this)">
        </td>
        <td>
          <input type="number" value="0" onchange="updateBpjs(this)">
        </td>
        <td>
          <input type="number" value="0" onchange="updateCuti(this)">
        </td>
        <td>
          <input type="number" value="0" onchange="updateThrk(this)">
        </td>
        <td>
          <input type="number" value="0" onchange="updateRupas(this)">
        </td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3">Jumlah : </td>
        <td><span class="total" id="totalSisa">0</span></td>
        <td><span class="total" id="iuranCabang">0</span></td>
        <td><span class="total" id="bungaTabungan">0</span></td>
        <td><span class="total" id="rupa">0</span></td>
        <td><span class="total" id="jumlahTerima">0</span></td>
        <td><span class="total" id="gajiP">0</span></td>
        <td><span class="total" id="tunjKinerja">0</span></td>
        <td><span class="total" id="uangJalan">0</span></td>
        <td><span class="total" id="tunjJabatan">0</span></td>
        <td><span class="total" id="uangMakan">0</span></td>
        <td><span class="total" id="tunjOps">0</span></td>
        <td><span class="total" id="tunjPremium">0</span></td>
        <td><span class="total" id="ipens">0</span></td>
        <td><span class="total" id="astek">0</span></td>
        <td><span class="total" id="bpjs">0</span></td>
        <td><span class="total" id="cuti">0</span></td>
        <td><span class="total" id="thrk">0</span></td>
        <td><span class="total" id="rupas">0</span></td>
      </tr>
    </tfoot>
  </table>
<pre></pre>
<button id="print">Simpan</button>
<script src="script.js"></script>
</body>
</html>