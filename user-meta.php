<?php
/**
 * https://wpshout.com/how-to-create-and-use-wordpress-user-metadata-user-meta/
 * https://wordpress.stackexchange.com/questions/
 */

add_action('init', function() {
  /**
   * Add new fields above 'Update' button.
   *
   * @param WP_User $user User object.
   */
  function additional_profile_fields( $user ) {
    //$estado = UFdoSiteAtual;
    $response = wp_remote_get( "http://172.16.28.2/wp-json/api/pet?estado=" . sanitize_text_field(get_option('nome_estado')) );
    try {
      // Note that we decode the body's response since it's the actual JSON feed
      $pets = json_decode( $response['body'] );
    } catch ( Exception $ex ) {
        $pets = null;
    }
    ?>

    <table class="form-table">
        <tr>
            <th><label for="pet_responsavel">PET a ser gerenciado</label></th>
            <td>
            <?php
              $screen = get_current_screen();
              if ($screen->base == "profile") {
            ?>  
                <select id="pet_responsavel" name="pet_responsavel" disabled="true">
             <?php 
            }else{
            ?>  
            <?php $array_metadados = array(); ?>
                <select id="pet_responsavel" name="pet_responsavel" >
             <?php 
            }
                        //se o usuario ja tiver esse campo preenchido
                        $pet_responsavel_user_atual = get_user_meta( get_current_user_id(),  'pet_responsavel', true);
                        if( $screen->base == "profile"){
                            printf( '<option value=" %1$s "> %1$s </option>', $pet_responsavel_user_atual,  $pet_responsavel_user_atual );
                        }else{
                            if ($pets) {
                              foreach ( $pets as $pet ) {
                                echo '<option value="'.$pet->post_title.'">'.$pet->post_title.'</option>';
                                array_push($array_metadados, '<input type="hidden" name="'.$pet->post_title.'" value="'.$pet->guid.'">');
                              }
                              
                            }
                        }
                    ?>
                </select>
                <?php 
                if (isset($array_metadados)) {
                  foreach ($array_metadados as $metadado) {
                    echo $metadado;
                  }
                }
                ?>
            </td>
        </tr>
    </table>

<?php
  }
  function save_extra_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ){
      return false;
    }
    $pet_selecionado = sanitize_text_field($_POST['pet_responsavel']);
    $pet_selecionado_index = preg_replace('/\s+/', '_', $pet_selecionado);//como o 'post_title' tem com caracter de espaço, substituo por '_'.
    $url_pet = sanitize_text_field($_POST[$pet_selecionado_index]);
    update_user_meta($user_id, 'url_pet', $url_pet);
    update_user_meta($user_id, 'pet_responsavel', $pet_selecionado);
  }
  add_action('user_register', 'save_extra_profile_fields', 10, 1 );
  add_action('user_new_form', 'additional_profile_fields');
  add_action('edit_user_profile', 'additional_profile_fields');
  add_action('show_user_profile', 'additional_profile_fields');
  add_action('personal_options_update', 'save_extra_profile_fields' );
  add_action('edit_user_profile_update', 'save_extra_profile_fields' );
});