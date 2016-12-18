<div class="main">
    <div class="title">
        <img src="images/007-Squirtle-icon.png" alt=""/>
        <label>Edit </label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Option</th>
        </tr>

        <tr>
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\editController@editData_content_sml', 'files' => 'true']) }}
            <?php foreach($contents_sml as $sml): ?> 
                {{ Form::text('content_sml_id', $sml->content_sml_id, array('hidden')) }}
                <td><?php echo $sml->content_sml_id ?></td>
                <td>{{ Form::text('content_sml_title', $sml->content_sml_title, array('class' => 'width_box')) }}</td>
                <td>{{ Form::file('content_sml_img', array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('content_sml_description', $sml->content_sml_description, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Update', array('class' => 'similar')) }}
                    <a href="./list_content_sml" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>      
            <?php endforeach ?>      
            {{ Form::close() }}
        </tr>
    </table>
</div>

        