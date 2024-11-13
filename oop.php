<?php 

    $data = [
        [
            "name" => "GTR R35",
            "power" => "1500hp",
            "image" => "https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/UMbaRrWRcEfPGQQndyYYxXqChfPztRE9t7g1M4Mp.png",
            "price" => 100000,
        ],
        [
            "name" => "Labigini",
            "power" => "1000hp",
            "image" => "https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/1NfsN0Vyg1Hzk23oF3d84ggIuUpXxWB1yysGxL18.png",
            "price" => 500000,
        ],
        [
            "name" => "Tesla",
            "power" => "1000hp",
            "image" => "https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/C6cXZoetMQwcBRh63TCWKWTblr2efccSTRyR4zLl.png",
            "price" => 100000,
        ],
        [
            "name" => "Raptor",
            "power" => "700hp",
            "image" => "https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/C5PNkrBlMqX6DtMfISdtyyFXaVWfUi1v0DhSnrJ8.png",
            "price" => 70000,
        ],
        [
            "name" => "Raptor",
            "power" => "700hp",
            "image" => "https://s3.ap-southeast-1.amazonaws.com/uploads-store/uploads/all/C5PNkrBlMqX6DtMfISdtyyFXaVWfUi1v0DhSnrJ8.png",
            "price" => 70000,
        ]
    ];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="cotainer">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </div>


    <div class="container d-flex flex-wrap gap-4 ">

        <?php 

            foreach($data as $car) {
                echo '
                <div class="card" style="width: 18rem;">
                    <img src="'.$car['image'].'" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">'.$car['name'].'</h5>
                        <p class="card-text badge bg-danger">'.$car['price'].'$</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>';
            }
         ?>


 
    </div>



    
</body>
</html>

    
    


    