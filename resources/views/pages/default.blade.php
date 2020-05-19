<!DOCTYPE html>
    <head>
        <meta charset = "UTF-8">
        <title>Admin - Padrão</title>
        <link href="../css/admin-styles.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">

            @component('pages.sidebar')
            @endcomponent

           <div class="containerContentHeader">
                <div class="titleBox">
                    <p class="titleSection">Configurações do cabeçalho</p>
                    <div class="preview" onclick="mostrarModal('modalHeader')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Logo:</p>
                        <input type="text" name="icone" value="{{$dados->icone}}"/>
                    </div>

                    <div class="box">
                        <p>Telefone:</p>
                        <input type="text" name="telefone" value="{{$dados->telefone}}"/>
                    </div>

                    <div class="box">
                        <p>Email:</p>
                        <input type="email" name="email" value="{{$dados->email}}"/>
                    </div>

                    <div class="box">
                        <p>Horários:</p>
                        <input type="text" placeholder="Formato: Seg - Sex 09:00 - 17:00"
                        name="atendimento" value="{{$dados->atendimento}}"
                        />
                    </div>

                    <div class="miniBoxContainer">

                        <div class="miniBox">
                            <p>Facebook:</p>
                            <input type="url" placeholder="" name="facebook" value="{{$dados->facebook}}"/>
                        </div>

                        <div class="miniBox">
                            <p>Instagram:</p>
                            <input type="text" placeholder="" name="instagram" value="{{$dados->instagram}}"/>
                        </div>

                        <div class="miniBox">
                            <p>Linkedin:</p>
                            <input type="text" placeholder="" name="linkedin" value="{{$dados->linkedin}}"/>
                        </div>

                        <div class="miniBox">
                            <p>Pinterest:</p>
                            <input type="text" placeholder="" name="pinterest" value="{{$dados->pinterest}}" />
                        </div>

                        <div class="miniBox">
                            <p>Twitter:</p>
                            <input type="text" placeholder="" name="twitter" value="{{$dados->twitter}}" />
                        </div>
                    </div>
                </div>

                <div class="titleBox" style="margin-top: 5vh;">
                    <p class="titleSection">Configurações do Rodapé(footer)</p>
                    <div class="preview" onclick="mostrarModal('modalFooter')">Ver Componente</div>
                </div>
                <div class="contentHead">

                    <div class="box" style="margin-bottom: 25px">
                        <p>Logo:</p>
                        <input type="text" />
                    </div>
           </div>
        </div>

        <div id="modalHeader" class="modal">
            <img src="../img/headerExample.png" alt="Header">
            <p onclick="mostrarModal('modalHeader')">Fechar</p>
        </div>
        <div id="modalFooter" class="modal" style="margin-top: 50vh !important">
            <img src="../img/footerExample.png"  alt="Footer">
            <p onclick="mostrarModal('modalFooter')">Fechar</p>
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
