<div>
    <h3>Add Persons</h3>
    <?= $this->Form->create() ?>
    <fieldset>
    <?php
        echo $this->Form->input('name');
        echo $this->Form->input('age');
        echo $this->Form->input('mail');
        echo $this->Form->input('gazo',array('type'=>'file','multiple'));
    ?>
    </fieldset>
    <?= $this->Form->button('submit') ?>
    <?= $this->Form->end() ?>
</div>