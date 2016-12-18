<div class="main">
    <div class="title">
        <img src="images/007-Squirtle-icon.png" alt=""/>
        <label>Edit List Product</label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>         
            <th>Date</th>
            <th>Option</th>
        </tr>

        <tr>
            <?php echo e(Form::open(['method' => 'POST', 'action' => 'Admin\editController@editData_footer_posts', 'files' => 'true'])); ?>

            <?php foreach($footer_posts as $list): ?> 
                <?php echo e(Form::text('footer_post_id', $list->footer_post_id, array('hidden'))); ?>

                <td><?php echo $list->footer_post_id ?></td>
                <td><?php echo e(Form::file('footer_post_img', array('class' => 'width_box'))); ?></td>
                <td><?php echo e(Form::text('footer_post_title', $list->footer_post_title, array('class' => 'width_box'))); ?></td>
                <td><?php echo e(Form::text('footer_post_date', $list->footer_post_date, array('class' => 'width_box'))); ?></td>
                
                <td><?php echo e(Form::submit('Update', array('class' => 'similar'))); ?>

                    <a href="./footer_posts" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>      
            <?php endforeach ?>      
            <?php echo e(Form::close()); ?>

        </tr>
    </table>
</div>

        