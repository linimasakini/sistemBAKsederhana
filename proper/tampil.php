1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutorial Belajar JavaScript</title>
</head>
 
<body>
<h3>Contoh 1: Mengambil nilai tag span</h3>
  <p>Nama: Andika Siswoyo, Nilai: <span id="nilai_andika">80</span>
  <br />Nama: Joko Susilo, Nilai: <span id="nilai_joko">92</span></p>
<button id="tombol_p">Tampilkan Nilai</button>
 
<br/>
<br/>
 
<h3>Contoh 2: Mengambil nilai tag input</h3>
<form onsubmit="return false">
  <label>Rika Pratiwi: </label>
  <input type="text" id="input_form" value="90"/>
  <button id="tombol_form">Tampilkan Nilai</button>
</form>
 
<br/>
<br/>
 
<h2>Hasil: <span id="hasil"></span></h2>
</body>
 
<script>
document.getElementById("tombol_p").
addEventListener("click", tampilkan_nilai_p);
 
document.getElementById("tombol_form").
addEventListener("click", tampilkan_nilai_form);
 
function tampilkan_nilai_p() {
    var nilai_andika=document.getElementById("nilai_andika").innerHTML;
    var nilai_joko=document.getElementById("nilai_joko").innerHTML;
    document.getElementById("hasil").innerHTML=
    nilai_andika+" dan "+nilai_joko;
}
 
function tampilkan_nilai_form(){
    var nilai_form=document.getElementById("input_form").value;
    document.getElementById("hasil").innerHTML=nilai_form;
}
</script>
</html>