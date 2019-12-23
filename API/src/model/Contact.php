<?php

class ModelContact {

    public function SelectAll() {
        $db = new Entity('ri_contact');
        try {
            $db->select('*');
            $sth = $db->execute();

            $response = $sth->fetchAll(PDO::FETCH_ASSOC);

            return $response;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function Insert($request) {

        $body = $request->getParsedBody();

        $db = new Entity('ri_contact');
         try {

            $arrayBody = array(
                'ri_name' => "'{$body['name']}'",
                'ri_email' => "'{$body['email']}'",
                'ri_phone' => "'{$body['phone']}'",
                'ri_message' => "'{$body['message']}'"
            );

            $db->Insert($arrayBody);
            $id = $db->execute_id();

            $asunto = 'Contacto ' . $id;

            $template = CrearHTML::Html($body, $asunto, 'contact');

            if (empty($template)) {
                return array( 'template' => 'Template error' );
            } else {
                if (SendMail::EriiarCorreo($asunto, $template)) {
                    return true;
                } else {
                    return array( 'email' => 'Error de envio de correo' );
                }
            }
         } catch (PDOException $e){
            echo $e->getMessage();
            return false;
         }
    }
}