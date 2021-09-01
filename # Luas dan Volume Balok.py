# Luas dan Volume Balok
# Nama : Elsa Dwi Handayani
# Nim : 19051397035

print ("Menghitung Luas dan Volume Balok")

p = int(input("Masukkan Panjangnya  = "))
l = int(input("Masukkan Lebarnya  = "))
t = int(input("Masukkan Tingginya  = "))
if p <0 or  l <0 or t <0 or t <0 :
        raise ValueError
luas = (2*p*l)+(2*p*t)+(2*l*t)
volume = p*l*t
print("Luas Baloknya Adalah  = ", luas)
print("Volume Baloknya Adalah  = ", volume)