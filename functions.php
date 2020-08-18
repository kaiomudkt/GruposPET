<?php
// carrega os arquivos css do tema pai
function carrega_estilos(){
    //nome da folha de estilo = estilo-pai
    //fica nesse endereco =  get_template_directory_uri() . '/style.css'
    wp_enqueue_style('estilos-pai', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('estilo_filho_1', get_stylesheet_directory_uri() . '/style.css');
}
//acao que vai chamar a funcao
//momendo em que essa funcao vai ser executada = wp_enqueue_scripts
//funcao que vai ser executada = carrega_estilos
add_action('wp_enqueue_scripts' , 'carrega_estilos');

$template_diretorio_filho = get_stylesheet_directory();
/**
 * criar arquivo que add metadado no USER, para saber de qual PET esse USER vai gerenciar
 * https://developer.wordpress.org/reference/functions/add_user_meta/
 * add_user_meta( int $user_id, string $meta_key, mixed $meta_value, bool $unique = false )
 */
require_once($template_diretorio_filho . "/user-meta.php");


/*
O arquivo 'meta_boxes_post.php' vai cuidar dos metadados,
do POST padrao do tipo PET
*/
require_once($template_diretorio_filho . "/meta_boxes_post.php");


//Registra um tamanho de imagem para a miniatura da postagem.
set_post_thumbnail_size(1280, 720, true);

//registrar wp_add_dashboard_widget do nome do estado(UF) que pertence, local->"work area"
require_once($template_diretorio_filho . "/nome-estado-dashboard-widget.php");

// banner/ slide show / carrossel
require_once($template_diretorio_filho . "/cpt-carrossel-banner.php"); 

// Quando um novo pet é criado no site nacional, tambem é cria automaticamente as categorias para cada pet no seu respectivo site estado(UF)
require_once($template_diretorio_filho . "/cria_category_via_api.php");

// remove 'role'/'niveis de acesso' que não estão sendo usado, para diminuir a chance de dar problema
require_once($template_diretorio_filho . "/remove_role.php"); 