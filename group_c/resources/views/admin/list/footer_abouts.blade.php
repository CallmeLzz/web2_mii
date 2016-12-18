
<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Footer Abouts</label>
    </div>
    
    <div class="add"> 
        <a href="./add_footer_abouts" class="similar"> Add + </a>
        <a href="exportFooter_abouts" class="similar">Export to Excel</a>
    </div>
    
    <table style="width: 100%">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Option</th>
        </tr>
        <?php foreach ($footer_abouts as $footer): ?>
        <tr>
            <td> <?php echo $footer->footer_about_id ?></td>
            <td> <?php echo $footer->footer_about_title ?></td>
            <td> <?php echo $footer->footer_about_description ?></td>
            <td>
                <a href="edit_footer_abouts?footer_about_id=<?php echo $footer->footer_about_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                <a href="delete_footer_abouts?footer_about_id=<?php echo $footer->footer_about_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                
            </td>
        </tr>  
        <?php endforeach ?> 
        
    </table>
    <ul class="pagination">
    <?php $i = 1; ?>
        @if($footer_abouts->currentPage() == 1)
            <li class="disabled"><a href="#">&laquo;</a></li>
        @else
            <?php $index = $footer_abouts->currentPage(); $index--; ?>
            <li><a href="footer_abouts?page={{ $index }}">&laquo;</a></li>
        @endif
            @while($i <= $footer_abouts->lastPage())
            <?php  ?>
                @if($footer_abouts->currentPage() == $i)
                    <li class="disabled"><a href="footer_abouts?page={{ $i }}">{{ $i }}</a></li>
                @else
                    <li><a href="footer_abouts?page={{ $i }}">{{ $i }}</a></li>
                @endif
                <?php $i++; ?>
            @endwhile
        @if($footer_abouts->currentPage() == $footer_abouts->lastPage())
            <li class="disabled"><a href="#">&raquo;</a></li>
        @else
            <?php $index = $footer_abouts->currentPage(); $index++; ?>
            <li><a href="footer_abouts?page={{ $index }}">&raquo;</a></li>
        @endif
    </ul>
</div>
