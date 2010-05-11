<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="<?php echo $sf_request->getRelativeUrlRoot() ?>/images/favico.png" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <!--
    <link type="application/rss+xml" title="Musique Approximative" rel="alternate" href="<?php echo url_for('@post_feed') ?>"/>
    -->
    <link type="application/rss+xml" title="Musique Approximative" rel="alternate" href="http://feeds.feedburner.com/musique-approximative"/>
  </head>
  <body>

    <?php echo $sf_content ?>

    <div id="maintitle">Musique Approximative</div>

    <div id="about">
      <p>Ceci est un <em>micropodcast</em>. Vous y trouverez un flux de morceaux glanés au fil du web. </p>
      <p>
        <strong>Contributeurs : </strong>
        <?php include_component('post', 'contributors') ?>
      </p>
      <p>
        Consommer la musique autrement :
        <a href="http://feeds.feedburner.com/musique-approximative">Podcast</a> / 
        <a href="http://www.facebook.com/pages/Musique-Approximative/179136112996">Facebook</a> / 
        <a href="http://twitter.com/approximazik"">Twitter</a> /
        <a href="#email-subscription" class="email-subscription-link">Email</a>
        <div id="email-subscription">
          <form style="border:1px solid #ccc;padding:3px;text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=musique-approximative', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
            <p>Veuillez saisir votre adresse email :</p>
            <p><input type="text" style="width:140px" name="email"/></p>
            <input type="hidden" value="musique-approximative" name="uri"/>
            <input type="hidden" name="loc" value="fr_FR"/>
            <p>Il est bien entendu qu'on ne s'en servira pas pour autre chose que de vous envoyer de la musique.</p>
            <input type="submit" value="Recevoir les nouveaux morceaux par email" /></p>
          </form>
        </div>
      </p>
      <p>
        Ce projet a été développé par <a href="https://launchpad.net/~constructions-incongrues">Constructions Incongrues</a> 
        et est hébergé par <a href="http://www.pastis-hosting.net">Pastis Hosting</a>.
      </p>
      <p>
        Le code source du projet est <a href="https://launchpad.net/musique-approximative">distribué</a> sous licence 
        <a href="http://www.gnu.org/licenses/agpl-3.0.html">GNU AGPLv3</a>.
      </p>
      <p>Contact : bertier at musiqueapproximative point net</p>
    </div>
    <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
    try {
      var pageTracker = _gat._getTracker("UA-4958604-1");
      pageTracker._trackPageview();
    } catch(err) {}</script>
  </body>
</html>
