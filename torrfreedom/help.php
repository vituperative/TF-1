<?php
require_once "include/bittorrent.inc.php";

dbconn(0);
stdhead();

require_once "include/siteinfo.inc.php";

?>
<div id="help">

<h3>How do I download a torrent?</h3>
<p>Choose the torrent you like and right click on the magnet or torrent icon and select copy link location, then paste the link into your I2P-capable BitTorrent client and then start the torrent.</p>

<h3>How do I upload a torrent?</h3>
<ol id=howtoupload>
<li>Create a torrent file in your favorite I2P-capable BitTorrent client, optionally adding the tracker announce address indicated above. Note: if <?=$tracker_title?>'s tracker isn't already present in the torrent, it will automatically added, so you can upload ANY torrent file.</li>
<li><a href="signup.php">Sign up</a> for upload torrent. No e-mails. No phones. Just username and password. All passwords are encrypted.</li>
<li><a href="upload.php">Upload</a> your torrent file!</li>
<li>Start seeding your torrent and others will see it!</li>
</ol>

<h3>Can I be notified of new torrents?</h3>
<p>Yes! Use the <a href="rss.php">RSS Feed</a> feature to track new uploads.</p>
</div>
<?php stdfoot(); ?>
</body>
</html>
