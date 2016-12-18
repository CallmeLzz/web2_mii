

<div class="main">
    <div class="title">
        <img src="images/007-Squirtle-icon.png" alt=""/>
        <label>Edit List Product</label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>         
            <th>Price New</th>
            <th>Price Old</th>
            <th>Option</th>
        </tr>

        <tr>
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\editController@editData_list_product', 'files' => 'true']) }}
            <?php foreach($list_product as $list): ?> 
                {{ Form::text('product_id', $list->product_id, array('hidden')) }}
                <td><?php echo $list->product_id ?></td>
                <td>{{ Form::file('product_img', array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('product_title', $list->product_title, array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('product_amount', $list->product_amount, array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('product_amount_del', $list->product_amount_del, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Update', array('class' => 'similar')) }}
                    <a href="./list_product" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>      
            <?php endforeach ?>      
            {{ Form::close() }}
        </tr>
    </table>
</div>

        