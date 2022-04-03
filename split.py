def linspace(a, b,n=100):
    if n < 2:
        return b
    diff = ((float(b) - float(a)) / (n - 1))
    return [int(diff * i) + a for i in range(n)]


bina = open("banner.jpg", "rb")
file = bina.read()
bina.close()
numofchunks = 4
size = len(file)
print(size)
x = linspace(0, size, numofchunks + 1)
print(x)

for index in zip(x[:-1], x[1:]):
    bina = open(str(index[0]) + ".chunk", "wb")
    bina.write(index[0].to_bytes(4, "big"))
    bina.write(file[index[0]:index[1]])
    bina.close()


