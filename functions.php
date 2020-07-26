<?php
// carrega os arquivos css do tema pai
function carrega_estilos(){
    //nome da folha de estilo = estilo-pai
    //fica nesse endereco =  get_template_directory_uri() . '/style.css'
    wp_enqueue_style('estilos-pai', get_template_directory_uri() . '/style.css');
}
//acao que vai chamar a funcao
//momendo em que essa funcao vai ser executada = wp_enqueue_scripts
//funcao que vai ser executada = carrega_estilos
add_action('wp_enqueue_scripts' , 'carrega_estilos');


/**
 * criar arquivo que add metadado no USER, para saber de qual PET esse USER vai gerenciar
 * https://developer.wordpress.org/reference/functions/add_user_meta/
 * add_user_meta( int $user_id, string $meta_key, mixed $meta_value, bool $unique = false )
 */
require_once(get_stylesheet_directory() . "/user-meta.php");


/*
O arquivo 'meta_boxes_post.php' vai cuidar dos metadados,
do POST padrao do tipo PET
*/
require_once(get_stylesheet_directory() . "/meta_boxes_post.php");


//Registra um tamanho de imagem para a miniatura da postagem.
set_post_thumbnail_size(1280, 720, true);

//registrar wp_add_dashboard_widget do nome do estado(UF) que pertence, local->"work area"
require_once(get_stylesheet_directory() . "/nome-estado-dashboard-widget.php");