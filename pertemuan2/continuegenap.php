<?php

for ($counter = 1; $counter <= 500; $counter++) {
  if ($counter % 2 != 0) {
    continue;
  }
  echo "Counter : $counter" . PHP_EOL;
}
