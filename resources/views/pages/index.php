<?php if (isset($_SESSION['login'])) { ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Địa chỉ email</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($_SESSION['login'] == 'admin@gmail.com') { ?>
                <?php foreach ($data['list'] as $user) { ?>
                    <tr>
                        <th scope="row"><?= $user['id'] ?></th>
                        <td><?= $user['email'] ?></td>
                        <th scope="row"><?= $user['id'] == 1 ? 'Admin' : 'User' ?></th>
                        <th>
                            <i class="fa fa-camera-retro"></i>
                        </th>
                    </tr>
                <?php } ?>

            <?php } else { ?>
                <tr>
                    <th scope="row"><?= $data['user']['id'] ?></th>
                    <td><?= $data['user']['email'] ?></td>
                    <th scope="row"><?= $data['user']['id'] == 1 ? 'Admin' : 'User' ?></th>
                    <th>
                        <i class="fa fa-camera-retro"></i>
                    </th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>