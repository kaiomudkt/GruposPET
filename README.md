# GruposPET
Esse projeto atende à demanda de divulgação do Programa de Educação Tutorial (PET), com o uso do CMS Wordpress, onde por meio do API REST do Wordpress faz a republicação das postagens de cada instalação do Wordpress para outra instalação do Wordpress, ou seja, dos sites estaduais para o site nacional.
Este repositório é responsável pelas funções do Site Estadual, sendo um tema do Wordpress. Este tema é chamado de “tema filho”, e coloquei como padrão o “tema pai” o tema "onepress".

Neste tema existe um arquivo SVG que forma o mapa do brasil (Mapa+do+Brasil+SVGa.html) no qual lista os PETs que estão cadastrados por estado do Brasil, pegando esses dados via API no site Nacional.
A ultima postagem feita no site estadual sera republicada na home do site nacional,
ou seja, o site nacional irá mostrar a ultima postagem de cada estado.
______________________________________________________________________________________________________

#### Para utilizar do template estadual:

1. apos instalar o wordpress;
2. baixe este tema chamado "GruposPET";
3. coloque o diretorio "GruposPET" (este tema) dentro do diretorio de temas do wordpress, chamado de "themes" que esta localizado no seguinte caminho: "wp-content/themes/";
4. entre no painel de administrador do wordpress com o link "http://seuDominio.com.br/wp-admin";
5. faça login com sua conta de 'super admin';
6. e vá até o menu "aparencia>temas";
7. ainda não será possível ativar o tema GruposPET pois falta a dependencia do tema pai 'onepress';
8. o próprio Wordpress pedirá para instalar o tema pai 'onepress';
9. agora clique em "ativar" o tema GrupostPET;
10. acaso o Wordpress não encontre o tema pai ‘onepress’ automaticamente para instala-lo, você mesmo terá que baixa-lo, neste link: https://wordpress.org/themes/onepress/
11. descompacte, e coloque o tema pai “onepress” dentro do diretório "wp-content/themes/", ao lado do tema filho “GruposPET”.
12. agora a dependência do tema filho "GruposPET" será atendida pelos arquivos do tema pai "onepress", então ative o tema "GruposPET".
13. Ainda logado como 'super admin', clique em "configurações" no painel do administrador, depois, clique em "links permanentes", na opção "Configurações comuns", marque a opção de "Nome do post", click em "salvar alterações"

14. Agora click na primeira aba do menu do 'super admin' chamada 'Painel', e procure a caixa de texto com o nome de "Nome do seu estado", e preencha com a sigla do estado que seu site representa. Para poder editar essa caixa, coloque o mouse no canto superior direito, vai aparecer um texto escrito 'configurar', click nele, e preencha os campos, e click no botão na parte de baixo da caixa chamado de 'enviar' para salvar suas alterações.
15. Crie 'banner'/'carrossel de imagens'/'slide show', na aba do menu chamada de "Banners", para a imagem do banner aparecer no carrossel de imagens, deve colocar no campo direito 'imagem destacada'/'thumbnail'.
16. Ainda logado como 'super admin cadastre contas para os respectivos responsáveis de seu PET, sempre no nível de acesso "autor",  e lembre de marcar qual PET o novo usuário vai pertencer, no formulário de criar novos usuários, o campo que se chama 'PET a ser gerenciado', isso é vital para o sistema. 

Para maiores detalhes, entre em contato com o PET Sistemas UFMS/FACOM Campo Grande.
______________________________________________________________________________________________________
