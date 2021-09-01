# Menghitung Nilai Mahasiswa Unesa
# Nama : Elsa Dwi Handayani
# Nim : 19051397035

# IDENTITAS MAHASISWA
nama = input ("nama : ")
nim = input ("nim : ")

# deklarasi fungsi operator
def fungsi_total_nilai (Nilai_Partisipasi,Nilai_Tugas,Nilai_UTS,Nilai_UAS):
    Nilai_Partisipasi = int (Nilai_Partisipasi) *0.2
    Nilai_Tugas = int (Nilai_Tugas) *0.3
    Nilai_UTS = int (Nilai_UTS) *0.4
    Nilai_UAS = int (Nilai_UAS) *0.5
    Nilai_Akhir = Nilai_Partisipasi + Nilai_Tugas + Nilai_UTS + Nilai_UAS
    if Nilai_Partisipasi <0 or  Nilai_Tugas <0 or Nilai_UTS <0 or Nilai_UAS <0 :
        raise ValueError
    return Nilai_Akhir

# deklarasi fungsi percabangan
def fungsi_percabangan (var_Nilai) :
    var_indeks = ""
    if (var_Nilai >= 0 or var_Nilai < 40 or var_Nilai ) :
        var_indeks = "E"
    elif (var_Nilai >= 40 or var_Nilai or var_Nilai < 55 ) :
        var_indeks = "D"
    elif (var_Nilai >= 55 or var_Nilai or var_Nilai < 60 ) :
        var_indeks = "C"
    elif (var_Nilai >= 60 or var_Nilai or var_Nilai < 65 ) :
        var_indeks = "C+"
    elif (var_Nilai >= 65 or var_Nilai or var_Nilai < 70 ) :
        var_indeks = "B-"
    elif (var_Nilai >= 70 or var_Nilai or var_Nilai < 75 ) :
        var_indeks = "B"
    elif (var_Nilai >= 75 or var_Nilai or var_Nilai < 80 ) :
        var_indeks = "B+"
    elif (var_Nilai >= 80 or var_Nilai or var_Nilai < 85 ) :
        var_indeks = "A-"
    elif (var_Nilai >= 85 or var_Nilai or var_Nilai < 100 ) :
        var_indeks = "A"
    return var_indeks

# deklarasi pengrulangan
def fungsi_pengulangan () :
    var_hasil_perulangan = 0
    for i in range (1,3) :
        print ("..........Nilai ke" ,i, "..........")
        var_Partisipasi = input ("Nilai_Partisipasi :")
        var_Tugas = input ("Nilai_Tugas :")
        var_UTS = input ("Nilai_UTS :")
        var_UAS = input ("Nilai_UAS :")

        # pemanggilan fungsi penjumlahan
        var_hasil_perulangan += (int(fungsi_total_nilai(var_hasil_perulangan,var_Tugas,var_UTS,var_UAS)))
    return var_hasil_perulangan / i 

# pemanggilan fungsi perulangan
var_total = fungsi_pengulangan ()

print ("..........TOTAL NILAI..........")
print ("TOTAL NILAI AKHIR YANG DIDAPAT : ", var_total) 

# pemanggilan fungsi percabangan
print ("TOTAL NILAI AKHIR YANG DIDAPAT : ", fungsi_percabangan(var_total))