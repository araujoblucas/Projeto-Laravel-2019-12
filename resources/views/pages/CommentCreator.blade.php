<!DOCTYPE html>
    <head>
        <meta charset = "UTF-8">
        <title>Admin - Criar Comentário</title>
        <link href="../../../css/admin-styles.css" rel="stylesheet">
        <script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js"></script>
    </head>
    <body>

        <div class="container">

           @component('pages.sidebar')
           @endcomponent

            <form class="containerContentHeader" method="post" action="{{ route('commentCreate') }}">
                <div class="titleBox">
                    <p class="titleSection">Criar Comentário</p>
                    <a class="preview" style="text-decoration: none" href="{{ route('admin_home') }}">Voltar para Home</a>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Autor</p>
                        <input type="text" name="nome" />
                    </div>

                    <div class="box" style="margin-bottom: 10px;">
                        <p>Ocupação</p>
                        <input type="text" name="ocupacao" />
                    </div>

                    <div class="box" style="margin-bottom: 20px;">
                        <p>Ícone</p>
                        <input type="text" name="icone" placeholder="71x71" />
                    </div>

                    <textarea name="frase" id="editor1"></textarea>


                </div>
                        <button class="submitButton" type="submit">Enviar</button>

                </form>
           </div>

        </div>

    </body>
    <script>
        CKEDITOR.replace( 'editor1', {
            uiColor: '#C3BFBC',
            width: '60vw',
            padding: '10px',
            height: '60vh'
            }
        );
    </script>
    <script>
        CKEDITOR.stylesSet.add( 'editor1', [
    // Block-level styles.
        { name: 'Blue Title', element: 'h2', styles: { color: 'Blue' } },
        { name: 'Red Title',  element: 'h3', styles: { color: 'Red' } },

        // Inline styles.
        { name: 'CSS Style', element: 'span', attributes: { 'class': 'my_style' } },
        { name: 'Marker: Yellow', element: 'span', styles: { 'background-color': 'Yellow' } }
        </script>




    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</html>
