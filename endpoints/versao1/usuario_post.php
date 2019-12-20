<?php
//https://www.youtube.com/watch?v=ahpSoloX2LY&list=PL9rc_FjKlX39I_9iewbSCzZp9rm2J4LX0&index=3
function api_usuario_post($request) {

  $response = array(
    'nome' => 'Andre',
    'email' => 'andre@origamid.com'
  );
  return rest_ensure_response($response);
}

function registrar_api_usuario_post() {
  register_rest_route('grupospet', '/usuario', array(
    array(
      'methods' => 'GET',
      'callback' => 'api_usuario_post',
    ),
  ));
}

add_action('rest_api_init', 'registrar_api_usuario_post');
//WP_REST_Server::CREATABLE