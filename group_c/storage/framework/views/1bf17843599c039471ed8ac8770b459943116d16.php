<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Content</label>
    </div>
    <table style="width: 100%">
        <tr>

            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Description</th>
            <th>Option</th>
        </tr>
        <?php foreach ($contents_new as $content_new): ?>
        <tr>
            <td> <?php echo $content_new->news_id ?></td>
            <td> <?php echo $content_new->news_title ?></td>
            <td> <img class="img_zoom" src="<?php echo $content_new->news_img ?>"></td>
            <td> <?php echo $content_new->news_decription ?></td>
            <td>
                <a href="edit_content_news?news_id=<?php echo $content_new->news_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                <a href="delete_content_news?news_id=<?php echo $content_new->news_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                
            </td>
        </tr>  
        <?php endforeach ?> 
        
    </table>
</div>