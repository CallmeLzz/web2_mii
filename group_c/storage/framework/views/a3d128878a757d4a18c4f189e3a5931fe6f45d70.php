
<div class="main">
    <div class="title">
        <img src="images/007-Squirtle-icon.png" alt=""/>
        <label>Edit Footer Contact</label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>ID</th>
            <th>Contact</th>
            <th>Option</th>
        </tr>

        <tr>
            <?php echo e(Form::open(['method' => 'POST', 'action' => 'Admin\editController@editData_footer_contacts', 'files' => 'true'])); ?>

            <?php foreach($footer_contact as $footer): ?> 
                <?php echo e(Form::text('footer_contact_id', $footer->footer_contact_id, array('hidden'))); ?>

                <td><?php echo $footer->footer_contact_id ?></td>
                <td><?php echo e(Form::text('footer_contact_content', $footer->footer_contact_content, array('class' => 'width_box'))); ?></td>
                <td><?php echo e(Form::submit('Update', array('class' => 'similar'))); ?>

                    <a href="./footer_contacts" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>      
            <?php endforeach ?>      
            <?php echo e(Form::close()); ?>

        </tr>
    </table>
</div>

        