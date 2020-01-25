# projekt-php-01-2019
# PACANOSIU website configurator
Simple, functional website configurator distinguished by simplicity of configuration.
You only need to download one <a href="https://1drv.ms/u/s!ArLTcf_BgRqnggkRnSmosN1PPU1g?e=RL4xIN">"index.php"</a> file or you can create a file called "index.php" and then copy the code below:
```
<?php
	//Copyright PACANOSIU Development productions :D
	$_index="https://raw.githubusercontent.com/PACANOSIU/php-web-configurator-2020/master/index.php";
	$_new_index="index.php";
	if(copy($_index,$_new_index))
	{
		echo
		'<meta http-equiv="refresh" content="3;URL=/">
			<img style="position:absolute;width:98%;height:98%;" src="https://media1.giphy.com/media/WR4AzLxeRRbq3boOpX/source.gif">'
		;
	}
?>
```
then paste into the "index.php" file you just created.
Put the "index.php" file in your site's server folder and open your browser.
# Enjoy the ease of creating a website
