<?php 
//ウィジェット
register_sidebar();

//受信したコメント
function mydesign($comment,$args,$depth){
	$GLOBALS['comment'] = $comment; ?>

<li class="compost">
<?php comment_text(); ?>
<!--投稿日時-->
<p class="cominfo">
<?php comment_date(); ?><?php comment_time(); ?>
|
<!--著者-->
<?php comment_author_link(); ?>
</p>
<?php
}

?>