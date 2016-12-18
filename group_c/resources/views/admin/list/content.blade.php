<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Content</label>
    </div>
    <div class="add"> 
        <a href="./add" class="similar"> Add + </a>
        <a href="exportContent" class="similar">Export to Excel</a>
    </div>
    
    <table style="width: 100%">
        <tr>

            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Option</th>
        </tr>
        <?php foreach ($contents as $content): ?>
        <tr>
            <td> <?php echo $content->content_id ?></td>
            <td> <?php echo $content->content_title ?></td>
            <td> <img class="img_zoom" src="<?php echo $content->content_img ?>"></td>
            <td> <?php echo $content->content_description ?></td>
            <td>
                <a href="editView?content_id=<?php echo $content->content_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                <a href="delete?content_id=<?php echo $content->content_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                
            </td>
        </tr>  
        <?php endforeach ?> 
        
    </table>
    
    <ul class="pagination">
    <?php $i = 1; ?>
        @if($contents->currentPage() == 1)
            <li class="disabled"><a href="#">&laquo;</a></li>
        @else
            <?php $index = $contents->currentPage(); $index--; ?>
            <li><a href="list_content?page={{ $index }}">&laquo;</a></li>
        @endif
            @while($i <= $contents->lastPage())
            <?php  ?>
                @if($contents->currentPage() == $i)
                    <li class="disabled"><a href="list_content?page={{ $i }}">{{ $i }}</a></li>
                @else
                    <li><a href="list_content?page={{ $i }}">{{ $i }}</a></li>
                @endif
                <?php $i++; ?>
            @endwhile
        @if($contents->currentPage() == $contents->lastPage())
            <li class="disabled"><a href="#">&raquo;</a></li>
        @else
            <?php $index = $contents->currentPage(); $index++; ?>
            <li><a href="list_content?page={{ $index }}">&raquo;</a></li>
        @endif
    </ul>
</div>