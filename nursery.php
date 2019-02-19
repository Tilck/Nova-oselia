<?php
$title = "Дизайн детской фото | Нова оселя Винница";
$description = "Посмотрите готовые дизайны детской комнаты для девочки или мальчика в стиле лофт, скандинавском, современном. Мы будем очень рады, если вы подберете что-то для себя.";
$keywords = "дизайн детской, дизайн детской комнаты, дизайн маленькой комнаты фото, дизайн детской фото, дизайн детской для девочки, для мальчика, для двоих, 2017, украина, винница  ";
require ("header.php");
?>
    <div id="container" class="container stick">
        <h1>Дизайн детской комнаты</h1>
        <div id="links">
            <?php
            $directory = 'img/gallery/design/3nursery'; //путь к фоткам
            $allowed_types = array('jpg','jpeg','gif','png');
            $file_parts = array();
            $ext='';
            $title='';
            $i=0;
            $dir_handle = @opendir($directory) or die("There is an error with your image directory!");

            while ($file = readdir($dir_handle))
            {
                if($file=='.' || $file == '..' || is_dir($file)) continue;

                $file_parts = explode('.',$file);
                $ext = strtolower(array_pop($file_parts));
                $title = implode('.',$file_parts);
                $title = htmlspecialchars($title);
                $nomargin='';

                if(in_array($ext,$allowed_types))
                {
                    echo '
                        <div class="pic" style="background:url('.$directory.'/'.$file.') no-repeat 50% 50%;">
                        <a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank">'.$title.'</a>
                        </div>
                        ';
                    $i++;
                }
            }
            closedir($dir_handle);
            ?>
            <div class="clear">

            </div>
        </div>
        <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery  blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
    </div>
<?php require ("footer.php");?>