<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinamic Input</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="box">
        <h1>Dynamic field</h1>
        <form action="process.php" method="post" >
            <div id="form">
                <div class="input-box">
                    <input type="text" name="name[]" placeholder="Put your name" minlength="2">
                    <a class="btn-add" id="add" title="Add">+</a>
                </div>
               
            </div>
            <button type="submit" class="btn">Enviar</button>            
        </form>

    </div>
</body>
<script src="assets/js/js.js"></script>

</html>