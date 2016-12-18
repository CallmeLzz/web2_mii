<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Content 1</label>
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
</div>