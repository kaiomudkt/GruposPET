<?php 
/*este arquivo é utilizado criar categorias que representem os PET criados no site nacional para este estado*/

/*quando o tempo for iniciado, ja cria a categoria 'lista_pets'
essa categoria vai ser usada depois, como categoria para as outras categorias que representam pets, 
por isso ela tem que ser criada antes.*/
//add_action('after_setup_theme', 'cria_categoria_lista_pets');
//add_action('init', 'cria_categoria_lista_pets');
//add_action('', 'cria_categoria_lista_pets');
//cria categoria lista_pets
function cria_categoria_lista_pets(){
  $id = wp_insert_category(
    array(
      'cat_name' => 'lista pets', 
      'category_description' => 'lista todos os PETs do seu estado(UF)',
      'category_nicename' => 'lista-pets'
    )
  );
  if ($id == 0) {
    //$this.setCustomValidity( 'Erro ao criar nova categoria "lista_pets" automaticamente.' );
  }
  return $id;
}

//ainda não sei qual hook usar, achei essas, talvez alguma seja a ideial
 //add_action('publish_post','verifica_novas_pets_neste_estado');
 //add_action('edit_post','verifica_novas_pets_neste_estado');// nao consegui ver funcionando
 add_action('register_post','verifica_novas_pets_neste_estado');//nao sei pq, mas esse hook n causa problema
 //add_action('save_post','verifica_novas_pets_neste_estado');//new post é chamado
 //add_action('wp_insert_post','verifica_novas_pets_neste_estado');//new post é chamado
//verifica se existe novos pets cadastrados no site nacional no mesmo estado(UF) que neste site estadual atual, se existir novos pets, entao criar uma categoria para representar este pet, essa categoria sera utilizada para listar todos os posts deste respectivo pet.
function verifica_novas_pets_neste_estado(){
  $url_nacional = 'http://172.16.28.2';
  $nome_estado = sanitize_text_field(get_option('nome_estado'));
  $arguments = array('method' => 'GET');
  $request = wp_remote_get($url_nacional.'/wp-json/api/pet?estado='.$nome_estado, $arguments);
  if (!is_wp_error($request)) {
    $body = wp_remote_retrieve_body($request);
    $data = json_decode($body);
    if (!is_wp_error($data)){
      foreach($data as $pet){
        //https://developer.wordpress.org/reference/functions/category_exists/
        if (!category_exists($pet->post_title)) {
          $id_category = cria_nova_categoria($pet->post_title, $pet->guid );
          marca_category();
        }
      }//fim foreach
    }
  }
}//fim function

//https://developer.wordpress.org/reference/functions/wp_create_category/
function cria_nova_categoria($nome, $url){
  //$id = wp_create_category($nome, $url);
  $id_pai = 0;
  if (!category_exists('lista-pets')) {
    $id_pai = cria_categoria_lista_pets();
  }else{
    $idObj = get_category_by_slug('lista-pets'); 
    $id_pai = $idObj->term_id;
  }
  $id = wp_insert_category(
    array(
      'cat_name'             => $nome,
      'category_description' => 'URL:'.$url,
      'category_parent'      => $id_pai
    )
  );
  if ($id == 0) {
    echo 'Erro ao criar nova categoria automaticamente.';
    var_dump('Erro ao criar nova categoria automaticamente.');
    //$this.setCustomValidity( 'Erro ao criar nova categoria automaticamente.' );//https://isabelcastillo.com/docs/woocommerce-max-quantity-documentation#docs-custom
  }
  return $id;
}

/*
https://developer.wordpress.org/reference/functions/wp_insert_category/
depois que criar a categoria, e o user salvar o post, marcar a categoria que representar o pet.
*/
//add_action('save_post', 'marca_category');
function marca_category(){
  $pet_atual = esc_attr(get_post_meta( get_the_ID(), 'pet_responsavel', true));//pet do user logado
  if ($pet_atual) {//por exemplo, o super admin nao tem
    $id_categoria = get_cat_ID($pet_atual);
    $categorias = wp_get_post_categories(get_the_ID());
    array_push($categorias, $id_categoria);
    wp_update_post(
      array(
        'ID'           => get_the_ID(),
        'categories'   => $categorias,
      )
    );
  }
}
?>