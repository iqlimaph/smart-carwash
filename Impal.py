a = float(input("Masukan Nilai A :"))
b = float(input("Masukan Nilai B :"))
c = float(input("Masukan Nilai C :"))

if (a <= 0 and b <= 0 and c <= 0):
    print("Tidak Ada Segitiga Yang Dibangun")
elif (a >= b + c or b >= a + c or c >= a + b):
    print("Tidak Ada Segitiga Yang Dibangun")
elif (a == b or b == c or a == c):
    print("Segitiga Sama Kaki")
elif (a == b and b == c):
    print("Segitiga Sama Sisi")
elif (a**2) == (b)**2 + (c)**2 or (b)**2 == (a)**2 + c**2 or c**2 == a**2 +b**2:
    print("Segitiga Siki-siku")
else :
    print("Segitiga Bebas")