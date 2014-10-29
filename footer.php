<footer class="clearfix">
    <div class="footer-container">
      <div class="left-column">

      <?php wp_nav_menu(array(
      	'container' => 'div',
      	'container_class' => 'footer-nav clearfix',
      	'theme_location' => 'secondary'
      )); ?>
       
<!--         <div class="footer-nav clearfix">
          <ul>
            <li><a href="about.html">About</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="work.html">Work</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div> -->
        <p>Howie, Sacks &amp; Henry LLP provides legal services to cities in the Greater Toronto Area (GTA) including Oakville, Burlington, Mississauga, Brampton, Vaughan, Woodbridge, Richmond Hill, Aurora, Newmarket, Markham, Pickering, Ajax, Whitby, Oshawa, and other parts of Halton, Peel, York and Durham regions. We also serve clients throughout Ontario including in Barrie, Bracebridge, George Town, Guelph, Kingston, Kitchener, Niagara, North Bay, Ottawa, Peterborough, St. Catharines, Sudbury, and Waterloo.</p>
      </div>
      <div class="right-column">
        <img src="assets/images/badge.png" alt="">
        <img src="assets/images/badge.png" alt="">
      </div>
    </div>
 </footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>