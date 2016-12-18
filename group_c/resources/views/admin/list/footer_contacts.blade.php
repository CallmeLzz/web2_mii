<div class="main">
    <div class="title">
        <img src="images/025-Pikachu-icon.png" alt=""/>
        <label>List Footer Contacts</label>
    </div>
    
    <div class="add"> 
        <a href="./add_footer_contacts" class="similar"> Add + </a>
        <a href="exportFooter_contacts" class="similar">Export to Excel</a>
    </div>
    
    <table style="width: 100%">
        <tr>
            <th>ID</th>
            <th>Contact</th>
            <th>Option</th>
        </tr>
        <?php foreach ($footer_contact as $footer): ?>
        <tr>
            <td> <?php echo $footer->footer_contact_id ?></td>
            <td> <?php echo $footer->footer_contact_content ?></td>
            
            <td>
                <a href="edit_footer_contacts?footer_contact_id=<?php echo $footer->footer_contact_id ?>"><img src="images/Text-Edit-icon.png" alt=""/></a>
                <a href="delete_footer_contacts?footer_contact_id=<?php echo $footer->footer_contact_id ?>"><img src="images/blue-cross-icon.png" alt=""/></a>
                
            </td>
        </tr>  
        <?php endforeach ?> 
        
    </table>
    <ul class="pagination">
    <?php $i = 1; ?>
        @if($footer_contact->currentPage() == 1)
            <li class="disabled"><a href="#">&laquo;</a></li>
        @else
            <?php $index = $footer_contact->currentPage(); $index--; ?>
            <li><a href="footer_contacts?page={{ $index }}">&laquo;</a></li>
        @endif
            @while($i <= $footer_contact->lastPage())
            <?php  ?>
                @if($footer_contact->currentPage() == $i)
                    <li class="disabled"><a href="footer_contacts?page={{ $i }}">{{ $i }}</a></li>
                @else
                    <li><a href="footer_contacts?page={{ $i }}">{{ $i }}</a></li>
                @endif
                <?php $i++; ?>
            @endwhile
        @if($footer_contact->currentPage() == $footer_contact->lastPage())
            <li class="disabled"><a href="#">&raquo;</a></li>
        @else
            <?php $index = $footer_contact->currentPage(); $index++; ?>
            <li><a href="footer_contacts?page={{ $index }}">&raquo;</a></li>
        @endif
    </ul>
</div>
