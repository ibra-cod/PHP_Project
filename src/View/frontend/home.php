<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');
        section {
            padding: 100px 0;
        }
        
        .details-card {
            background: #ecf0f1;
        }
        
        .card-content {
            background: #ffffff;
            border: 4px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
        }
        
        .card-img {
            position: relative;
            overflow: hidden;
            border-radius: 0;
            z-index: 1;
        }
        
        .card-img img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .card-img span {
            position: absolute;
            top: 15%;
            left: 12%;
            background: #1ABC9C;
            padding: 6px;
            color: #fff;
            font-size: 12px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            transform: translate(-50%, -50%);
        }
        
        .card-img span h4 {
            font-size: 12px;
            margin: 0;
            padding: 10px 5px;
            line-height: 0;
        }
        
        .card-desc {
            padding: 1.25rem;
        }
        
        .card-desc h3 {
            color: #000000;
            font-weight: 600;
            font-size: 1.5em;
            line-height: 1.3em;
            margin-top: 0;
            margin-bottom: 5px;
            padding: 0;
        }
        
        .card-desc p {
            color: #747373;
            font-size: 14px;
            font-weight: 400;
            font-size: 1em;
            line-height: 1.5;
            margin: 0px;
            margin-bottom: 20px;
            padding: 0;
            font-family: 'Raleway', sans-serif;
        }
        
        .btn-card {
            background-color: #1ABC9C;
            color: #fff;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            padding: .84rem 2.14rem;
            font-size: .81rem;
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            -o-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            margin: 0;
            border: 0;
            -webkit-border-radius: .125rem;
            border-radius: .125rem;
            cursor: pointer;
            text-transform: uppercase;
            white-space: normal;
            word-wrap: break-word;
            color: #fff;
        }
        
        .btn-card:hover {
            background: orange;
        }
        
        a.btn-card {
            text-decoration: none;
            color: #fff;
        }
        
        h1 {
            font-size: 2rem;
            text-align: center;
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
        </div>
    </header>

    <h1>HOME PAGE</h1>

    <section class="details-card">
        <div class="container">
            <div class="row">
              <?php foreach ($posts as $post) : ?>
                <div class="col-md-4">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="img" alt="">
                            <span><h4>heading</h4></span>
                        </div>
                        <div class="card-desc">
                            <h3> id : <?php echo $post->getId(); ?></h3>
                            <p>Titre: <?php echo $post->getTitle();?> </p>
                            <p>Contenu du post: <?php echo $post->getContenu();?> </p>

                            <p>Auteur : <?php echo $post->getAuteur();?> </p>
                            <a href="../View/frontend/admin.php?id=<?php echo htmlentities($post->getId())?>" class="btn-card">VOIR PLUS</a>
                        </div>
                    </div>
                </div>
              <?php endforeach?>

            </div>
        </div>
    </section>
</body><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<h1>Home page</h1>



<pre>
<table class="table">
<thead>

<tr>
      <th scope="col">Id </th>
      <th scope="col">Titre</th>
      <th scope="col">contenue</th>
      <th scope="col">Date</th>
      <th scope="col">Auteur</th>
    </tr>
  </thead>

<?php foreach ($posts as $post) : ?>
  <tbody>
  <?php var_dump($post); ?>

    <tr>
      <th scope="row"><?= $post->getId(); ?></th>
      <td><?= $post->getTitle(); ?></td>
      <td><?= $post->getContenu(); ?></td>
      <td><?= $post->getDate(); ?></td>
      <td><?= $post->getAuteur(); ?></td>
    </tr>
  </tbody>
<?php endforeach; ?>
</table>

