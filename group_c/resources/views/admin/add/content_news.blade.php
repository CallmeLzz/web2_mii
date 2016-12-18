<div class="main">
    <div class="title">
        <img src="images/052-Meowth-icon.png" alt=""/>
        <label>Add</label>
    </div>
    <table style="width: 100%">
        <tr>

            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Option</th>
        </tr>

        <tr>
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\addController@addData_content_news', 'files' => 'true']) }}
                <td>{{ Form::text('news_title', null, array('autofocus', 'class' => 'width_box')) }}</td>
                <td>{{ Form::file('news_img', array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('news_decription', null, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Add', array('class' => 'similar')) }}
                    <a href="./list_content_news" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>            
            {{ Form::close() }}
        </tr>
    </table>
</div>