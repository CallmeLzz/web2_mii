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
        <?php if($contents->currentPage() == 1): ?>
            <li class="disabled"><a href="#">&laquo;</a></li>
        <?php else: ?>
            <?php $index = $contents->currentPage(); $index--; ?>
            <li><a href="list_content?page=<?php echo e($index); ?>">&laquo;</a></li>
        <?php endif; ?>
            <?php while($i <= $contents->lastPage()): ?>
            <?php  ?>
                <?php if($contents->currentPage() == $i): ?>
                    <li class="disabled"><a href="list_content?page=<?php echo e($i); ?>"><?php echo e($i); ?></a></li>
                <?php else: ?>
                    <li><a href="list_content?page=<?php echo e($i); ?>"><?php echo e($i); ?></a></li>
                <?php endif; ?>
                <?php $i++; ?>
            <?php endwhile; ?>
        <?php if($contents->currentPage() == $contents->lastPage()): ?>
            <li class="disabled"><a href="#">&raquo;</a></li>
        <?php else: ?>
            <?php $index = $contents->currentPage(); $index++; ?>
            <li><a href="list_content?page=<?php echo e($index); ?>">&raquo;</a></li>
        <?php endif; ?>
    </ul>
</div>