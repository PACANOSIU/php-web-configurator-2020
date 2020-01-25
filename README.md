# projekt-php-01-2019
# PACANOSIU website configurator
Simple, functional website configurator distinguished by simplicity of configuration.
You only need to download one <a href="https://1drv.ms/u/s!ArLTcf_BgRqnggkRnSmosN1PPU1g?e=RL4xIN" target="_blank">"index.php"</a> file and open your own page in your browser.
The rest couldn't be easier.
Or you can create a file called "index.php" in your website directory and then copy the code below:
<?php
	highlight_file('<?php
	//Copyright PACANOSIU Development productions :D
	$_index="https://raw.githubusercontent.com/PACANOSIU/projekt-php-01-2019/master/index.php";
	$_new_index="index.php";
	if(copy($_index,$_new_index))
	{
		echo
		'<meta http-equiv="refresh" content="3;URL=/">
			<img style="position:absolute;width:98%;height:98%;" src="https://media1.giphy.com/media/WR4AzLxeRRbq3boOpX/source.gif">'
		;
	}
?>');
?>
