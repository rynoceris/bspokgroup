<?php
	//Create variables telling the PHP class how to parse the XML file and tell it where the XML file is
    $xml_file = $_SERVER['DOCUMENT_ROOT'] . "/featured-designs.xml";
    $xml_picture_key = "*DESIGNS*FEATURED*PICTURE";
    /*$xml_name_key = "*DESIGNS*FEATURED*NAME";
	$xml_size_key = "*DESIGNS*FEATURED*SIZE";*/
    $xml_link_key = "*DESIGNS*FEATURED*LINK";

	$featured_array = array();
    $counter = 0;
	

    function startTag($parser, $data){
        global $current_tag;
        $current_tag .= "*$data";
    }

    function endTag($parser, $data){
        global $current_tag;
        $tag_key = strrpos($current_tag, '*');
        $current_tag = substr($current_tag, 0, $tag_key);
    }

    function contents($parser, $data){
		//Add each of your variables here, as well as a new case for each block from the XML file
        global $current_tag, $xml_picture_key, /*$xml_name_key, $xml_size_key,*/ $xml_link_key, $counter, $featured_array;
        switch($current_tag){
            case $xml_picture_key:
                $featured_array[$counter]->picture = $data;
                break;
            /*case $xml_name_key:
                $featured_array[$counter]->name = $data;
                break;
			case $xml_size_key:
                $featured_array[$counter]->size = $data;
                break;*/
            case $xml_link_key:
                $featured_array[$counter]->link = $data;
                $counter++;
                break;
        }
    }


    $xml_parser = xml_parser_create();
    xml_set_element_handler($xml_parser, "startTag", "endTag");
    xml_set_character_data_handler($xml_parser, "contents");
	
    $fp = fopen($xml_file, "r") or die("Could not open file - " . $xml_file);
    $data = fread($fp, filesize($xml_file)) or die("Could not read file");

    if(!(xml_parse($xml_parser, $data, feof($fp)))){
        die("Error on line " . xml_get_current_line_number($xml_parser));
    }

    xml_parser_free($xml_parser);
    fclose($fp);
	
	
    for($y=0;$y<=2;$y++){
		$featured_array = array_values($featured_array);
		$arrayamt = (count($featured_array)-1);
		$x = rand(0,$arrayamt);
		
		echo "<a class='photo' href='./img/" . $featured_array[$x]->link . "'>";
		echo "<img src='./img/" . $featured_array[$x]->picture . "' /></a>";
		//echo "<span class='caption'><a href='" . $featured_array[$x]->link . "'>" . $featured_array[$x]->name . "<br />" . $featured_array[$x]->size . "</a></span></div>";

		unset($featured_array[$x]);
	}
?>