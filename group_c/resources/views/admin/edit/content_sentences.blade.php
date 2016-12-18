<div class="main">
    <div class="title">
        <img src="images/007-Squirtle-icon.png" alt=""/>
        <label>Edit </label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Author</th>
            <th>Image</th>
            <th>Option</th>
        </tr>
        <tr>

        <tr>
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\editController@editData_content_sentences', 'files' => 'true']) }}
            <?php foreach($contents_sentences as $content_sentences): ?>
                {{ Form::text('sentence_id', $content_sentences->sentence_id, array('hidden')) }}
                <td><?php echo $content_sentences->sentence_id ?></td>
                <td>{{ Form::text('sentence_description', $content_sentences->sentence_description, array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('sentence_author', $content_sentences->sentence_author, array('class' => 'width_box')) }}</td>
                <td>{{ Form::file('sentence_image', array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Update', array('class' => 'similar')) }}
                    <a href="./list_content_sentences" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>      
            <?php endforeach ?>      
            {{ Form::close() }}
        </tr>
    </table>
</div>

        