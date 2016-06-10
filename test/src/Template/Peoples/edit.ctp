<div>
    <h3>Edit People</h3>
    <?= $this->Form->create($people) ?>
    <fieldset>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('name');
            echo $this->Form->input('age');
            echo $this->Form->input('mail');
            echo $this->Form->input('image',array('type'=>"file",'multiple'));
        ?>
    </fieldset>
    <?= $this->Form->button ?>
    <?= $this->Form->end() ?>
</div>