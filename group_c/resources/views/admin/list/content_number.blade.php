<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Content Number</label>
    </div>
    <div class="add"> 
        <a href="./add_content_number" class="similar"> Add + </a>
        <a href="exportContent_number" class="similar">Export to Excel</a>
    </div>
    
    <table style="width: 100%">
        <tr>

            <th>ID</th>
            <th>Number</th>           
            <th>Title</th>
            <th>Option</th>
        </tr>
        <?php foreach ($contents_number as $content_number): ?>
        <tr>
            <td> <?php echo $content_number->content_number_id ?></td>
            <td> <?php echo $content_number->content_number_num ?></td>
            <td> <?php echo $content_number->content_number_title ?></td>
            <td>
                <a href="edit_content_number?content_number_id=<?php echo $content_number->content_number_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                <a href="delete_content_number?content_number_id=<?php echo $content_number->content_number_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                
            </td>
        </tr>  
        <?php endforeach ?> 
        
    </table>
    
    <ul class="pagination">
    <?php $i = 1; ?>
        @if($contents_number->currentPage() == 1)
            <li class="disabled"><a href="#">&laquo;</a></li>
        @else
            <?php $index = $contents_number->currentPage(); $index--; ?>
            <li><a href="list_content_number?page={{ $index }}">&laquo;</a></li>
        @endif
            @while($i <= $contents_number->lastPage())
            <?php  ?>
                @if($contents_number->currentPage() == $i)
                    <li class="disabled"><a href="list_content_number?page={{ $i }}">{{ $i }}</a></li>
                @else
                    <li><a href="list_content_number?page={{ $i }}">{{ $i }}</a></li>
                @endif
                <?php $i++; ?>
            @endwhile
        @if($contents_number->currentPage() == $contents_number->lastPage())
            <li class="disabled"><a href="#">&raquo;</a></li>
        @else
            <?php $index = $contents_number->currentPage(); $index++; ?>
            <li><a href="list_content_number?page={{ $index }}">&raquo;</a></li>
        @endif
    </ul>
</div>