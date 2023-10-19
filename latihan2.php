<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <form method="get" action="latihan3.php">
                <div class="form-group" >
                    <label for="Input1">Input Angka</label>
                    <input type="number" name="angka" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Angka">
                </div>
                <h4>Opsi</h4>
                    <label for="InputDropdown"></label>
                    <select class="form-control" name="pilihan" >
                        <option>Angka</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                <br>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>