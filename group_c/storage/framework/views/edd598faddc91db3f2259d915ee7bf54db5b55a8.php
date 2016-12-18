<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Content 2</label>
    </div>
    <table style="width: 100%">
        <tr>

            <th>ID</th>
            <th>Description</th>
            <th>Author</th>
            <th>Image</th>
            <th>Option</th>
        </tr>
        <?php foreach ($contents_sentences as $content_sentences): ?>
        <tr>
            <td> <?php echo $content_sentences->sentence_id ?></td>
            <td> <?php echo $content_sentences->sentence_description ?></td>
            <td> <?php echo $content_sentences->sentence_author ?></td>
            <td> <img class="img_zoom" src="<?php echo $content_sentences->sentence_image ?>"></td>
            
            <td>
                <a href="edit_content_sentences?sentence_id=<?php echo $content_sentences->sentence_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                <a href="delete_content_sentences?sentence_id=<?php echo $content_sentences->sentence_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                
            </td>
        </tr>  
        <?php endforeach ?> 
        
    </table>
</div>