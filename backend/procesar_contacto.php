<?php
// Incluir el archivo de configuración
require_once 'config.php';

// Incluir archivos de PHPMailer
require_once __DIR__ . '/phpmailer/PHPMailer-6.9.1/src/Exception.php';
require_once __DIR__ . '/phpmailer/PHPMailer-6.9.1/src/PHPMailer.php';
require_once __DIR__ . '/phpmailer/PHPMailer-6.9.1/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Inicializar respuesta
$response = array(
    'success' => false,
    'message' => ''
);

// Verificar si la solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtener y limpiar los datos del formulario
    $nombre = isset($_POST['nombre']) ? $conn->real_escape_string(trim($_POST['nombre'])) : '';
    $email = isset($_POST['email']) ? $conn->real_escape_string(trim($_POST['email'])) : '';
    $telefono = isset($_POST['telefono']) ? $conn->real_escape_string(trim($_POST['telefono'])) : '';
    $mensaje = isset($_POST['mensaje']) ? $conn->real_escape_string(trim($_POST['mensaje'])) : '';
    
    // Validar campos requeridos
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        $response['message'] = 'Por favor, complete todos los campos requeridos.';
    } 
    // Validar email
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Por favor, ingrese un correo electrónico válido.';
    } 
    // Todo en orden, guardar en la base de datos
    else {
        $sql = "INSERT INTO contactos (nombre, email, telefono, mensaje) 
                VALUES ('$nombre', '$email', '$telefono', '$mensaje')";
        
        if ($conn->query($sql) === TRUE) {
            $response['success'] = true;
            $response['message'] = '¡Gracias! Tu mensaje ha sido enviado correctamente.';
            
            // Configurar PHPMailer
            $mail = new PHPMailer(true);
            
            try {
                // Configuración del servidor
                $mail->SMTPDebug = 0;     // Activa el modo debug: 0 = off, 1 = mensajes cliente, 2 = cliente y servidor
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';    // Servidor SMTP de Gmail
                $mail->SMTPAuth   = true;
                $mail->Username   = 'juanitaherrera846@gmail.com'; // REEMPLAZAR con tu email de Gmail
                $mail->Password   = 'bkgs ogqs pzvj rdym'; // REEMPLAZAR con tu contraseña de aplicación de Gmail
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;
                
                // Configuración de destinatarios
                $mail->setFrom('formulario_contacto@alphacoder.com', $nombre); // Cambio del remitente para evitar que aparezca "yo"
                
                // Lista de destinatarios
                $destinatarios = [
                    'juanitaherrera846@gmail.com',
                    'guarinromerojuandavid@gmail.com',
                    'juandavidguarinromero@gmail.com',
                    // 'cuarto@correo.com'
                ];
                
                // Agregar todos los destinatarios
                foreach ($destinatarios as $destinatario) {
                    $mail->addAddress($destinatario);
                }
                
                $mail->addReplyTo($email, $nombre);
                
                // Configuración del contenido del email
                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';
                $mail->Subject = 'Nuevo mensaje de contacto | ' . $nombre . ' | Enviado desde Alpha Coders';
                
                // Cuerpo del email en formato HTML moderno y atractivo
                $email_body_html = "
                <!DOCTYPE html>
                <html lang='es'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <style>
                        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');
                        
                        body { 
                            font-family: 'Montserrat', sans-serif;
                            line-height: 1.6;
                            color: #1a1a1a;
                            margin: 0;
                            padding: 0;
                            background-color: #f5f5f5;
                        }
                        .container {
                            max-width: 600px;
                            margin: 20px auto;
                            background: #ffffff;
                            border-radius: 16px;
                            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
                            overflow: hidden;
                        }
                        .header {
                            background: linear-gradient(135deg, #ff6295 0%, #ff8a6c 100%);
                            padding: 40px 20px;
                            text-align: center;
                            color: white;
                            position: relative;
                        }
                        .header::after {
                            content: '';
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            right: 0;
                            height: 6px;
                            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.7), transparent);
                        }
                        .header h1 {
                            margin: 0;
                            font-size: 32px;
                            font-weight: 700;
                            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
                            letter-spacing: -0.5px;
                        }
                        .content {
                            padding: 40px;
                        }
                        .info {
                            margin-bottom: 30px;
                            background: #f8f9fa;
                            padding: 25px;
                            border-radius: 12px;
                            border: 1px solid #e9ecef;
                        }
                        .info p {
                            margin: 12px 0;
                            display: flex;
                            align-items: center;
                            font-size: 15px;
                        }
                        .info strong {
                            font-weight: 600;
                            color: #2d3436;
                            min-width: 130px;
                        }
                        .info a {
                            color: #ff6295;
                            text-decoration: none;
                            transition: all 0.3s ease;
                            font-weight: 500;
                        }
                        .info a:hover {
                            color: #ff8a6c;
                            text-decoration: underline;
                        }
                        .message {
                            background: #fff;
                            padding: 25px;
                            border-radius: 12px;
                            border-left: 5px solid #ff6295;
                            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
                        }
                        .message h3 {
                            color: #1a1a1a;
                            margin-top: 0;
                            font-size: 20px;
                            font-weight: 600;
                            margin-bottom: 15px;
                        }
                        .message p {
                            font-size: 15px;
                            line-height: 1.7;
                            color: #2d3436;
                        }
                        .footer {
                            text-align: center;
                            padding: 25px;
                            font-size: 14px;
                            color: #636e72;
                            background: #f8f9fa;
                            border-top: 1px solid #e9ecef;
                        }
                        .footer p {
                            margin: 0;
                            font-weight: 500;
                        }
                        @media only screen and (max-width: 600px) {
                            .container {
                                margin: 10px;
                                border-radius: 12px;
                            }
                            .content {
                                padding: 25px;
                            }
                            .header h1 {
                                font-size: 28px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <div class='header'>
                            <h1>✨ Nuevo Mensaje de Contacto ✨</h1>
                        </div>
                        <div class='content'>
                            <div class='info'>
                                <p><strong>👤 Nombre:</strong> $nombre</p>
                                <p><strong>📧 Email:</strong> <a href='mailto:$email'>$email</a></p>
                                <p><strong>📱 Teléfono:</strong> $telefono</p>
                            </div>
                            <div class='message'>
                                <h3>💌 Mensaje:</h3>
                                <p>" . nl2br(htmlspecialchars($mensaje)) . "</p>
                            </div>
                        </div>
                        <div class='footer'>
                            <p>🌟 Mensaje enviado desde el formulario de contacto de Alpha Coders</p>
                        </div>
                    </div>
                </body>
                </html>";
                
                // Versión texto plano como alternativa
                $email_body_text = "NUEVO MENSAJE DE CONTACTO\n\n";
                $email_body_text .= "Nombre: $nombre\n";
                $email_body_text .= "Email: $email\n";
                $email_body_text .= "Teléfono: $telefono\n\n";
                $email_body_text .= "MENSAJE:\n$mensaje\n\n";
                
                $mail->Body    = $email_body_html;
                $mail->AltBody = $email_body_text;
                
                // Enviar el email
                $mail->send();
                $response['message'] .= ' También hemos enviado una copia a tu correo.';
                
            } catch (Exception $e) {
                // No cambiar el estado de éxito, ya que al menos se guardó en la BD
                $response['message'] .= ' Sin embargo, no pudimos enviar el email de notificación: ' . $mail->ErrorInfo;
            }
            
        } else {
            $response['message'] = 'Lo sentimos, ha ocurrido un error. Por favor, intente nuevamente.';
        }
    }
}

// Devolver la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);

// Cerrar la conexión
$conn->close();
?> 