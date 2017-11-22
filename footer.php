<div class="container">
<nav id="footer">
<div class="pull-left fnav"></div>
<div class="text-center">
  <ul class="footer-list">
    <li><a href="mailto:contact@popularplaybook.com">Contact Us</a></li>
    <li><a href="http://localhost:8888/terms-of-service/">Terms Of Use</a></li>
  </ul>
<div class="pull-right fnav"></div>
</div>
</div>
</nav>
<?php wp_footer(); ?>

<script async src="https://static.addtoany.com/menu/page.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>

<!--Twitter Share Button Script-->
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>



<!--Pinterest Share Button -->
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
</body>
</html>