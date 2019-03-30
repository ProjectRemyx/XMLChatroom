<?php
$xml = simplexml_load_file('chatrooms.xml');

foreach($xml->chatroom as $item)
{  
    echo '<h1>' . $item['id'] . ". " . $item->chatroomName . '</h1>';
    echo '<h2>' . $item->chatroomDescription . '</h2>';
    echo '<form action="chatroom.php" method="post">';
    echo '<input type="hidden" name="id" value="'.$item['id'].'"/>';
    echo '<input type="submit" name="submit" value="Enter">';
    echo '</form>';
    
}

?>