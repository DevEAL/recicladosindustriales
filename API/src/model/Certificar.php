<?php

class ModelCertificar {

    public function SelectAll() {
        $db = new Entity('ri_certificar');
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
        $date = date("Y-m-d H:i:s");

        $db = new Entity('ri_certificar');
         try {
            $arrayBody = array(
                'ri_email' => "'{$body['email']}'",
                'ri_phone' => "'{$body['phone']}'",
                'ri_nit' => "'{$body['nit']}'",
                'ri_nameCorp' => "'{$body['nameCorp']}'",
                'ri_contrato' => "'{$body['contrato']}'",
                'ri_proyecto' => "'{$body['proyecto']}'",
                'ri_pin' => "'{$body['pin']}'",
                'ri_contact' => "'{$body['contact']}'",
                'ri_selContrIdu' => "'{$body['selContrIdu']}'",
                'ri_periodo' => "'{$body['periodo']}'",
                'ri_vales' => "'{$body['vales']}'",
                'ri_message' => "'{$body['message']}'",
                'ri_create_at' => "'{$date}'"
            );

            $db->Insert($arrayBody);
            $id = $db->execute_id();

            $asunto = 'Formulario Certificar Numero ' . $id;

            $db = new Entity('ri_parameters');
            $db->select('ri_value as value')
            ->where('ri_name = "Certificados_contacto" AND ri_status = 2');
            $sth = $db->execute();
            $email = $sth->fetch(PDO::FETCH_OBJ);

            $template = CrearHTML::Html($body, $asunto, 'Certificar');

            if (empty($template)) {
                return array( 'template' => 'Template error' );
            } else {
                if (SendMail::EriiarCorreo($asunto, $template, $email)) {
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