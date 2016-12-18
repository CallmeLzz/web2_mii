
<div class="main">
    <div class="title">
        <img src="images/052-Meowth-icon.png" alt=""/>
        <label>Add Footer Contacts</label>
    </div>
    <table style="width: 100%">
        <tr>
            <th>Icon</th>
            <th>Contact</th>
            <th>Option</th>
        </tr>
   
        <tr>
            <form method="POST" action="addData_footer_contacts" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
             <td>
                <select name="footer_contact_icon">
                    <option value="fa fa-phone">Phone</option>
                    <option value="fa fa-file-o">Fax</option>
                    <option value="fa fa-envelope-o">Email</option>
                    <option value="fa fa-map-marker">Adress</option>
                    <option value="fa fa-facebook-officia">Facebook</option>
                    <option value="fa fa-skype">Skye</option>
                    <option value="fa fa-twitter-square">Twitter</option> 
                    <option value="fa fa-youtube-square">Youtube</option>
                    <option value="fa fa-tumblr-square">Tumblr</option>
                    <option value="fa fa-wordpress">Wordpress</option>
                </select>
             </td>
             <td><input class="width_box" type="text" name="footer_contact_content"></td>
             <td> 
                 <input class="similar" type="submit" value="Add">  
                 <a href="./admin" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
             </td>
         </form>
        </tr
        
        <tr>
            <?php echo e(Form::open(['method' => 'POST', 'action' => 'Admin\addController@addData_footer_contacts', 'files' => 'true'])); ?>

                <td><?php echo e(Form::select('footer_contact_icon',
                            ['fa fa-phone' => 'Phone',
                            'fa fa-file-o' => 'Fax',
                            'fa fa-envelope-o' => 'Email',
                            'fa fa-map-marker' => 'Adress',
                            'fa fa-facebook-officia' => 'Facebook',
                            'fa fa-skype' => 'Skye',
                            'fa fa-twitter-square' => 'Twitter',
                            'fa fa-youtube-square' => 'Youtube',
                            'fa fa-tumblr-square' => 'Tumblr',
                            'fa fa-wordpress' => 'Wordpress'])); ?></td>
                <td><?php echo e(Form::text('footer_contact_content', null, array('class' => 'width_box'))); ?></td>
                <td><?php echo e(Form::submit('Add', array('class' => 'similar'))); ?>

                    <a href="./footer_contacts" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>            
            <?php echo e(Form::close()); ?>

        </tr>
    </table>
</div>