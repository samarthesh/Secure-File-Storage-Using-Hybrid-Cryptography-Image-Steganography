import glob

'./chunks/'
combine = []

for filename in glob.glob('*.chunk'):
    bina = open(filename, "rb")
    num = int.from_bytes(bina.read(4), "big")
    file = bina.read()
    bina.close()
    print(filename)
    print(file)
    combine.append((num, file))

print(combine)
combine.sort()
print(combine)
bina = open("banner.jpg", "wb")
for byt in combine:
    bina.write(byt[1])
bina.close()
