<div>
    <h3>List Persons</h3>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>MAIL</th>
            <th>GAZO</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($persons as $person): ?>
        <tr>
            <td><?= $person->id ?></td>
            <td><?= h($person->name) ?></td>
            <td><?= h($person->age) ?></td>
            <td><?= h($person->mail) ?></td>
            <td><?= $person->gazo ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>