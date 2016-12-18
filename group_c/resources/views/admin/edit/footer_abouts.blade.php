
<div class="main">
    <div class="title">
        <img src="images/007-Squirtle-icon.png" alt=""/>
        <label>Edit Footer Abouts</label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Option</th>
        </tr>

        <tr>
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\editController@editData_footer_abouts', 'files' => 'true']) }}
            <?php foreach($footer_abouts as $footer): ?> 
                {{ Form::text('footer_about_id', $footer->footer_about_id, array('hidden')) }}
                <td><?php echo $footer->footer_about_id ?></td>
                <td>{{ Form::text('footer_about_title', $footer->footer_about_title, array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('footer_about_description', $footer->footer_about_description, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Update', array('class' => 'similar')) }}
                    <a href="./footer_abouts" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>      
            <?php endforeach ?>      
            {{ Form::close() }}
        </tr>
    </table>
</div>

        