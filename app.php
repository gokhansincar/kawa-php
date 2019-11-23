<?php
// GRAB THE KEY FROM THE URL
$explode_url = explode('/', $_SERVER['REQUEST_URI']);  // an array 
$page = array_pop($explode_url); 

 $page = (isset($_GET["page"]) ? $_GET["page"] : "index");
 $lang = (isset($_GET["lang"]) ? $_GET["lang"] : "");
 $version = (isset($_GET["version"]) ? $_GET["version"] : null);

/* SITE DATA
-----------------------------------------------------------------------*/ 
function site_data() {

   $data_content = file_get_contents('data.json');  // debug($data_content);
   $data_arr = json_decode($data_content, true); // debug($data_arr);
   return $data_arr;
}

/* MENUS
-----------------------------------------------------------------------*/ 
function pages($page = '', $location = '', $lang='') {
    $lang = $lang == '' ? 'en' : $lang;
    $pages_arr = site_data() ;

    if($location === 'head') {
       $title = $pages_arr[$page][$lang]['title'];  // echo($title); 
       return $title;
    }
   

    // DISPLAY MENUS - LOOP INSIDE THE ARRAY
    foreach($pages_arr as $key => $item) {
    //   var_dump($key);

    $active = ($page === $key) ? ' active' : '';

    echo '<li class="menu-item'.$active.'"><a href="'.$key.'">'.$item['menu'].'</a></li>';

    }
}

// CUSTOM DEBUG FUNCTION
function debug($value) {
   echo '<pre>'; 
   print_r($value);
   echo '</pre>';
}