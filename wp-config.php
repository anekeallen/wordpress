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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpbanco' );

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
define( 'AUTH_KEY',         '{z#9TC!SJ`FFhmPCjwiwuE0}_o-g^!@*>}&HY,5O]o+=gZ}RKX/)1%cXp!F=F$%O' );
define( 'SECURE_AUTH_KEY',  'Z(g./ft[t.|3uiLP<dTj*SejND]=2~:a0h?y|<&|e,7H3nwju#:*FPI;F9J8.r8O' );
define( 'LOGGED_IN_KEY',    ':!w<aYgJwH.0ou|mT>.f2#d-Q5{8C#(t)1-lq!w6U4%SemF8Z@~a<mDn`E/qK8/F' );
define( 'NONCE_KEY',        '7?4%3ev(<i/[LoX|pq&gds?2Dol&m{wYVz9p5ZI^s4%wHvvo$:lw,/wqKf8H+<c6' );
define( 'AUTH_SALT',        'ZxwnU[tbYmyfZjY#m%!8oGe:9,/Emjc$ap<z^E%Li%kLNno9?MF?l-1HAlx12#tI' );
define( 'SECURE_AUTH_SALT', '[7|>e&K jPMfg7(pyIK^.?3mN4.DDm6+y6Gw`@OD%T!(cXtM}f7vIx5W#1nw~j82' );
define( 'LOGGED_IN_SALT',   'E _[)|6aOM?Ua:DNrx6+z_Q+xD^ZC!kyzx7ai!WB5PzS$+Rl> 9MMDq:rd`v97U}' );
define( 'NONCE_SALT',       'q^:|[A0z(#scPwfC6{M=Fmcb7RD(FSXZe<aRCKS00U,6 ubGxBkCL9JF!X0)OQ,h' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wpcrs_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
