
<div class="main">
    <div class="title">
        <img src="images/052-Meowth-icon.png" alt=""/>
        <label>Add Footer Abouts</label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Option</th>
        </tr>            
        <tr>
            <?php echo e(Form::open(['method' => 'POST', 'action' => 'Admin\addController@addData_footer_abouts', 'files' => 'true'])); ?>

                <td><?php echo e(Form::text('footer_about_title', null, array('class' => 'width_box'))); ?></td>
                <td><?php echo e(Form::text('footer_about_description', null, array('class' => 'width_box'))); ?></td>
                <td><?php echo e(Form::submit('Add', array('class' => 'similar'))); ?>

                    <a href="./footer_abouts" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>            
            <?php echo e(Form::close()); ?>

        </tr>
    </table>
</div>
