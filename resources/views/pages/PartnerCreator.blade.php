<!DOCTYPE html>
    <head>
        <meta charset = "UTF-8">
        <title>Admin - Adicionar Parceiro</title>
        <link href="../../css/admin-styles.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">

           @component('pages.sidebar')
           @endcomponent

            <form class="containerContentHeader" method="post" action="{{ route('partner_create') }}">
                <div class="titleBox">
                    <p class="titleSection">Adicionar Parceiro</p>
                    <a class="preview" style="text-decoration: none" href="{{ route('partner_show') }}">Voltar para Lista</a>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Nome do parceiro:</p>
                        <input type="text" name="name" />
                    </div>

                    <div class="box" style="margin-bottom: 10px;">
                        <p>Ocupação:</p>
                        <input type="text" name="ocupation" />
                    </div>


                    <div class="box" style="margin-bottom: 10px;">
                        <p>Foto:</p>
                        <input type="text" name="image" placeholder="Tamanho 599x551" />
                    </div>

                    <div class="mini4BoxContainer">

                        <div class="mini4Box">
                            <p>Facebook:</p>
                            <input type="text" placeholder="" name="facebook"/>
                        </div>

                        <div class="mini4Box">
                            <p>Linkedin:</p>
                            <input type="text" placeholder="" name="linkedin"/>
                        </div>

                        <div class="mini4Box">
                            <p>Pinterest:</p>
                            <input type="text" placeholder="" name="pinterest" />
                        </div>

                        <div class="mini4Box" style="margin-bottom: 15px;">
                            <p>Twitter:</p>
                            <input type="text" placeholder="" name="twitter" />
                        </div>
                    </div>
                </div>



                        <button class="submitButton" type="submit">Enviar</button>

                </form>
           </div>

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
