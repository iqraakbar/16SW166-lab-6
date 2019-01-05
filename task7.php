<?php
$url = 'http://sw.muet.edu.pk/faculty/cvs/sample.pdf';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo 'Host : '.$url['host']."\n";
echo 'Path : '.$url['path']."\n";
?>