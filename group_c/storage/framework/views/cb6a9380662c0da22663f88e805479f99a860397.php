<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Content 2</label>
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
</div>