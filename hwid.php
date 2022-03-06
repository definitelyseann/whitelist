<?php
$HWID = getallheaders()['Syn-Fingerprint', 'fingerprint', 'sentinel-fingerprint', 'proto-user-identifier', 'shadow_hardware', 'krnl-hwid', 'exploit-guid'];
echo $HWID;
?>
