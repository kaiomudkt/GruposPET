<?php
    /**
 * Register meta boxes.
 */
/*
TODO TO DO
*/
function registrar_meta_boxes() {
    add_meta_box( 'metadados_post', 'parâmetro(s)', 'post_display_callback', 'post' );
}
add_action( 'add_meta_boxes', 'registrar_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function post_display_callback( $post ) {
    $screen = get_current_screen();
    ?>
    <!-- criando novo POST com o PET do usuario atual-->
    <?php if( $screen->action == 'add'): ?>
        <input id="pet_responsavel" readonly=“true”
        type="text"
        name="pet_responsavel"
        value="<?php 
            echo esc_attr( get_user_meta( get_current_user_id(),  'pet_responsavel', true) );
        ?>">
    <?php else: ?>
        <!-- exibindo post com o PET do usuario que criou-->
        <input id="pet_responsavel" readonly=“true”
        type="text"
        name="pet_responsavel"
        value="<?php 
            echo esc_attr( get_post_meta( get_the_ID(), 'pet_responsavel', true ) ); 
        ?>">
    <?php endif; ?>

    <?php
}


/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function salva_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields_pet = ['pet_responsavel'];
    /*
    'foreach percorre o vetor 'fields_pet'
    sendo que cada item do vetor é um parametro/field */
    foreach ( $fields_pet as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {/*existe esse elemento no na estrutura de dados (array) ? */
            /* salva no post deste '$post_id',
            chave: valor */
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }else{
            // echo 'não exite esse parameto' . $field;
        }
        /*
        no user logado, tem um campo que diz qual a URL para a postagem do C.P.T. PET,
        e agora, pegamos essa URL, e adicionamos na postagem ,
        assim, a postagem sabe o link para o seu pet.
        */ 
        $url_pet = get_user_meta(get_current_user_id(),  'url_pet', true);
        update_post_meta($post_id, 'url_pet', $url_pet);
    }
}
add_action( 'save_post', 'salva_meta_box' );