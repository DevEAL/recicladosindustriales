<?php

class CrearHTML {
    public static function Html($body, $titulo, $option) {
        $HTMLStart =
            '
            <html>
              <head>
                <meta charset=utf-8"/>
              </head>
              <body>
            ';
        $HTMLBody =
            '
            <div>
              <h2>'.$titulo.'</h2>
            </div>
            ';
        switch ($option) {
          case 'Inscripcion':
            $HTMLSection =
            '
            <div>
              <p>suscripción de: <span>'.$body['email'].'</span></p>
            </div>
            ';
            break;
          case 'Cotizar':
            $HTMLSection =
            '
            <div>
              <p>Nombre: <span>'.$body['name'].'</span></p>
              <p>Email: <span>'.$body['email'].'</span></p>
              <p>Telefono: <span>'.$body['phone'].'</span></p>
              <p>Material: <span>'.$body['material'].'</span></p>
              <p>Cantidad: <span>'.$body['cantidad'].'</span></p>
              <p>Mensaje: <span>'.$body['message'].'</span></p>
            </div>
            ';
            break;
          case 'contact':
            $HTMLSection =
            '
            <div>
              <p>Nombre: <span>'.$body['name'].'</span></p>
              <p>Correo: <span>'.$body['email'].'</span></p>
              <p>Celular: <span>'.$body['phone'].'</span></p>
              <p>Mensaje: <span>'.$body['message'].'</span></p>
            </div>
            ';
            break;
        }
        $HTMLFinish =
            '
              </body>
            </html>
            ';
        $HTML = $HTMLStart . $HTMLBody . $HTMLSection . $HTMLFinish;

        return $HTML;
    }
}