<?php
<ul>
    $dir = "songs/";
    $files = scandir( $dir );
    foreach ( $files as $file )
        if ( $file != '.' && $file != '..' )
            echo '<li mp3="app/vd/', '/','" ogg="app/vd/', '/', '" artist="', '" title="" ></li>';
    ?>
</ul>

?>