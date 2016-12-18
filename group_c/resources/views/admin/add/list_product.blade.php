
<div class="main">
    <div class="title">
        <img src="images/052-Meowth-icon.png" alt=""/>
        <label>Add List Product</label>
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
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\addController@addData_list_product', 'files' => 'true']) }}
                <td>{{ Form::file('product_img', array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('product_title', null, array('autofocus', 'class' => 'width_box')) }}</td>
                <td>{{ Form::text('product_amount_del', null, array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('product_amount', null, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Add', array('class' => 'similar')) }}
                    <a href="./list_product" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>            
            {{ Form::close() }}
        </tr>
    </table>
</div>