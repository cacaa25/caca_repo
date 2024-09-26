<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Get dan post</title>
</head>
<body>
<h1>mengirim data dengan method GET</h1>
<a href="link1.php?nama=andri">link 1</a>

<hr>
<h1> mengirim data dengan method POST</h1>
<form action="link2.php"method="post">
    <div clash="mb-3">
        <lebel for="kelas" class="form-label">kelas<br></label>
        <select nama="kelas" id="kelas" class="form-control">
            <option value="XI RIL 1">XI RPL 1</option>
            <option value="XI RPL 2">XI RPL 2</option>
            <option value="X RPL 1">X RPL 1</option>
            <option value="X RPL 2">X RPL 2</option>
</select>
</div>
<br>
<div class="mb-3">
<label for="jk" class="form-label">jenis kelamin<br></label>
<select name="jk" id="jk"class="form-control">
    <option value="perempuan">perempuan</option">
    <option value="laki-laki">laki-laki</option">
</select>
</div>
<br>
<button type="submit">Kirim</button>
</form>
</body>
</html>