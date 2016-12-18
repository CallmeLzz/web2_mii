

<div class="main">
    <div class="title">
        <img src="images/007-Squirtle-icon.png" alt=""/>
        <label>Edit List Top</label>
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
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\editController@editData_list_top', 'files' => 'true']) }}
            <?php foreach($list_top as $list): ?> 
                {{ Form::text('top_product_id', $list->top_product_id, array('hidden')) }}
                <td><?php echo $list->top_product_id ?></td>
                <td>{{ Form::file('top_product_img', array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('top_product_title', $list->top_product_title, array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('top_product_amount', $list->top_product_amount, array('class' => 'width_box')) }}</td>
                <td>{{ Form::text('top_product_amount_del', $list->top_product_amount_del, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Update', array('class' => 'similar')) }}
                    <a href="./list_top" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>      
            <?php endforeach ?>      
            {{ Form::close() }}
        </tr>
    </table>
</div>

        