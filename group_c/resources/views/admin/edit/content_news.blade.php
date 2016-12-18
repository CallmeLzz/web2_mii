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
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\editController@editData_content_news', 'files' => 'true']) }}
            <?php foreach($contents_new as $content_new): ?> 
                {{ Form::text('news_id', $content_new->news_id, array('hidden')) }}
                <td><?php echo $content_new->news_id ?></td>
                <td>{{ Form::text('news_title', $content_new->news_title, array('class' => 'width_box')) }}</td>
                <td>{{ Form::file('news_img', array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('news_decription', $content_new->news_decription, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Update', array('class' => 'similar')) }}
                    <a href="./list_content_news" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>      
            <?php endforeach ?>      
            {{ Form::close() }}
        </tr>
    </table>
</div>

        