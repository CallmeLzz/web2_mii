<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Content Number</label>
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
</div>