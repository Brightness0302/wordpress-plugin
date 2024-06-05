<?php
$client_name = get_option('xve_client_name');
$client_phone = get_option('xve_client_phone');
$client_email = get_option('xve_client_email');
$client_address = get_option('xve_client_address');
$client_city = get_option('xve_client_city');
$logo = get_option('xve_logo');
$primary_color = get_option('xve_primary_color', '#dc8100');
$accent_color = get_option('xve_accent_color', '#333333');
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo esc_html($client_name); ?> - Onder Constructie</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: <?php echo esc_html($accent_color); ?>;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 50px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: <?php echo esc_html($primary_color); ?>;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .contact-info {
            margin-top: 30px;
        }
        .contact-info p {
            font-size: 16px;
            margin: 5px 0;
        }
        .logo {
            max-width: 150px;
            margin: 20px auto;
        }
        .footer {
            margin-top: 40px;
            font-size: 14px;
            color: #777;
        }
        a {
            color: <?php echo esc_html($primary_color); ?>;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <?php if ($logo) : ?>
        <img src="<?php echo esc_url($logo); ?>" alt="Logo" class="logo">
    <?php endif; ?>
    <h1>We zijn binnenkort terug!</h1>
    <p>Onze website is momenteel in onderhoud. Probeer het later nog eens.</p>
    <p>&mdash; <?php echo esc_html($client_name); ?> Team</p>
    <div class="contact-info">
        <?php if ($client_phone) : ?>
            <p>Telefoon: <?php echo esc_html($client_phone); ?></p>
        <?php endif; ?>
        <?php if ($client_email) : ?>
            <p>E-mail: <?php echo esc_html($client_email); ?></p>
        <?php endif; ?>
        <?php if ($client_address) : ?>
            <p>Adres: <?php echo esc_html($client_address); ?></p>
        <?php endif; ?>
        <?php if ($client_city) : ?>
            <p>Gemeente: <?php echo esc_html($client_city); ?></p>
        <?php endif; ?>
    </div>
    <div class="footer">
        <p></p>
    </div>
</div>
</body>
</html>
