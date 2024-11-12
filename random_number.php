<h3>Random Number</h3>

<?php
echo rand(1, 100);
?>

<h3>Random Encrypted Hash Code</h3>

<?php
echo sha1(md5(md5(uniqid('12345', true))));
?>