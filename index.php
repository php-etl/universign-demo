<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Universign demo</title>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="public/index.css" rel="stylesheet">
</head>
<body class="container">
<form class="form-signin" method="post" action="src/form.php">
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Universign demo</h1>
<!--        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a-->
<!--                href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a>-->
<!--        </p>-->
    </div>

    <div class="form-label-group">
        <input type="text" id="inputFirstname" name="firstname" class="form-control" placeholder="Firstname" required autofocus>
        <label for="inputFirstname">Firstname</label>
    </div>

    <div class="form-label-group">
        <input type="text" id="inputLastname" name="lastname" class="form-control" placeholder="Lastname" required autofocus>
        <label for="inputLastname">Lastname</label>
    </div>

    <div class="form-label-group">
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <input type="tel" id="inputPhone" name="phone" class="form-control" placeholder="Phone" required autofocus>
        <label for="inputPhone">Phone</label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
<script src="public/index.css"></script>
</html>
