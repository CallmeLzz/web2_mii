<div class="main">
    <div class="title">
        <img src="images/052-Meowth-icon.png" alt=""/>
        <label>Add</label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>Number</th>
            <th>Title</th>
            <th>Option</th>
        </tr>
        
        <tr>
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\addController@addData_content_number', 'files' => 'true']) }}
                <td>{{ Form::text('content_number_num', null, array('autofocus', 'class' => 'width_box')) }}</td>
                <td>{{ Form::text('content_number_title', null, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Add', array('class' => 'similar')) }}
                    <a href="./list_content_number" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>            
            {{ Form::close() }}
        </tr>
    </table>
</div>