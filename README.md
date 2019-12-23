
# GruposPET
Esse projeto atende à demanda de divulgação do projeto Programa de Educação Tutorial - PET, com o uso do CMS Wordpress, onde por meio do API REST do Wordpress faz a republicação das postagens de cada instalação do Wordpress para outra instalação do Wordpress
______________________________________________________________________________________________________

Este projeto possui 5 partes:

	Template com a estrutura base para o site nacional, que dentro dele existirá o próximo item, que é o custom_post_type do tipo PET.

    Custom_post_type do Wordpress, que possui a lista de todos os PET de um determinado estado do Brasil. Este custom_post_type do tipo PET, existirá somente no site do PET Nacional, que ainda não temos o domínio para linkar. Este custom_post_type do tipo PET, recebera a o CRUD (Create, Read, Update and Delete) de qualquer site estadual do PET, mas somente o administrador de cada site estadual terá essa permissão. Bom, por que estamos fazendo assim? precisamos manter em um único local todos os dados de todos os PET do Brasil, para que um site que use o mapa do Brasil que lista os PET por estado, consiga os dados mais atualizados. E como fazemos que um administrador de um site estadual consiga gerenciar os PETs de seu estado sendo que os dados estão sendo todos salvo no site Nacional? Por meio da API REST do Wordpress do site Nacional temos acessos ao CRUD deste custom_post_type do tipe PET do site nacional. E dentro do site estadual, quando o administrador logar, ele verá um plugin em seu site com o nome de "Gerenciador PET" entrando neste plugin poderá realizar o gerenciamentos dos PETs de seus estado.

    Template com a estrutura base para sites estaduais (que é este repositorio do Git que estamos agora), que possui um campo que é capaz de pegar o arquivo SVG que forma a imagem do mapa do Brasil, onde se consegue listar por estado os seus respectivos PETs.

    Plugin do Wordpress, que será instalado em todos os sites estaduais, para que esses, consiga gerenciar a criação, atualização e exclusão de seus respectivos PETs (de seus proprio estado). O local de armazenamento dos dados de cada PET será armazenado no custom_post_type do tipo PET do site nacional.

    Quando uma publicação é criado em um site estadual, automaticamente, será republicada para o site regional, como por exemplo Centro Oeste, e do site regional, será republicada novamente para o site nacional. Via API 
______________________________________________________________________________________________________

Para utilizar do template estadual:

Apos instalar o wordpress,
baixe este tema chamado "GruposPET",
coloque o diretorio "GruposPET"
dentro do diretorio de temas do wordpress,
que esta localizado no seguinte caminho: "wp-content/themes",
apos realizar essa etapa,
entre no painel de administrador do wordpress,
com o link "http://seuDominio.com.br/wp-admin",
logue em sua conta de admin,
e vá até o menu "aparencia > temas".
ainda não conseguirar ativar o tema GruposPET, 
pois falta a dependencia do tema KYMA,
o próprio Wordpress pedirá para instalar o tema KYMA,
após feito isto,
clique em "ativar" o tema GrupostPET,
pronto =D

______________________________________________________________________________________________________

Para maiores detalhes, entre em contato com o PET Sistemas UFMS/FACOM Campo Grande.