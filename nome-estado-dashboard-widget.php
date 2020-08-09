<?php
//https://developer.wordpress.org/reference/functions/wp_add_dashboard_widget/
//https://rudrastyh.com/wordpress/dashboard-widgets-with-options.html

function registrar_dashboard_widget_nome_estado(){
    wp_add_dashboard_widget(  
        'id_widget_nome_estado',
        'Nome do seu estado',
        esc_html__('callback_nome_estado'),
        esc_html__('callback_form_nome_estado'),
        $callback_args = null
    ); 
}

add_action( 'wp_dashboard_setup', 'registrar_dashboard_widget_nome_estado' );

function callback_nome_estado(){
    ?>
        <p class="meta-options campos">
            <label for="estado">Nome do seu estado/UF (Unidade Federativa).</label>
            <input 
                id="<?php echo 'Nome do estado'; ?>"
                Disabled
                type="text"
                name="nome_estado"
                value="<?php echo esc_attr( get_option('nome_estado') ); ?>"
            >
        </p>
    <?php
}

//salvar dados do input digitado pelo usuario 
function callback_form_nome_estado() {  
    if ( isset( $_POST['submit'] ) ) {
        if ( isset($_POST['nome_estado']) ) {
            update_option('nome_estado', sanitize_text_field($_POST['nome_estado']) );
        }
    }
    ?>
    <p class="meta-options campos">
        <label for="estado">Nome do seu estado/UF (Unidade Federativa).
                <br> Este nome tem que ser idêntico ao nome que está na lista de estados do site Nacional, pois é baseado neste nome, que será listado os PETs deste estado quando for criar um novo usário. Ou seja, tenha cuidado.
                <br>(Listar os PETs deste estado).
                <br>Lista de nomes de estados válidos: AC, AL, AP, AM, BA, CE, ES, GO, MA, MT, MS, MG,PA,
        PB, PR, PE, PI, RJ, RN, RS, RO, RR, SC, SP, SE, TO e DF.
                <br>
                Para saber se deu certo, vá a tela de adicionar um novo usuário, e veja se no campo 'PET a ser gerenciado' esta listando todas as opções possíveis que estão cadastradas no site nacional como pertencente ao estado que digitou
        </label>
        <input 
            id="<?php echo 'Nome do estado'; ?>"
            type="text"
            name="nome_estado"
            value="<?php echo esc_attr( get_option('nome_estado') ); ?>"
        >
    </p>
    <?php
}
?>
