<!DOCTYPE html>
    <head>
        <meta charset = "UTF-8">
        <title>Admin - Planos</title>
        <link href="../css/admin-styles.css" rel="stylesheet">
    </head>
    <body>



        <div class="container">

            @component('pages.sidebar')
            @endcomponent

            <form class="containerContentHeader" method="post" action="{{ route('admin_price_table') }}">
                <div class="titleBox">
                    <p class="titleSection">Configurações de Título</p>
                    <div class="preview" onclick="mostrarModal('modalTitle')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Titulo:</p>
                        <input type="text" name="titulo" value="{{$dados->titulo}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Subtitulo:</p>
                        <input type="text" name="subtitulo" value="{{$dados->subtitulo}}"/>
                    </div>

                </div>

                <div class="titleBox">
                    <p class="titleSection">Configurações da Descrição</p>
                    <div class="preview" onclick="mostrarModal('modalDescription')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Titulo:</p>
                        <input type="text" name="titulo2" value="{{$dados->titulo2}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 15px;">
                        <p>Subtitulo:</p>
                        <input type="text" name="subtitulo2" value="{{$dados->subtitulo2}}"/>
                    </div>

                    <div class="box" style="margin-bottom: 35px;">
                        <p>Descrição:</p>
                        <textarea class="boxTextarea" name="descricao" >{{$dados->descricao}}</textarea>
                    </div>
                </div>

                <div class="containerPlains">
                    <div class="plainsSiderBox">
                        <div class="plainItem" >
                            <p>Nome do Plano:</p>
                            <input type="text" name="planoesquerdatitulo" value="{{$dados->planoesquerdatitulo}}"/>
                        </div>

                        <div class="plainItem" >
                            <p>Pequena descrição do Plano:</p>
                            <input type="text" name="planoesquerdasubtitulo" value="{{$dados->planoesquerdasubtitulo}}"/>
                        </div>

                        <div class="plainItem" >
                            <p>Preço do Plano:</p>
                            <input type="text" name="precoesquerda" value="{{$dados->precoesquerda}}"/>
                        </div>

                        <div class="plainItem" >
                            <p>Link do Plano:</p>
                            <input type="text" name="esquerdalink" value="{{$dados->esquerdalink}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 1:</p>
                            <input type="text" name="esquerdalista1" value="{{$dados->esquerdalista1}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 2:</p>
                            <input type="text" name="esquerdalista2" value="{{$dados->esquerdalista2}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 3:</p>
                            <input type="text" name="esquerdalista3" value="{{$dados->esquerdalista3}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 4:</p>
                            <input type="text" name="esquerdalista4" value="{{$dados->esquerdalista4}}"/>
                        </div>


                    </div>

                    <div class="plainsCenterBox">
                        <div class="plainItem" >
                            <p>Nome do Plano:</p>
                            <input type="text" name="planocentrotitulo" value="{{$dados->planocentrotitulo}}"/>
                        </div>

                        <div class="plainItem" >
                            <p>Pequena descrição do Plano:</p>
                            <input type="text" name="planocentrosubtitulo" value="{{$dados->planocentrosubtitulo}}"/>
                        </div>

                        <div class="plainItem" >
                            <p>Preço do Plano:</p>
                            <input type="text" name="precocentro" value="{{$dados->precocentro}}"/>
                        </div>

                        <div class="plainItem" >
                            <p>Link do Plano:</p>
                            <input type="text" name="centrolink" value="{{$dados->centrolink}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 1:</p>
                            <input type="text" name="centrolista1" value="{{$dados->centrolista1}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 2:</p>
                            <input type="text" name="centrolista2" value="{{$dados->centrolista2}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 3:</p>
                            <input type="text" name="centrolista3" value="{{$dados->centrolista3}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 4:</p>
                            <input type="text" name="centrolista4" value="{{$dados->centrolista4}}"/>
                        </div>

                    </div>

                    <div class="plainsSiderBox">
                        <div class="plainItem" >
                            <p>Nome do Plano:</p>
                            <input type="text" name="planodireitatitulo" value="{{$dados->planodireitatitulo}}"/>
                        </div>

                        <div class="plainItem" >
                            <p>Pequena descrição do Plano:</p>
                            <input type="text" name="planodireitasubtitulo" value="{{$dados->planodireitasubtitulo}}"/>
                        </div>

                        <div class="plainItem" >
                            <p>Preço do Plano:</p>
                            <input type="text" name="precodireita" value="{{$dados->precodireita}}"/>
                        </div>

                        <div class="plainItem" >
                            <p>Link do Plano:</p>
                            <input type="text" name="direitalink" value="{{$dados->direitalink}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 1:</p>
                            <input type="text" name="direitalista1" value="{{$dados->direitalista1}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 2:</p>
                            <input type="text" name="direitalista2" value="{{$dados->direitalista2}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 3:</p>
                            <input type="text" name="direitalista3" value="{{$dados->direitalista3}}"/>
                        </div>

                        <div class="plainItem" style="font-size: 0.8em;">
                            <p>Item 4:</p>
                            <input type="text" name="direitalista4" value="{{$dados->direitalista4}}"/>
                        </div>

                    </div>
                </div>

                    <button class="submitButton" type="submit">Atualizar</button>

            </form>
        </div>


        <div id="modalTitle" class="modal">
            <img src="img/examples/priceTable/title.png" alt="Header">
            <p onclick="mostrarModal('modalTitle')">Fechar</p>
        </div>
        <div id="modalDescription" class="modal" style="margin-top: 50vh !important">
            <img src="img/examples/priceTable/description.png" >
            <p onclick="mostrarModal('modalDescription')">Fechar</p>
        </div>
    </body>
    <script>

        function mostrarModal(modal){
            console.log(modal);
            let modelo = document.getElementById(modal);
            console.log(modelo);
            modelo.classList.toggle("toggleModal");
        }
    </script>
</html>
