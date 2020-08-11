<h1><?=$params['post']->title ?></h1>
<div>
    <?php foreach($params['post']->getTags() as $tag): ?>
        <span class="badge badge-success"><a href="/myapp2/tags/<?= $tag->id ?>" class="text-white"><?= $tag->name?></a></span>
    <?php endforeach ?>
</div>
<p><?= $params['post']->content ?></p>
<a href="/myapp2/posts" class="btn btn-secondary">Retourner en arrière</a>
