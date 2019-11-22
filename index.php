<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desafio VHSYS 2</title>
    <link rel="stylesheet" href="includes/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container mb-4 mt-4 pb-4">
        <div class="row">
            <div class="col-12">
                <h1>VHSYS Desafio 2</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div id="form-content" class="col-md-6">

                <form id="form-section" class="pb-5 pt-4">
                    <div class="form-group">
                        <label for="InputEmail">Correo electrónico</label>
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp" placeholder="Escriba su correo electrónico" required>
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <button id="submit" name="submit" type="submit" class="btn btn-primary mt-2">Create File</button>
                </form>

                <div id="ans"></div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="includes/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="functions.js"></script>
</body>
</html>