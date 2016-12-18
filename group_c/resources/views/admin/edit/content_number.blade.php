<div class="main">
    <div class="title">
        <img src="images/007-Squirtle-icon.png" alt=""/>
        <label>Edit </label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>ID</th>
            <th>Number</th>
            <th>Title</th>
            <th>Option</th>
        </tr>
        
        <tr>
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\editController@editData_content_number', 'files' => 'true']) }}
            <?php foreach($contents_number as $content_number): ?> 
                {{ Form::text('content_number_id', $content_number->content_number_id, array('hidden')) }}
                <td><?php echo $content_number->content_number_id ?></td>
                <td>{{ Form::text('content_number_num', $content_number->content_number_num, array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('content_number_title', $content_number->content_number_title, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Update', array('class' => 'similar')) }}
                    <a href="./list_content_number" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>      
            <?php endforeach ?>      
            {{ Form::close() }}
        </tr>
    </table>
</div>

        