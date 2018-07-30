<html>
    <head>
        <style>
            body{
                font-family: Lato, "Helvetica Neue", Helvetica, Arial, sans-serif;
            }
            .tabla-datos{
                width:100%;
                margin: 25px;
            }
            .parrafo{                
                padding-left:25px;
            }
            .td-label{
                width: 80px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <div class="container">

            <div class="parrafo">
                Un nuevo contacto acaba de registrarse.

                Sus datos son los siguientes:                
            </div>

            <table class="tabla-datos">
                <tbody>
                    <tr>
                        <td class="td-label">Nombres</td>
                        <td>{{$contacto->nombres}}</td>
                    </tr>
                    <tr>
                        <td class="td-label">Apellidos</td>
                        <td>{{$contacto->apellidos}}</td>
                    </tr>
                    <tr>
                        <td class="td-label">Email</td>
                        <td>{{$contacto->email}}</td>
                    </tr>
                    <tr>
                        <td class="td-label">Teléfono</td>
                        <td>{{$contacto->phone}}</td>
                    </tr>
                    <tr >
                        <td class="td-label">Distrito</td>
                        <td>{{$contacto->distrito->distrito}}</td>
                    </tr>
                    <tr >
                        <td class="td-label">Turno de Atención</td>
                        <td>{{$contacto->bs_turno_atencion->descripcion}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>