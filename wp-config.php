<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'banco1site' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6-]|rh2E|2phuso.Dd!h},R.jloU7BBkSqyw=&>ZkR;(&pM9[Yktc}1pm[BAgit)' );
define( 'SECURE_AUTH_KEY',  '{[@O%{d2LUV(oS!KI)WJm[*WrfKe=9R.P6<JCkY~RE~_;##!7Ejir-X38Sg@S2vP' );
define( 'LOGGED_IN_KEY',    '_IkmAX#bp+e`7-jH!>k3M QWVVtvk0o74kY3*m._/Xu9/ge|HLL^XV7x8;9d9z`C' );
define( 'NONCE_KEY',        '|2}IEVV*-tda=%>XpC4aV@:-!RXFL.p/Am6Y6/A[!ocSxl]M&W;eRqe(*~!&Y1Un' );
define( 'AUTH_SALT',        '0.ko.>8nb={O6$f):Fiq4A/0 [7k!m_= 9z`<UbZpCYQ&$~>to%X=It94!n+F{-@' );
define( 'SECURE_AUTH_SALT', '3? M44v[Z9@0djH(2e X}DCb3T:7[5p6@i-@u#z64gWZCh4riP5-os%5~E@JD+px' );
define( 'LOGGED_IN_SALT',   '{T(]2|N}wv0T{{:Yfq@&~ `sL[$(1aCHoqStK[QL+!cuoMHdjmUr<Q*q)$6^p_4n' );
define( 'NONCE_SALT',       '>L;{FoaC6M|{m]):vU.^&kmT5pV#R*j8|eF#L3e(@1NJ/nRUSPxAkXo?O?IhQ]< ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
