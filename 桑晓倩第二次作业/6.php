
<?php
		if(array_key_exists('news',$_POST))
		{
			$new=$_POST['news'];
			$new=iconv('UTF-8','GBK',$new);
			if(is_readable("news/".$new.".txt"))
			{
				$myfile = fopen("news/".$new.".txt", "r");
				$size=filesize("news/".$new.".txt");
				$doc=fread($myfile,$size);
				$doc=iconv('GBK','UTF-8',$doc);
				echo $doc;
				fclose($myfile);
			}
			else
				echo '无法理解，请重新输入';
		}
		else
		{
			echo '欢迎进入新闻阅读系统';
		}
?>
