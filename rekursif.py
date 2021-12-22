
def tampilkan(batas, nilai = 1):
	print(f"Nilai ke {nilai}")
	if nilai < batas:
		tampilkan(batas, nilai + 1)
#misal sy akan menampilkan nilai 1-10
tampilkan(10)




