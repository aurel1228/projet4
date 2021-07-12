<?php
        foreach ($articles as $article):
         ?>



								<h4 class="title"><a href="post&id=<?= $article->id() ?>"><b><?= $article->title() ?></b></a></h4> 

        <?php endforeach ?>











