from pathlib import Path
import click
import questionary
import os
import shutil
import sys

read_buffer_size = 1024


def _chunk_file(file, extension, destination, size):

    d = Path(destination)
    d.mkdir(parents=True, exist_ok=True)

    current_chunk_size = 0
    current_chunk = 1
    done_reading = False
    while not done_reading:
        with open(f'{destination}/{current_chunk}{extension}.chk', 'ab') as chunk:
            while True:
                bfr = file.read(read_buffer_size)
                if not bfr:
                    done_reading = True
                    break

                chunk.write(bfr)
                current_chunk_size += len(bfr)
                if current_chunk_size + read_buffer_size > size:
                    current_chunk += 1
                    current_chunk_size = 0
                    break

                
def split(file, destination):
    f = Path(file)
    fsize = Path(file).stat().st_size
    
    if (fsize % 2) == 0:
        fsize = fsize
    else:
        fsize = fsize + 1

    size = fsize/4
    if f.exists():
       with open(f, 'rb') as file_stream:
           _chunk_file(file_stream, f.suffix, destination, size)

def join(source_dir, output):
    p = Path(source_dir)
    if not p.exists():
        print('source folder not valid')
        return

    chunks = list(p.rglob('*.chk'))
    chunks.sort()
    extension = chunks[0].suffixes[0]

    with open(f'{output}{extension}', 'ab') as file:
        for chunk in chunks:   
            with open(chunk, 'rb') as piece:
                while True:
                    bfr = piece.read(read_buffer_size)
                    if not bfr:
                        break
                    file.write(bfr)



#size = 14000
#split("./qrcode.png","./chunks",1)
#join("./chunks","./join/hi")
#shutil.move('/Users/billy/d1/xfile.txt', '/Users/billy/d2/xfile.txt')

if __name__ == '__main__':
    split(*sys.argv[1:])
    #join(*sys.argv[1:])