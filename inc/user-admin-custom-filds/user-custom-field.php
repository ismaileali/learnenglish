

<?php

function extra_profile_fields( $user ) { ?>
   
   <h3><?php _e('Extra User Details'); ?></h3>
   <table class="form-table">

       <tr>
           <th><label for="twitter">Twitter</label></th>
           <td>
           <input type="url" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
           <span class="description">Enter your Twitter URL.</span>
           </td>
       </tr>
       <tr>
           <th><label for="facebook">Facebook</label></th>
           <td>
           <input type="url" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
           <span class="description">Enter your Facebook URL.</span>
           </td>
      </tr>
       <tr>
           <th><label for="instagram">Instagram</label></th>
           <td>
           <input type="url" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
           <span class="description">Enter your Twitter URL.</span>
           </td>
       </tr>
   </table>
<?php

}

// Then we hook the function to "show_user_profile" and "edit_user_profile"
add_action( 'show_user_profile', 'extra_profile_fields', 10 );
add_action( 'edit_user_profile', 'extra_profile_fields', 10 );



function save_extra_profile_fields( $user_id ) {

    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;

    /* Edit the following lines according to your set fields */
    update_usermeta( $user_id, 'phone', $_POST['phone'] );
    update_usermeta( $user_id, 'mobile', $_POST['mobile'] );
    update_usermeta( $user_id, 'skype', $_POST['skype'] );
    update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
    update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
    update_usermeta( $user_id, 'instagram', $_POST['instagram'] );
    update_usermeta( $user_id, 'linkedin', $_POST['linkedin'] );
}

add_action( 'personal_options_update', 'save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_profile_fields' ); 

 ?>