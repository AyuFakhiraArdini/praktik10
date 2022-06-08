<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PESAN ALUMNI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF1493;
        }
        body {
            padding-top: 7%;
            padding-left: 28%;
            background: #FF1493;
        }
    </style>
</head>

<body>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    FORM PESAN ALUMNI
                </div>
                <div class="card-body">
                    <form method="post" action="simpanpesan.php">

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" id="Nama" class="form-control class=" warning">
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" id="email" class="form-control class=" warning">
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" id="address" class="form-control class=" warning">
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="tahunlulus" class="col-sm-2 col-form-label">Tahun Lulus</label>
                            <div class="col-sm-10">
                                <input type="text" name="tahunlulus" id="tahunlulus" class="form-control class=" warning">
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                            <div class="col-sm-10">
                                <input type="pekerjaan" name="pekerjaan" id="pekerjaan" class="form-control class=" warning">
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="message" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                                <input type="text" name="message" id="message" class="form-control class=" warning">
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>