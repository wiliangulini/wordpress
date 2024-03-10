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
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '#Naotemsenha23#' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'A1?8)4wV@c=M25jQI6mn-5`9RVcc4L!um}[taVkX!r}U:y?rpDu8*tbd(5MM`=Ky' );
define( 'SECURE_AUTH_KEY',  '@I8%.}TV{I M*==K+{/%-[4~1fAU=56A fg|s$=h3g|Xl_wN3{0s*b1s,ArPQY75' );
define( 'LOGGED_IN_KEY',    'i=3nywCo$^mtdkYYdy|RtU9|!^$fSTA{}%IFVja`6I}YQ#=&UxLHxka4&_x8@#X=' );
define( 'NONCE_KEY',        'Ud[t?=HNr{*?>k#Tm=c0U.~*pz6R3$-^/[ODC41O*;G>nAxM$#Xkl&]P4si3A~#_' );
define( 'AUTH_SALT',        'Q>FC5uN:0>2(x16}NkNOOoG*Bv]rm37WWZ)N~fL}MQ RbF8n[Ud`Qnx|7i;/)D*4' );
define( 'SECURE_AUTH_SALT', 'EkZP?@t.lN1eCeC2OmANR&wS4h*bs78m*Orj~7VF6bXp[?UjV^L)?p:>0c!%IW~b' );
define( 'LOGGED_IN_SALT',   'E}%gF%[]?Mo@1o,R5p@OvWxey/o1vjBNQ*Oas6ZnkqbwfYRvilmZnq!DNY4(}FFQ' );
define( 'NONCE_SALT',       '8},E%+]CA0FzdN2oAIjV%42iel$cFTk[CtA80Yd$QY1jXI/H17!&n/xb-1;0Sx:?' );

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
