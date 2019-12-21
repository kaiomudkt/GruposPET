
# GruposPET
Esse projeto atende à demanda de divulgação do projeto Programa de Educação Tutorial - PET, com o uso do CMS Wordpress, onde por meio do API REST do Wordpress faz a republicação das postagens de cada instalação do Wordpress para outra instalação do Wordpress

O  Projeto é baseado em duas etapas:
    * Um plguin que possui a lista de todos os PET de um determinado estado do Brasil, nome do plugin é lista_pets_br.
    * Um template com a estrutura base, com todos os recurso que serao necessario para a execucacao do projeto


______________________________________________________________________________________________________


Para utilizar do template:

Apos instalar o wordpress,
baixe este tema chamado "GruposPET",
descompacte o arquivo kyma.zip.
coloque o diretorio "GruposPET" e "kyma"
dentro do diretorio do tema do wordpress,
que esta localizado no seguinte caminho: wp-content/themes,
apos realizar essa etapa,
entre no painel de administrador do wordpress,
com o link "http://seuDominio.com.br/wp-admin",
logue em sua conta de admin,
e va ate o menu "aparencia > temas"

____________________________________________________________________________

WordPress REST API - JWT JSON Web Token
copie e cole o seguinte trecho a seguir no arquivo "wp-config.php":

/*

No arquivo "wp-config.php" implemente  essas duas linha de código mostradas a baixo

fazer o download do plugin "JWT Authentication for WP REST API V2",
instalar e ativar o plugin, link:
https://wordpress.org/plugins/jwt-authentication-for-wp-rest-api/

Gera senha aleatorias:
 https://api.wordpress.org/secret-key/1.1/salt/

define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');
*/

define('JWT_AUTH_SECRET_KEY', 'B J@+oB !UojJaZhB5[>)fMX-QmAN#gG1X%j/gT?h9:/oz4C@+7@#(W^hAbTW~.k');

define('JWT_AUTH_CORS_ENABLE', true);
