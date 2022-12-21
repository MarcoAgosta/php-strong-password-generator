<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong-password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="CSS/style.css" rel="stylesheet">
</head>
<body>
    <div class="bg-blue">
        <div class="container">
            <div class="text-center pt-5">
                <h1 class="gray mb-4">Strong Password Generator</h1>
                <h2 class="white">Genera una password sicura</h2>
            </div>
            <div class="card w-75 p-4 m-auto">
                <form action="">
                    <div class="row">
                        <div class="col-6">
                            <label for="lunghezza" class="mt-1">Lunghezza password:</label>
                        </div>
                        <div class="col-6">
                            <input id="lunghezza" type="text" class=" form-control w-50">
                        </div>
                        <div class="col-12 mt-4">
                            <button class="btn btn-primary">Invia</button>
                            <button class="btn btn-secondary">Annulla</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
