<?php

ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 

    $context = $_GET['context'];
    $feed_domain = $_GET['feed_domain'];
    $photoset_id = $_GET['photoset_id'];
    $flickr_api_key = $_GET['flickr_api_key'];
    $flickr_user_id = $_GET['flickr_user_id'];
    $gmail = $_GET['gmail'];

 
    $feeds["news"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=8&format=raw';
    $feeds["sports"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=9&format=raw';
    $feeds["music"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=10&format=raw';
    $feeds["admissions"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=12&format=raw';
    $feeds["policies"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=13&format=raw';
    $feeds["extracurricular"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=14&format=raw';
    $feeds["juniorandsenior"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=16&format=raw';
    $feeds["firstandsecond"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=17&format=raw';
    $feeds["thirdandfourth"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=18&format=raw';
    $feeds["fifthandsixth"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=19&format=raw';
    
    
    $feeds['events'] = 'https://www.google.com/calendar/feeds/'.$gmail.'/public/full?orderby=starttime&sortorder=ascending&max-results=10&futureevents=true';

    $feeds['albums']= 'http://api.flickr.com/services/rest/?method=flickr.photosets.getList&api_key='.$flickr_api_key.'&user_id='.$flickr_user_id;
    $feeds['photos'] = 'http://api.flickr.com/services/rest/?&method=flickr.photosets.getPhotos&api_key='.$flickr_api_key.'&user_id='.$flickr_user_id.'&extras=url_sq,url_t,url_s,url_m,url_o&photoset_id='.$photoset_id;
 
    
    if(!$context) $context = "home";
    
    $xml = file_get_contents($feed_domain.$feeds[$context]);    
    
    echo $xml;
    
    
    

