<div>
    <h3>List Peoples</h3>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>MAIL</th>
            <th>IMAGE</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($peoples as $people): ?>
        <tr>
            <td><?= $people->id ?></td>
            <td><?= h($people->name) ?></td>
            <td><?= h($people->age) ?></td>
            <td><?= h($people->mail) ?></td>
            <td><?= $people->image ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
</div>