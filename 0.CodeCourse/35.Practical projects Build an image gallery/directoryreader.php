<?php

     function directoryReader ($directory, array $excludeFiles  = ['.', '..', '.DS_Store']){
        //$images = [];
 	     $files = [];

        if(!is_dir($directory)){
        	 return null;
        }

        //return true;

        if(!($filesDirectory = opendir($directory))){
        	return null;
        }

        while (($file = readdir($filesDirectory)) !== false) {

  if (in_array($file, $excludeFiles)) {
  		continue;
        	}

        	//var_dump($file);

        	$files[] = $directory . '/' . $file;

        }

        closedir($filesDirectory);

        return $files;

        // loop through the files
        // do some checks
        //add to $images
        // return $images
     }

?>