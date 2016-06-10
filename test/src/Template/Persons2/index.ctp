<div>
    <h3>List Persons</h3>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>MAIL</th>
            <th>IMAGE<th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($persons2 as $person2): ?>
        <tr>
            <td><?= $person2->id ?></td>
            <td><?= h($person2->name) ?></td>
            <td><?= h($person2->age) ?></td>
            <td><?= h($person2->mail) ?></td>
            <td><?= $person2->image ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>
