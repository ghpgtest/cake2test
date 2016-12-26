<style>
._display_none { display: none; }
</style>
<h1>Blog posts</h1>

<?php echo $this->Html->link(
    'Add User',
    array('controller' => 'users', 'action' => 'add')
);
?>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Profile</th>
        <th></th>
    </tr>

    <!-- ここから、$posts配列をループして情報を表示 -->

    <?php foreach ($data as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['user_name'],
						array('controller' => 'users', 'action' => 'view', $user['User']['id'], 888)); ?>
        </td>
        <td><?php echo $user['Profile']['profile_body']; ?></td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $user['User']['id'])
                );
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>

<?php echo $this->Paginator->prev(' << ', [], '', ['class' => '_display_none']); ?>
<?php echo $this->Paginator->numbers(array('first' => 'First page')); ?>
<?php echo $this->Paginator->next(' >> ', [], '', ['class' => '_display_none']); ?>