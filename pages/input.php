<div id="content" class="p-4 p-md-5 pt-5">
    <div id="label-page"><h3><b>Arsip Surat >> Unggah</b></h3></div>
    <p style="color: black">Unggah surat yang telah terbit pada form ini untuk diarsipkan.<br>
        Catatan: <br> - Gunakan file berformat PDF
    </p>

    <div id="content" style="margin-top: 50px; color: black">
        <form action="proses/input-proses.php" method="post" enctype="multipart/form-data">
            <table id="table-input">
                <tr>
                    <td class="label-formulir">No Surat</td>
                    <td class="isian-formulir" style="height: 50px"><input type="text" name="no_surat" class="isian-formulir isian-formulir-border"></td>
                </tr>
                <tr>
                    <td class="label-formulir">Kategori</td>
                    <td><select class="form-select" aria-label="Default select example" name="kategori" style="height: 50px">
                    <option selected>Pilih salah satu</option>
                    <option value="Undangan">Undangan</option>
                    <option value="Pengumuman">Pengumamn</option>
                    <option value="Nota Dinas">Nota Dinas</option>
                    <option value="Pemberitahuan">Pemberitahuan</option>
                    </select></td>
                </tr>
                <tr>
                    <td class="label-formulir">Judul</td>
                    <td class="isian-formulir" style="height: 50px; width: 50%"><input type="text" name="judul" class="isian-formulir isian-formulir-border" style="width: 150%"></td>
                </tr>
                <tr>
                    <td class="label-formulir">File Surat (PDF)</td>
                    <td class="isian-formulir" style="height: 50px"><input type="file" name="file_surat" class="isian-formulir isian-formulir-border"></td>
                </tr>
                <tr>
                    <td class="label-formulir" style="height: 80px"><button type="button" class="tombol"><a href="index.php?p=arsip" style="color:black">Kembali</a></td>
                    <td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

