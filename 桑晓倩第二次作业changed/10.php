<?php

            	$i = "李克强主持会议";
	            $i=iconv('UTF-8','GBK',$i);
	           $myfile = fopen("news/".$i.".txt", "r");
				$size=filesize("news/".$i.".txt");
				$doc=fread($myfile,$size);
				$doc=iconv('GBK','UTF-8',$doc);
				echo $doc;
				fclose($myfile);

?>
