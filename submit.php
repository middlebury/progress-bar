<?php
header('Cache-Control: private; no-cache; must-revalidate');
header('Content-Type: text/plain');
header('Content-Length: 100');
while (ob_get_level()) {
  ob_end_flush();
}
flush();
// The content-length above and the number of characters printed should be the same.
for ($i=0; $i<100; $i++) {
  print "*";
  flush();
  usleep(rand(0,300000));
}
