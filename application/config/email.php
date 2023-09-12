$config['protocol'] = 'smtp'; // Email protocol (SMTP recommended)

// SMTP Server Settings
$config['smtp_host'] = 'smtp-relay.brevo.com'; // SMTP server address
$config['smtp_port'] = 587; // SMTP port (typically 587 for TLS, 465 for SSL)
$config['smtp_user'] = 'jakartasatucoba@gmail.com'; // Your email address
$config['smtp_pass'] = 'MJ4AntdE9WhfZc87'; // Your email password

// TLS (Transport Layer Security) or SSL (Secure Sockets Layer)
$config['smtp_crypto'] = 'tls'; // Options: 'tls', 'ssl'

// Email Sender Information
$config['charset'] = 'utf-8'; // Character set (UTF-8 recommended)
$config['mailtype'] = 'html'; // Email format: 'html' or 'text'
$config['newline'] = "\r\n"; // Newline character (use "\r\n" for most servers)

// Default "from" email and name
$config['smtp_user'] = 'jakartasatucoba@gmail.com'; // Your email address
$config['smtp_user'] = 'Jakarta Satu'; // Your name

// Additional email settings (if needed)
// $config['crlf'] = "\r\n";
// $config['newline'] = "\r\n";
// $config['wordwrap'] = TRUE;

// Enable SMTP debugging for troubleshooting (optional)
// $config['smtp_debug'] = 2; // 0 (off), 1 (client messages), 2 (client and server messages)

// Enable SMTP authentication (if required by your email provider)
$config['smtp_auth'] = true;
