</div>
  <?php wp_footer(); ?>
<script>
var kkeys = [], konami = "38,38,40,40,37,39,37,39";
$(document).keypress(function (e) {
    kkeys.push( e.keyCode );
    if(kkeys.toString().indexOf(konami) >= 0)
	window.location = "./wp-admin";
});
</script>
</body>
<!-- THEME MADE BY MATTHEW FRANCIS-LANDAU(MATTHEWFL.COM) FOR THE NERD HERD -->
</html>
