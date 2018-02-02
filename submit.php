<?php
header('Cache-Control: private; no-cache; must-revalidate');
header('Content-Type: text/plain');
header('Content-Length: 100');
while (ob_get_level()) {
  ob_end_flush();
}
flush();
for ($i=0; $i<100; $i++) {
  print "*";
  flush();
  usleep(100000);
}
