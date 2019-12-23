<?php

class ModelInscripcion {

    public function SelectAll() {
        $db = new Entity('ri_Inscripcion');
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
        $db = new Entity('ri_Inscripcion');
         try {
            $arrayBody = array(
                'ri_email' => "'{$body['email']}'"
            );

            $db->Insert($arrayBody);
            $id = $db->execute_id();

            $asunto = 'Solicitud de Inscripción ' . $id;

            $template = CrearHTML::Html($body, $asunto, 'Inscripcion');

            if (empty($template)) {
                return array( 'template' => 'Template error' );
            } else {
                if (SendMail::EriiarCorreo($asunto, $template)) {
                    return true;
                } else {
                    return array( 'email' => 'Error de eriio de correo' );
                }
            }
         } catch (PDOException $e){
            echo $e->getMessage();
            return false;
         }
    }
}