<?php

namespace App\Http\Controllers;

use App\Services\EnumerablesService;
use Illuminate\Http\Request;
use App\Distrito;
use App\Http\Requests\ContactoRequest;
use Response;
use App\Services\ContactService;
use App\Services\UbigeoService;
use App\Services\EmailService;

class ContactoController extends Controller
{
    protected $_contactService;
    protected $_ubigeoService;
    protected $_emailService;
    protected $_enumerablesService;

    function __construct(ContactService $contactService, UbigeoService $ubigeoService, EmailService $emailService, EnumerablesService $enumService) {
        $this->_contactService     = $contactService;
        $this->_ubigeoService      = $ubigeoService;
        $this->_emailService       = $emailService;
        $this->_enumerablesService = $enumService;
    }

    public function Index() {
        $distritos = $this->_ubigeoService->ListarDistritos();
        $turnos    = $this->_enumerablesService->Turnos();

        return view('/portal/formulario-contacto', ["distritos" => $distritos, "turnos" => $turnos]);
    }

    public function Save(ContactoRequest $request) {
        try {          
            $id_contacto = $this->_contactService->GuardarContacto($request);
            $contacto    = $this->_contactService->ListarContacto($id_contacto);
            //$email       = env('EMAIL_DESTINATARIO_CONTACTO');
            $email = 'mario.garcia103@gmail.com';
            $this->_emailService->SendEmail("emails.contacto-registrado", ["contacto" => $contacto], $email, 'Campaña Desenrróllate');

            return Response::json(["save" => true]);
        } catch (Exception $e) {
            return Response::json(["error" => $e->getMessage()]);
        }
    }

    public function test() {
        $contacto = $this->_contactService->ListarContacto(8);

        return view("emails.contacto-registrado", ["contacto" => $contacto]);
    }
}
