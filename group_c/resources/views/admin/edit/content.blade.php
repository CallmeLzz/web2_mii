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
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\editController@editData', 'files' => 'true']) }}
            <?php foreach($contents as $content): ?>
                {{ Form::text('content_id', $content->content_id, array('hidden')) }}
                <td><?php echo $content->content_id ?></td>
                <td>{{ Form::text('content_title', $content->content_title, array('class' => 'width_box')) }}</td>
                <td>{{ Form::file('content_img', array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('content_description', $content->content_description, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Update', array('class' => 'similar')) }}
                    <a href="./list_content" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>      
            <?php endforeach ?>      
            {{ Form::close() }}
        </tr>
    </table>
</div>

        