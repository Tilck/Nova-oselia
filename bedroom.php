<?php
$title = "Дизайн спальни фото | Нова оселя Винница";
$description = "Не знаете какой дизайн спальни подобрать? Посмотрите готовые дизайнерские решения в стиле лофт, скандинавском, современном, классическом. Найдите свой дизайн спальни!";
$keywords = "дизайн спальни, спальня интерьер, интерьер спальни, дизайн интерьера спальни, спальня дизайн фото, современный дизайн спальни, идеи дизайна спальни фото, дизайн маленькой спальни, дизайн спальни новинки фото, дизайн гостиной спальни, кв м, 2017, украина, винница  ";
require ("header.php");
?>
    <div id="container" class="container stick">
        <h1>Дизайн спальни</h1>
        <div id="links">
            <?php
            $directory = 'img/gallery/design/1bedroom'; //путь к фоткам
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