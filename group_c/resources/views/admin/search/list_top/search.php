<div class="main">
    <div class="title">
        <img src="images/035-Clefairy-icon.png" alt=""/>
        <label>Search</label>
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
        
        <?php if(isset($resultSearchs)): ?>
            <?php if(is_string($resultSearchs)):?>
                <label><font color="red" style="font-size: 20px;"><?php echo $resultSearchs; ?></font></label>
            <?php else: ?>
                <?php foreach ($resultSearchs as $resultSearch): ?>
                <tr>
                    <td> <?php echo $resultSearch->top_product_id ?></td>
                    <td> <img src="<?php echo $resultSearch->top_product_img ?>"</td>
                    <td> <?php echo $resultSearch->top_product_title ?></td>
                    <td> <?php echo $resultSearch->top_product_amount ?></td>
                    <td> <?php echo $resultSearch->top_product_amount_del ?></td>
                    <td>
                        <a href="edit_list_top?top_product_id=<?php echo $resultSearch->top_product_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                        <a href="delete_list_top?top_product_id=<?php echo $resultSearch->top_product_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                    </td>
                </tr>
                <?php endforeach ?>
            <?php endif ?>
        <?php endif ?>
        
        

    </table>
</div>