
<div class="main">
    <div class="title">
        <img src="images/052-Meowth-icon.png" alt=""/>
        <label>Add List Top</label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Price Old</th>
            <th>Price New</th>
            <th>Option</th>
        </tr>
   
        <tr>
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\addController@addData_list_top', 'files' => 'true']) }}
                <td>{{ Form::file('top_product_img', array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('top_product_title', null, array('autofocus', 'class' => 'width_box')) }}</td>
                <td>{{ Form::text('top_product_amount_del', null, array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('top_product_amount', null, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Add', array('class' => 'similar')) }}
                    <a href="./list_top" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>            
            {{ Form::close() }}
        </tr>
    </table>
</div>