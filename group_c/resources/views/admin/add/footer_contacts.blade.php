
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
            {{ Form::open(['method' => 'POST', 'action' => 'Admin\addController@addData_footer_contacts', 'files' => 'true']) }}
                <td>{{ Form::select('footer_contact_icon',
                            ['fa fa-phone' => 'Phone',
                            'fa fa-file-o' => 'Fax',
                            'fa fa-envelope-o' => 'Email',
                            'fa fa-map-marker' => 'Adress',
                            'fa fa-facebook-officia' => 'Facebook',
                            'fa fa-skype' => 'Skye',
                            'fa fa-twitter-square' => 'Twitter',
                            'fa fa-youtube-square' => 'Youtube',
                            'fa fa-tumblr-square' => 'Tumblr',
                            'fa fa-wordpress' => 'Wordpress']) }}</td>
                <td>{{ Form::text('footer_contact_content', null, array('class' => 'width_box')) }}</td>
                <td>{{ Form::submit('Add', array('class' => 'similar')) }}
                    <a href="./footer_contacts" class="btn btn-danger pull left" style="margin-right:3px;">Cancel</a>
                </td>            
            {{ Form::close() }}
        </tr>
    </table>
</div>