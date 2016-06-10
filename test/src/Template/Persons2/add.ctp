<div>
    <h3>Add Person</h3>
    <?= $this->Form->create() ?>
    <fieldset>
    <?php
        echo $this->Form->input('name');
        echo $this->Form->input('age');
        echo $this->Form->input('mail');
        echo $this->Form->input('image',array('type'=>'file','multiple'));
    ?>
    </fieldset>
    <?= $this->Form->button('Submit') ?>
    <?= $this->Form->end() ?>
</div>