<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">

        <title>Natours | Exciting tours for adventurous people</title>
    </head>
    <body>
        <div class="paragraph">
<?php $content = file_get_contents('https://loripsum.net/api/10/large/headers/decorate/link');

echo $content; ?></div>
<footer class="footer">
          <div class="footer__logo-box">

              <picture class="footer__logo">
                  <!-- the 1x or 2x is a density descriptor so the browser uses the one that fits best according to screen resolution -->
                  <!-- and then the media is for the screen width it uses x image or y image so it can be totally different in content/size -->
                  <source srcset="img/logo-green-small-1x.png 1x, img/logo-green-small-2x.png 2x"
                          media="(max-width: 37.5em)">
                  <img srcset="img/logo-green-1x.png 1x, img/logo-green-2x.png 2x" alt="Full logo" src="img/logo-green-2x.png">
              </picture>

          </div>
          <div class="row">
              <div class="col-1-of-2">
                  <div class="footer__navigation">
                      <ul class="footer__list">
                          <li class="footer__item"><a href="#" class="footer__link">Company</a></li>
                          <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                          <li class="footer__item"><a href="#" class="footer__link">Carrers</a></li>
                          <li class="footer__item"><a href="#" class="footer__link">Privacy policy</a></li>
                          <li class="footer__item"><a href="#" class="footer__link">Terms</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-1-of-2">
                  <p class="footer__copyright">
                      All rights protected @<?php echo date('Y'); ?>.
                  </p>
              </div>
          </div>
      </footer>

    </body>
</html>
