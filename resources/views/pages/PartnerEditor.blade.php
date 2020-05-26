<!DOCTYPE html>
    <head>
        <meta charset = "UTF-8">
        <title>Admin - Editar Parceiro</title>
        <link href="../../../css/admin-styles.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">

           @component('pages.sidebar')
           @endcomponent

            <form class="containerContentHeader" method="Post" action="{{ route('PartnerUpdater', $partner->id) }}">
                {{method_field('PUT')}} {{csrf_field()}}
                <div class="titleBox">
                    <p class="titleSection">Editar Parceiro</p>
                    <a class="preview" style="text-decoration: none" href="{{ route('partner_show') }}">Voltar para Lista</a>
                </div>
                <div class="contentHead">

                    <div class="box">
                        <p>Nome do parceiro:</p>
                        <input type="text" name="name" value="{{$partner->name}}" />
                    </div>

                    <div class="box" style="margin-bottom: 10px;">
                        <p>Ocupação:</p>
                        <input type="text" name="ocupation" value="{{$partner->ocupation}}" />
                    </div>


                    <div class="box" style="margin-bottom: 10px;">
                        <p>Foto:</p>
                        <input type="text" name="image" value="{{$partner->image}}" placeholder="Tamanho 599x551" />
                    </div>

                    <div class="mini4BoxContainer">

                        <div class="mini4Box">
                            <p>Facebook:</p>
                            <input type="text" placeholder="" name="facebook" value="{{$partner->facebook}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>Linkedin:</p>
                            <input type="text" placeholder="" name="linkedin" value="{{$partner->linkedin}}"/>
                        </div>

                        <div class="mini4Box">
                            <p>Pinterest:</p>
                            <input type="text" placeholder="" name="pinterest" value="{{$partner->pinterest}}"/>
                        </div>

                        <div class="mini4Box" style="margin-bottom: 15px;">
                            <p>Twitter:</p>
                            <input type="text" placeholder="" name="twitter" value="{{$partner->twitter}}" />
                        </div>
                    </div>
                </div>



                        <button class="submitButton" type="submit">Enviar</button>

                </form>
           </div>

        </div>

    </body>
</html>
