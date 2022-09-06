<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome To Microconn</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- MyFonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap"
      rel="stylesheet"
    /> -->
</head>

<body>
    <!-- In This Below Is Navbar Section Until The End Of Navbar Section -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container mt-3">
            <img src="<?= BASE_URL; ?>/assets/icon/Union.svg" alt="Microconn" width="142px" height="40px" class="ms-3" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link me-5" aria-current="page" href="<?= BASE_URL; ?>">Home</a>
                    <a class="nav-link me-5" href="<?= BASE_URL; ?>/service">Services</a>
                    <a class="nav-link me-5" href="<?= BASE_URL; ?>/workpage">Work</a>
                    <a class="nav-link" href="<?= BASE_URL; ?>/about">About Us</a>
                </div>
            </div>
        </div>
    </nav>

    <div id="alert-email"></div>
    <!-- The End Of Navbar Section -->