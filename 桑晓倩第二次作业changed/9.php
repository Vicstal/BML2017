<?php

            	$i = "习总书记视察、国家核心布局：这个领域，爆发了";
	            $i=iconv('UTF-8','GBK',$i);
	           $myfile = fopen("news/".$i.".txt", "r");
				$size=filesize("news/".$i.".txt");
				$doc=fread($myfile,$size);
				$doc=iconv('GBK','UTF-8',$doc);
				echo $doc;
				fclose($myfile);

?>
