<x-layout>
<?php
    $friendslist = [];

foreach ($friends as $friend) {
    if ( $friend->sender_player != 1) {
        $friendslist[] = $friend->sender_player;
    } elseif ( $friend->reciever_player != 1 ) {
        $friendslist[] = $friend->reciever_player;
    }
}

print_r($friendslist[0]);
?>


</x-layout>