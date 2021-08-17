<?php 

function timeAgo($time_ago){
    $cur_time = time();
    $time_elapsed = $cur_time - $time_ago;
    $seconds = $time_ago;
    $minutes = round($time_elapsed / 60);
    $hours = round($time_elapsed / 3600);
    $days = round($time_elapsed / 86400);
    $weeks = round($time_elapsed / 604800);
    $months = round($time_elapsed / 2600640);
    $years = round($time_elapsed / 31207680);

    if($seconds <=60 ){
         echo "$seconds seconds ago";
    
    }else if( $minutes  <=60){
        if ($minutes ==1){
            echo "one minute ago";
        }else {
            echo "$minutes minutes ago";
        }
    

    }else if( $hours <=24){
        if ($hours ==1){
            echo "one hour ago";
        }else {
            echo "$hours hours ago";
        }
    


    }else if($days <=7){
        if ($days ==1){
            echo "one day ago";
        }else {
            echo "$days days ago";
        }
    

    }else if($weeks <=4.3){
        if ($weeks ==1){
            echo "one week ago";
        }else {
            echo "$weeks weeks ago";
        }
    


    }else if ($months <=12){
        if ($months ==1){
            echo "one month ago";
        }else {
            echo "$months months ago";
        }
    

    } else{
        if ($years ==1){
            echo "one year ago";
        }else {
            echo "$years years ago";
        }
    
}
}


?>