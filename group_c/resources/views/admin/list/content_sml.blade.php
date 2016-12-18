<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Content Sml</label>
    </div>
    <div class="add"> 
        <a href="./add_content_sml" class="similar"> Add + </a>
        <a href="exportContent_sml" class="similar">Export to Excel</a>
    </div>
    
    <table style="width: 100%">
        <tr>

            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Option</th>
        </tr>
        <?php foreach ($contents_sml as $content_sml): ?>
        <tr>
            <td> <?php echo $content_sml->content_sml_id ?></td>
            <td> <?php echo $content_sml->content_sml_title ?></td>
            <td> <img class="img_zoom" src="<?php echo $content_sml->content_sml_img ?>"></td>
            <td> <?php echo $content_sml->content_sml_description ?></td>
            <td>
                <a href="edit_content_sml?content_sml_id=<?php echo $content_sml->content_sml_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                <a href="delete_content_sml?content_sml_id=<?php echo $content_sml->content_sml_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                
            </td>
        </tr>  
        <?php endforeach ?> 
        
    </table>
    
    <ul class="pagination">
    <?php $i = 1; ?>
        @if($contents_sml->currentPage() == 1)
            <li class="disabled"><a href="#">&laquo;</a></li>
        @else
            <?php $index = $contents_sml->currentPage(); $index--; ?>
            <li><a href="list_content_sml?page={{ $index }}">&laquo;</a></li>
        @endif
            @while($i <= $contents_sml->lastPage())
            <?php  ?>
                @if($contents_sml->currentPage() == $i)
                    <li class="disabled"><a href="list_content_sml?page={{ $i }}">{{ $i }}</a></li>
                @else
                    <li><a href="list_content_sml?page={{ $i }}">{{ $i }}</a></li>
                @endif
                <?php $i++; ?>
            @endwhile
        @if($contents_sml->currentPage() == $contents_sml->lastPage())
            <li class="disabled"><a href="#">&raquo;</a></li>
        @else
            <?php $index = $contents_sml->currentPage(); $index++; ?>
            <li><a href="list_content_sml?page={{ $index }}">&raquo;</a></li>
        @endif
    </ul>
</div>