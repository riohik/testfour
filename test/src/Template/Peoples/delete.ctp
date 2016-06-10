<div>
    <h3>Delete People</h3>
    <?= $this->Form->create($people) ?>
    <fieldset>
        <p>ID: <?= h($people->id); ?></p>
        <p>NAME: <?= h($people->name); ?></p>
        <p>AGE: <?= h($people->age); ?></p>
        <p>MAIL: <?= h($people->mail); ?></p>
        <p>IMAGE: <?= $people->image ?></p>
    </fieldset>
        <?= $this->Form->button('Submit') ?>
        <?= $this->Form->end() ?>
</div>