# GruposPET
Esse projeto atende à demanda de divulgação do Programa de Educação Tutorial (PET), com o uso do CMS Wordpress, onde por meio do API REST do Wordpress faz a republicação das postagens de cada instalação do Wordpress para outra instalação do Wordpress, ou seja, dos sites estaduais para o site nacional.
Este repositório é responsável pelas funções do Site Estadual, sendo um tema do Wordpress. Este tema é chamado de “tema filho”, e coloquei como padrão o “tema pai” o tema “KYMA”, os arquivos do “tema pai” serão utilizados, a não ser que o arquivo do “tema pai” seja sobrescrito no “tema filho”, para isso, simplesmente recrie o arquivo no “tema filho” com o mesmo nome do arquivo no “tema pai”, assim o Wordpress usará o arquivo do “tema filho”.

Neste tema existe um arquivo SVG que forma o mapa do brasil (Mapa+do+Brasil+SVGa.html) no qual lista os PETs que estão cadastrados por estado do Brasil, pegando esses dados via API do site Nacional.
A ultima postagem feita no site estadual sera republicada na home do site nacional,
ou seja, o site nacional irá mostrar a ultima postagem de cada estado.
______________________________________________________________________________________________________

#### Para utilizar do template estadual:

    1. Apos instalar o wordpress,
    2. baixe este tema chamado "GruposPET",
    3. dentro do diretorio de temas do wordpress,
    4. que esta localizado no seguinte caminho: "wp-content/themes/", 
    5. entre no painel de administrador do wordpress,
    6. com o link "http://seuDominio.com.br/wp-admin",
    7. logue em sua conta de admin,
    8. e vá até o menu "aparência” 
    9. e abra a administração dos “temas".
    10.  ainda não conseguira ativar o tema ‘GruposPET’, 
    11.  pois falta a dependência do tema ‘KYMA’,
    12.  o próprio Wordpress pedirá para instalar o tema ‘KYMA’,
    13.  clique em "ativar" o tema GrupostPET,
    14.  acaso o Wordpress não recomente instalar o tema ‘KYMA’ automaticamente,
    15.  baixe o tema ‘KYMA’ neste link: https://wordpress.org/themes/kyma/
    16.  descompacte, e coloque o tema “KYMA” dentro do diretório "wp-content/themes/",
    17.  ao lado do tem “GruposPET”.
    18.  Pronto ;D

______________________________________________________________________________________________________

Para maiores detalhes, entre em contato com o PET Sistemas UFMS/FACOM Campo Grande.
