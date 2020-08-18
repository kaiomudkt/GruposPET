#Explicações sobre o "Grupos PET":

A solicitação de criação deste projeto, surgiu a partir da demanda de divulgação dos projetos e atividades realizadas por cada um dos 842 grupos PET do Brasil.

A solução encontrada foi a criação desta plataforma, que tem como objetivo possibilitar que cada grupo PET do Brasil tenha espaço apropriado para divulgar suas atividades de forma independente de terceiros, na qual pode criar, editar e excluir suas publicações, e automatizando alguns processos, como relacionar cada usuário do sistema a um determinado PET, uma postagem a um determinado PET, listar postagens de um determinado PET e listar PETs de um determinado estado do Brasil. E existem outras funções que podem ser inseridas individualmente em cada site Estadual de acordo com a vontade dos petianos, usando os plugins do Wordpress que podem ser instalados a qualquer momento, mas deve-se verificar antes se é seguro, por exemplo, a criação de um calendário para anotar seus eventos, e até mesmo coisas bem simples como aniversáriante da semana. O site Nacional será único, já o site Estadual existirá um para cada respectivo estado do Brasil, claro que essa organização não precisa ser necessariamente cumprida, pois foi planejada de forma genérica.

Mas no geral, a principal função da plataforma é permitir que os petianos realizarem postagens, de forma independente e organizada, no site do seu respectivo estado do Brasil, assim expondo para a comunidade brasileira o conteúdo realizado pela comunidade petiana. E como todos os PETs serão cadastrado no site Nacional, existirá um local público contendo os dados básicos destes PETs, como tutor, data de criação, quantidade de membros, instituição que pertencente, link do site(se houver), estado e cidade, campus e e-mail, e outros dados que podem ser criados, que por exemplo, poderá proporcionar uma integração entre PETs que tem o mesmo interesse em determinada ação, pesquisa, atividade, evento, tutorial, palestra dentre outros, podendo auxiliar os PETs a se conhecerem e participarem de projetos que antes era desconhecido, fomentando a integração entre os grupos até mesmo aos que estão fisicamente longe.

O projeto 'Grupos PET' é dividido em duas partes, sendo ambas temas do Content Management System (CMS) Wordpress. O repositório que estamos é responsável pelas funções e aparência de cada site Estadual, já o tema responsável pelo site Nacional encontrasse no repositório https://github.com/kaiomudkt/wp-template-child-sitePET-nacional, e ambos os temas utilizam-se do recurso do Wordpress de dependencia de  tema chamado de 'tema pai' e 'tema filho', onde são 'tema filhos' e o tema 'onepress' é o 'tema pai' e para que o 'tema filho' consiga ser ativado, é necessário antes a instalação do 'tema pai'. O tema Nacional tem suas funcionalidades descrita em seu respectivo repositório ja citado, então será descrito as funcionalidades criadas pelo tema 'Grupos-PET-Estadual' sem se atentar nas funções padrões do Wordpress, e sim nas customizações.
1. Slide-Show/carrossel-de-imagens/banner, para inserir uma nova imagem ao carrossel, logue em uma conta com nível de acesso de 'autor', entre no painel de administração do Wordpress, abra a opção 'Banners' na barra lateral à esquerda, e em seguida em 'adicionar novo', se desejar preencha o campo de texto 'adicionar título' e o campo de texto de 'descrição', e insira a imagem desejada para aparecer no carrossel no campo direito chamado de 'imagem destacada'/'thumbnail'.  
2. Utilizando a função do Wordpress 'personalizar' insira os recursos que julgar necessário na 'barra lateral'/'sidebar' da página 'home'/'principal', como por exemplo, barra de pesquisa ou listar post por categoria, inserindo tanto as funções padrões do Wordpress, quanto a imensa funções que plugins do Wordpress oferece. 
3. Mapa do Brasil que lista PETs por estado do Brasil, que foram cadastrados no site Nacional.
4. Quando um novo usuário for criado, ele deverá ser vinculado a um PET do estado do Brasil no qual o site Estadual que se encontra representa. Por exemplo, quando o 'super admin' do site estadual do MS, criar um novo usuário para um tutor, ele deverá preencher um campo dizendo de qual PET esse novo usuário é relacionado, a lista de PETs que aparecerão para o 'super admin' escolher, será todos os PETs cadastrados no estado do MS no site Nacional.
5. Quando um usuário que foi criado corretamente pelo 'super admin' criar uma postagem, essa nova postagem receberá por padrão do Wordpress quem foi o usuário que criou esta postagem, mas além disso, também será vinculada a esta postagem o PET da qual o usuário logado pertence, assim, ligando diretamente a postagem a um determinado PET, está informação é util tanto para mostrar na própria postagem qual foi o PET que realizou esta postagem, quanto para conseguir listar de forma eficiente todos os post de um determinado PET, para isto é utilizando a taxonomia>categoria do Wordpress, para cada PET cadastrado no site Nacional que pertence ao mesmo estado do Brasil que o site Estadual, existirá uma categoria no site Estadual que representará este PET, facilitando a busca de postagens de um determinado PET.


______________________________________________________________________________________________________

#### Para utilizar do template estadual:

1. após instalar o wordpress;
2. baixe este tema chamado "GruposPET";
3. coloque o diretório "GruposPET" (este tema) dentro do diretório de temas do wordpress, chamado de "themes" que está localizado no seguinte caminho: "wp-content/themes/";
4. entre no painel de administrador do wordpress com o link "http://seuDominio.com.br/wp-admin";
5. faça login com sua conta de 'super admin';
6. e vá até o menu "aparência>temas";
7. ainda não será possível ativar o tema GruposPET pois falta a dependência do tema pai 'onepress';
8. o próprio Wordpress pedirá para instalar o tema pai 'onepress';
9. agora clique em "ativar" o tema GrupostPET;
10. acaso o Wordpress não encontre o tema pai ‘onepress’ automaticamente para instalá-lo, você mesmo terá que baixa-lo, neste link: https://wordpress.org/themes/onepress/
11. descompacte, e coloque o tema pai “onepress” dentro do diretório "wp-content/themes/", ao lado do tema filho “GruposPET”.
12. agora a dependência do tema filho "GruposPET" será atendida pelos arquivos do tema pai "onepress", então ative o tema "GruposPET".
13. Ainda logado como 'super admin', clique em "configurações" no painel do administrador, depois, clique em "links permanentes", na opção "Configurações comuns", marque a opção de "Nome do post", click em "salvar alterações"
14. Agora click na primeira aba do menu do 'super admin' chamada 'Painel', e procure a caixa de texto com o nome de "Nome do seu estado", e preencha com a sigla do estado que seu site representa. Para poder editar essa caixa, coloque o mouse no canto superior direito, vai aparecer um texto escrito 'configurar', click nele, e preencha os campos, e click no botão na parte de baixo da caixa chamado de 'enviar' para salvar suas alterações.
15. Crie 'banner'/'carrossel de imagens'/'slide show', na aba do menu chamada de "Banners", para a imagem do banner aparecer no carrossel de imagens, deve colocar no campo direito 'imagem destacada'/'thumbnail'.
16. Ainda logado como 'super admin' cadastre contas para os respectivos responsáveis de seu PET, sempre no nível de acesso "autor",  e lembre de marcar qual PET o novo usuário vai pertencer, no formulário de criar novos usuários, o campo que se chama 'PET a ser gerenciado', isso é vital para o sistema. 


Para maiores detalhes, entre em contato com o PET Sistemas UFMS/FACOM Campo Grande.
______________________________________________________________________________________________________