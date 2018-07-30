{{--<link rel="stylesheet" href="/bs_new/public/css/bootstrap.min.css" />--}}
<link rel="stylesheet" href="/bs_new/public/css/form.contacto.css" id="form-styles"/>
<div id="form-contacto">
    <div style="">
        <div class="underlay"></div>
        <div class="container-fluid">
            <div class="row">
                <div id="image-wrapper" class="col-sm-8">
                </div>
                <div id="ouibounce-pop-form-wrapper" class="col-sm-4">
                    <br class="visible-xs"><br class="visible-xs">
                    <div id="ouibounce-hero-form">
                        <div class="">
                            <div class="center-block">
                                <div id="contactFormContainer">
                                    <div class="popup-error" style="display:none;">
                                        Oops! Ocurri&oacute; un error al realizar el registro
                                    </div>
                                    <div class="popup-success" style="display:none;">
                                        Muchas gracias por registrarte!, Hemos guardado tus datos y pronto nos estaremos comunicando contigo
                                    </div>
                                    <div class="popup-error-validation" style="display:none;">
                                    </div>
                                    <form id="contactForm" method="post" autocomplete="off" class="form-horizontal lead-form" role="form" novalidate="">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="col-xs-12 col-sm-6">
                                                <input name="in_nombre" class="form-control" type="text" placeholder="Nombre *" value="" required>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <input name="in_apellidos" class="form-control" type="text" placeholder="Apellido *" value="" required>
                                            </div>
                                            <div class="col-xs-12 ">
                                                <input name="in_email" class="form-control" type="email" placeholder="Correo Electrónico *" value="" required>
                                            </div>
                                            <div class="col-xs-12 ">
                                                <input name="in_telefono" class="form-control" type="tel" placeholder="Telefono *" value="" required>
                                            </div>
                                            <div class="col-xs-12 ">
                                                <select name="in_distrito"  class="form-control" style="color: rgba(0, 0, 0, 0.5);" required>
                                                    <option value="">Distrito *</option>
                                                    @foreach ($distritos as $dist)
                                                        <option value="{{$dist['codigo_distrito']}}">{{$dist['distrito']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-xs-12 " >
                                                <select name="in_turno"  class="form-control" style="color: rgba(0, 0, 0, 0.5);" required>
                                                    <option value="">Horario ideal para recibir informes *</option>
                                                    @foreach ($turnos as $turno)
                                                        <option value="{{$turno['bs_turno_atencion_id']}}">{{$turno['descripcion']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-xs-12 required-notice">* Requerido</div>
                                            <div class="col-xs-12">
                                                <button class="btn col-xs-12" id="submit-button" type="submit">Obtener sesi&oacute;n gratis!</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/bs_new/public/js/jquery.validate.min.js"></script>
<script src="/bs_new/public/js/form.contacto.js"></script>

