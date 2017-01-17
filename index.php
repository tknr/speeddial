<?php
$json_file = 'speeddial.json';
if (! file_exists($json_file)) {
    touch($json_file);
}
// FIXME