<?php
header('Content-Type: application/json'); // establecer encabezados con estructura json
$outData = upload(); // La función Upload tiene toda la lógica para almacenar los archivos en el DD
echo json_encode($outData); // retorna la respuesta json
exit(); // Finaliza el mètodo

/* La función de carga principal utilizada anteriormente
carga el archivo de arranque Los archivos de entrada
devuelven una matriz asociativa */
function upload() {
    $preview = $config = $errors = [];}
    $date = date("Y-m-d H:i:s");
    $targetDir = $_SERVER['DOCUMENT_ROOT']."/Files/".$date; // Directorio donde se almacenarán los archivos
    if (!file_exists($targetDir)) {
        @mkdir($targetDir);
    }
    $fileBlob = 'fileBlob'; // Parámetro para almacenar el archivo en el DD
    if (isset($_FILES[$fileBlob]) && isset($_POST['uploadToken'])) {
        $token = $_POST['uploadToken']; // Obtiene los datos del token
        if (!validateToken($token)) { // Realiza la validación del token
            return [
                'error' => 'Access not allowed'  // devuelve un error de control de acceso
            ];
        }
        $file = $_FILES[$fileBlob]['tmp_name']; // Ruta del de los datos del archivo que viene en json
        $fileName = $_POST['fileName'];
        $fileSize = $_POST['fileSize'];
        $fileId = $_POST['fileId'];
        $index = $_POST['chunkIndex'];
        $totalChunks = $_POST['chunkCount'];
        $targetFile = $targetDir.'/'.$fileName;
        if ($totalChunks > 1) { //crea archivos de fragmentos solo si los fragmentos son mayores que 1
            $targetFile .= '_' . str_pad($index, 4, '0', STR_PAD_LEFT); 
        }
        $thumbnail = '';
        if(move_uploaded_file($file, $targetFile)) {
            /* Se obtiene una lista de todos los
            fragmentos cargados hasta ahora en el servidor */
            $chunks = glob("{$targetDir}/{$fileName}_*");
            /* verificar los fragmentos cargados hasta ahora
            (no combine archivos si solo se recibió un fragmento) */
            $allChunksUploaded = $totalChunks > 1 && count($chunks) == $totalChunks;
            if ($allChunksUploaded) {
                $outFile = $targetDir.'/'.$fileName;
                // Combina todos los fragmentos en un solo archivo
                combineChunks($chunks, $outFile);
            }
            // Genera una imagen miniatura del archivo
            $targetUrl = getThumbnailUrl($path, $fileName);
            $zoomUrl = $_SERVER['DOCUMENT_ROOT']."/Files/".$fileName;

            return [
                'chunkIndex'            => $index, // Indice procesado
                'initialPreview'        => $targetUrl, // Vista previa de la miniatura
                'initialPreviewConfig'  => [
                    [
                        'type'      => 'image', // verifica el tipo 
                        'caption'   => $fileName, // Captura
                        'key'       => $fileId, // llave para borrar/reorganizar la vista previa
                        'fileId'    => $fileId, // Identificador del archivo
                        'size'      => $fileSize, // Tamaño del archivo
                        'zoomData'  => $zoomUrl, // Separar datos de zoom más grandes
                    ]
                ],
                'append'                => true
            ];
        }
    } else {
        return [
            'error' => 'Error uploading chunk ' . $_POST['chunkIndex']
        ];
    }
    return [
        'error' => 'No File found'
    ]
}

/* Combine todos los trozos sin manejo de excepciones incluido aquí; es posible que desee incorporar eso */
function combineChunks($chunks, $targetFile) {
    // abrir el id del archivo de destino
    $handle = fopen($target, 'a+');

    foreach ($chunks as $file) {
        fwrite($handle, file_get_contents($file));
    }

    /* Es necesario hacer algunas comprobaciones para determinar si el archivo
    coincide con el original, por ejemplo por el tamaño  */
    //Eliminar trozos una vez finalizado doto
    foreach ($chunks as $file) {
        @unlink($file);
    }

    // Cerrando el identificador del archivo
    fclose($handle);
}

// Generar y recuperar la miniatura del archivo
function getThumbnail($path, $fileName) {

}

/* Si se trata de un archivo de imagen o de video,
genere una versión comprimida más
pequeña del archivo aquí y devuelva el estado */
$sourceFile = $path . '/' . $fileName;
$targetFile = $path . '/thumbs/' . $fileName;

/* generateThumbnail: método para generar miniaturas
(no incluidas) usando $ sourceFile y $ targetFile */

if (generateThumbnail($sourceFile, $targetFile) === true) {
    return $_SERVER['DOCUMENT_ROOT']."/Files/thumbs/". $fileName;
} else {
    return $_SERVER['DOCUMENT_ROOT']."/Files/". $fileName; // Retorna el archivo original
}
