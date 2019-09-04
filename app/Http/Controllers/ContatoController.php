<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MsgContactMailable;
use App\Mail\FormularioContato;

class ContatoController extends Controller
{
    function contato (){
        return view('contato');
    }

    function sendMail(Request $request) {
        try {
<<<<<<< HEAD
            $objMailTo = Mail::to('contato@reciclamaps.com.br');
            $mailable = new MsgContactMailable($name, $email, $message);
            $objMailTo->send($mailable);
            $msgRetorno ="Email enviado com sucesso, obrigado!";

=======
            Mail::to(config('mail.to.address'))->send(new FormularioContato($request));
            return view('contato', ['msg' => 'Mensagem enviada com sucesso!']);
>>>>>>> e0060e409d762f00e59db548a79e2b23cb241e7c
        } catch (\Exception $e) {
            //echo $e->getMessage();
            $msgRetorno = "Ocorreu um erro ao tentar enviar sua mensagem. Por favor, tente novamente mais tarde";
            return view('contato', ['msg' => $msgRetorno]);
        }
    }
}
