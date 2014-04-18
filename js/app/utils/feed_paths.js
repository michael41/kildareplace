define(function (require) {

    "use strict";

 
    var Feeds = {};

   
    Feeds.getFeed = function(date_str) {
    
         var feeds = {};
         
 
            feeds["news"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=8&format=raw';    
            feeds["sports"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=9&format=raw'; 
            feeds["music"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=10&format=raw';
            feeds["admissions"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=12&format=raw';
            feeds["policies"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=13&format=raw';
            feeds["extracurricular"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=14&format=raw';
            feeds["juniorandsenior"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=16&format=raw';
            feeds["firstandsecond"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=17&format=raw';
            feeds["thirdandfourth"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=18&format=raw';
            feeds["fifthandsixth"]  = '/index.php?option=com_ninjarsssyndicator&feed_id=19&format=raw';
            
           
            return feeds[Backbone.history.fragment];

    };
   
    return Feeds;

    
});