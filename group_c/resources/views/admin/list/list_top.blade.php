<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Top Product</label>
    </div>
    
    <div class="add"> 
        <a href="./add_list_top" class="similar"> Add + </a>
        <a href="exportList_top" class="similar">Export to Excel</a>
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
        <?php foreach ($list_product as $list): ?>
        <tr>
            <td> <?php echo $list->top_product_id ?></td>
            <td> <img class="img_zoom" src="<?php echo $list->top_product_img ?>"></td>
            <td> <?php echo $list->top_product_title ?></td>
            <td> <?php echo $list->top_product_amount ?></td>
            <td> <?php echo $list->top_product_amount_del ?></td>
            <td>
                <a href="edit_list_top?top_product_id=<?php echo $list->top_product_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                <a href="delete_list_top?top_product_id=<?php echo $list->top_product_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                
            </td>
        </tr>  
        <?php endforeach ?> 
        
    </table>
    
    <ul class="pagination">
    <?php $i = 1; ?>
        @if($list_product->currentPage() == 1)
            <li class="disabled"><a href="#">&laquo;</a></li>
        @else
            <?php $index = $list_product->currentPage(); $index--; ?>
            <li><a href="list_top?page={{ $index }}">&laquo;</a></li>
        @endif
            @while($i <= $list_product->lastPage())
            <?php  ?>
                @if($list_product->currentPage() == $i)
                    <li class="disabled"><a href="list_top?page={{ $i }}">{{ $i }}</a></li>
                @else
                    <li><a href="list_top?page={{ $i }}">{{ $i }}</a></li>
                @endif
                <?php $i++; ?>
            @endwhile
        @if($list_product->currentPage() == $list_product->lastPage())
            <li class="disabled"><a href="#">&raquo;</a></li>
        @else
            <?php $index = $list_product->currentPage(); $index++; ?>
            <li><a href="list_top?page={{ $index }}">&raquo;</a></li>
        @endif
    </ul>
</div>