<?php

class ModelCotizar {

    public function SelectAll() {
        $db = new Entity('ri_cotizar');
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

        $db = new Entity('ri_cotizar');
         try {

            $arrayBody = array(
                'ri_name' => "'{$body['name']}'",
                'ri_email' => "'{$body['email']}'",
                'ri_material' => "'{$body['material']}'",
                'ri_message' => "'{$body['message']}'",
                'ri_phone' => "'{$body['phone']}'",
                'ri_cantidad' => "'{$body['cantidad']}'"
            );

            $db->Insert($arrayBody);
            $id = $db->execute_id();

            $asunto = 'Formulario Cotizar Numero ' . $id;

            $template = CrearHTML::Html($body, $asunto, 'Cotizar');

            if (empty($template)) {
                return array( 'template' => 'Template error' );
            } else {
                if (SendMail::EriiarCorreo($asunto, $template)) {
                    return true;
                } else {
                    return array( 'email' => 'Template de eriio de correo' );
                }
            }
         } catch (PDOException $e){
            echo $e->getMessage();
            return false;
         }
    }
}