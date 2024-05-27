function tambahKolom() {
    const table  = document.querySelector('table');
    const tbody = table.querySelector('tbody');

    if (!tbody) {
        tbody = document.querySelector('tbody');
        table.appendChild(tbody);
    }

    const existingRow = tbody.querySelector('tr:last-child');
    const newRow = existingRow.cloneNode(true);

    newRow.querySelector('input[type="number"]').value = 0;

    newRow.querySelector('input[type="number"]').onchange = function() {
        updateTotal(this);
    };
    tbody.appendChild(newRow);
}

function updateAnggaran(inputElement) {
    const anggaran = parseFloat(inputElement.value);
    const totalAnggaran = document.getElementById('totalSisa');
    const currentTotal = parseFloat(totalAnggaran.textContent);
    const newTotal = currentTotal+anggaran;
    totalAnggaran.textContent = newTotal.toFixed(2); 
}
function updateIuran(inputElement) {
    const iuran = parseFloat(inputElement.value);
    const totalIuran = document.getElementById('iuranCabang');
    const currentTotal = parseFloat(totalIuran.textContent);
    const newTotal = currentTotal+iuran;
    totalIuran.textContent = newTotal.toFixed(2); 
}
function updateBunga(inputElement) {
    const bunga = parseFloat(inputElement.value);
    const totalBunga = document.getElementById('bungaTabungan');
    const currentTotal = parseFloat(totalBunga.textContent);
    const newTotal = currentTotal+bunga;
    totalBunga.textContent = newTotal.toFixed(2); 
}
function updateRupa(inputElement) {
    const rupa = parseFloat(inputElement.value);
    const totalRupa = document.getElementById('rupa');
    const currentTotal = parseFloat(totalRupa.textContent);
    const newTotal = currentTotal+rupa;
    totalRupa.textContent = newTotal.toFixed(2); 
}
// function updateJumlahTerima(inputElement) {
    //     const jumlah = parseFloat(inputElement.value);
    //     const totalJumlah = document.getElementById('jumlahTerima');
    //     const currentTotal = parseFloat(totalJumlah.textContent);
//     const newTotal = currentTotal+jumlah;
//     totalJumlah.textContent = newTotal.toFixed(2); 
// }
function updateGaji(inputElement) {
    const gaji = parseFloat(inputElement.value);
    const totalGaji = document.getElementById('gajiP');
    const currentTotal = parseFloat(totalGaji.textContent);
    const newTotal = currentTotal+gaji;
    totalGaji.textContent = newTotal.toFixed(2); 
}
function updateTunjK(inputElement) {
    const tunjK = parseFloat(inputElement.value);
    const totaltunjK = document.getElementById('tunjKinerja');
    const currentTotal = parseFloat(totaltunjK.textContent);
    const newTotal = currentTotal+tunjK;
    totaltunjK.textContent = newTotal.toFixed(2); 
}
function updateUangJ(inputElement) {
    const uangJ = parseFloat(inputElement.value);
    const totalUangJ = document.getElementById('uangJalan');
    const currentTotal = parseFloat(totalUangJ.textContent);
    const newTotal = currentTotal+uangJ;
    totalUangJ.textContent = newTotal.toFixed(2); 
}
function updateTunjJ(inputElement) {
    const tunjJ = parseFloat(inputElement.value);
    const totalTunjJ = document.getElementById('tunjJabatan');
    const currentTotal = parseFloat(totalTunjJ.textContent);
    const newTotal = currentTotal+tunjJ;
    totalTunjJ.textContent = newTotal.toFixed(2); 
}
function updateUangM(inputElement) {
        const uangM = parseFloat(inputElement.value);
        const totalUangM = document.getElementById('uangMakan');
        const currentTotal = parseFloat(totalUangM.textContent);
        const newTotal = currentTotal+uangM;
        totalUangM.textContent = newTotal.toFixed(2); 
}
function updateTunjOps(inputElement) {
        const tunjOps = parseFloat(inputElement.value);
        const totaltunjOps = document.getElementById('tunjOps');
        const currentTotal = parseFloat(totaltunjOps.textContent);
        const newTotal = currentTotal+tunjOps;
        totaltunjOps.textContent = newTotal.toFixed(2); 
}
function updateTunjPrem(inputElement) {
        const tunjPrem = parseFloat(inputElement.value);
        const totaltunjPrem = document.getElementById('tunjPremium');
        const currentTotal = parseFloat(totaltunjPrem.textContent);
        const newTotal = currentTotal+tunjPrem;
        totaltunjPrem.textContent = newTotal.toFixed(2); 
}
function updateIpen(inputElement) {
        const ipen = parseFloat(inputElement.value);
        const totalIpen = document.getElementById('ipens');
        const currentTotal = parseFloat(totalIpen.textContent);
        const newTotal = currentTotal+ipen;
        totalIpen.textContent = newTotal.toFixed(2); 
}
function updateAstek(inputElement) {
        const astek = parseFloat(inputElement.value);
        const totalAstek = document.getElementById('astek');
        const currentTotal = parseFloat(totalAstek.textContent);
        const newTotal = currentTotal+astek;
        totalAstek.textContent = newTotal.toFixed(2); 
}
function updateBpjs(inputElement) {
        const bpjs = parseFloat(inputElement.value);
        const totalBpjs = document.getElementById('bpjs');
        const currentTotal = parseFloat(totalBpjs.textContent);
        const newTotal = currentTotal+bpjs;
        totalBpjs.textContent = newTotal.toFixed(2); 
}
function updateCuti(inputElement) {
        const cuti = parseFloat(inputElement.value);
        const totalCuti = document.getElementById('cuti');
        const currentTotal = parseFloat(totalCuti.textContent);
        const newTotal = currentTotal+cuti;
        totalCuti.textContent = newTotal.toFixed(2); 
}
function updateThrk(inputElement) {
        const thrk = parseFloat(inputElement.value);
        const totalThrk = document.getElementById('thrk');
        const currentTotal = parseFloat(totalThrk.textContent);
        const newTotal = currentTotal+thrk;
        totalThrk.textContent = newTotal.toFixed(2); 
}
function updateRupas(inputElement) {
        const thrk = parseFloat(inputElement.value);
        const totalThrk = document.getElementById('rupas');
        const currentTotal = parseFloat(totalThrk.textContent);
        let newTotal = currentTotal+thrk;
        totalThrk.textContent = newTotal.toFixed(2); 
}
function updateJumlah(){
    var iuranCabang = parseFloat(document.getElementById("cabang").value);
    var bungaTabungan = parseFloat(document.getElementById("UBunga").value); 
    var rupa = parseFloat(document.getElementById("URupa").value);
    var jumlah = iuranCabang+bungaTabungan+rupa;

    document.getElementById("jumlas").innerHTML= jumlah;
}

function tes() {
    const tes1 = parseFloat(document.getElementById("cabang").value);
    const tes2 = parseFloat(document.getElementById("UBunga").value);
    const tes3 = parseFloat(document.getElementById("URupa").value);

    const total = tes1+tes2+tes3;

    const format = total.toFixed(2);

    document.getElementById("jumlas").innerHTML= format;
}

document.getElementById("cabang").addEventListener("input",tes);
document.getElementById("UBunga").addEventListener("input",tes);
document.getElementById("URupa").addEventListener("input",tes);