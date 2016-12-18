<div class="main">
    <div class="title">
        <img src="images/052-Meowth-icon.png" alt=""/>
        <label>Add</label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>Description</th>
            <th>Author</th>
            <th>Image</th>
            <th>Option</th>
        </tr>
        <tr>
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\addController@addData_content_sentences', 'files' => 'true']) }}
                <td>{{ Form::text('sentence_description', null, array('autofocus', 'class' => 'width_box')) }}</td>
                <td>{{ Form::text('sentence_author', null, array('class' => 'width_box')) }}</td>
                <td>{{ Form::file('sentence_image', array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Add', array('class' => 'similar')) }}
                    <a href="./list_content_sentences" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>            
            {{ Form::close() }}
        </tr>
    </table>
</div>