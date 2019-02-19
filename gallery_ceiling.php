<?php
$title = "Фото натяжные потолки | Нова оселя Винница";
$description = "Подберите дизайн натяжных потолков для зала, спальни, кухни, детской, ванной. Предлагаем каталог фото натяжных потолков: глянцевых, матовых, двухуровневых, сатиновых, светодиодных, тканевых.";
$keywords = "натяжные потолки фото, видео, дизайн натяжных потолков, фото, каталог натяжных потолков, натяжные потолки цвета фото, натяжные потолки фото для зала, для спальни, в комнату, в гостиной, с подсветкой, в квартире, с фотопечатью, в детскую, черный, белый, светильники, точечными";
require ("header.php");
?>
<div id="container" class="container stick">
    <h1>Фото натяжных потолков</h1>
    <div id="links">
        <?php
        $directory = 'img/gallery/ceiling'; //путь к фоткам
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
                        <div class="pic" style="background:url() no-repeat 50% 50%;">
                        <a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank" style="opacity: 1">
                        <img class="img-responsive" src="'.$directory.'/'.$file.'" alt="'.$title.'" style="height: 100%; width: 100%">
                        </a>
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





<!---->
<!--//                        <div class="pic" style="background:url('.$directory.'/'.$file.') no-repeat 50% 50%;">-->
<!--    //                        <a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank">'.$title.'</a>-->
<!--    //                        </div>-->
