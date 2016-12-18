<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Content Sentences</label>
    </div>
    
    <div class="add"> 
        <a href="./add_content_sentences" class="similar"> Add + </a>
        <a href="exportContent_sentences" class="similar">Export to Excel</a>
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
    
    <ul class="pagination">
    <?php $i = 1; ?>
        @if($contents_sentences->currentPage() == 1)
            <li class="disabled"><a href="#">&laquo;</a></li>
        @else
            <?php $index = $contents_sentences->currentPage(); $index--; ?>
            <li><a href="list_content_sentences?page={{ $index }}">&laquo;</a></li>
        @endif
            @while($i <= $contents_sentences->lastPage())
            <?php  ?>
                @if($contents_sentences->currentPage() == $i)
                    <li class="disabled"><a href="list_content_sentences?page={{ $i }}">{{ $i }}</a></li>
                @else
                    <li><a href="list_content_sentences?page={{ $i }}">{{ $i }}</a></li>
                @endif
                <?php $i++; ?>
            @endwhile
        @if($contents_sentences->currentPage() == $contents_sentences->lastPage())
            <li class="disabled"><a href="#">&raquo;</a></li>
        @else
            <?php $index = $contents_sentences->currentPage(); $index++; ?>
            <li><a href="list_content_sentences?page={{ $index }}">&raquo;</a></li>
        @endif
    </ul>
</div>