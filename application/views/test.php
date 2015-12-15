<?php
$len = strlen($pdfx);
header("Content-type: application/pdf");
header("Content-Length:" . $len);
header("Content-Disposition: inline; filename=Resume.pdf");
print $pdfx;


?>