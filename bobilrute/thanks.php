<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hurtigruta Carglass</title>

    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

 <!-- nav bar -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a href="#" class="navbar-brand"><img class="logo-img" src="logoImg.png" alt=""></a>
  </nav>

<div class="container mt-5 text-center">
<h1>Takk <?php echo $_GET['avdeling'];?></h1>
    <p>Melding har blitt sendt til lager</p>
    <hr>
    <form action="https://bobilrute.no">
    <button type="submit">Ta meg tilbake</button>
    </form>
</div>
    

</body>
</html>