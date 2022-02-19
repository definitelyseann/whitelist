<?php
$HWID = getallheaders(){'fingerprint', 'syn-user-identifier', 'sentinel-fingerprint', 'proto-user-identifier', 'shadow_hardware', 'krnl-hwid', 'exploit-guid'};
echo $HWID;
?>
