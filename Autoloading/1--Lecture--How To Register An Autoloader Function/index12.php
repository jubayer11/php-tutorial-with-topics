<?php
  function loader($class)
    {
        $filename = $class. '.php';
        $file ='classes/' . $filename;
		echo $file;
        if (!file_exists($file))
        {
            return false;
        }
        include $file;
    }
	$prod = new Product();
?>