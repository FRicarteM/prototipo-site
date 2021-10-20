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
define( 'DB_NAME', 'union_solution_db' );

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
define( 'AUTH_KEY',         'lYkKrLNdmu*Dc2a+LUh11^VF%S&q.!QI?W{;U+j-^iwGvN6/RD#G{02942)jMtm)' );
define( 'SECURE_AUTH_KEY',  'VNm=#@6[BPP,f?}RxG}.S{@hec3x_$}CaFSOyl],{ ]bQ*<qFO,2[084<#%x8z>J' );
define( 'LOGGED_IN_KEY',    ']m^.]bBBGxcIz?* p:P!XyT,LT5(Mj6F`/dn knAAvN~,?thDa7y@DEn09%SBw?F' );
define( 'NONCE_KEY',        '-h;F_2[t=*xbhb;Fb-0=_.37{s5$9ZQ+>>$$bew[1L<^}?;5v=gZjP3}y2O!=26H' );
define( 'AUTH_SALT',        '5!3SjY8(iFA:1m Uws-81-CN{zwu5JI[ DRZa#T]$l4Nx}9[)]j6Q=>@_aJ!|E9D' );
define( 'SECURE_AUTH_SALT', '!@sRyisHyC>wW,X6T:]Ah?i+[7V9XY*:mt#&b29:YVci?YqCYJUn$1iz{N<ZtmiP' );
define( 'LOGGED_IN_SALT',   '6wY@n-x/ nSRd% ~4|i~wAu=ig0I0/IVc@Y4l*r6P<33q)znSSzg^ek{-R%d{g3%' );
define( 'NONCE_SALT',       '6sM,2`}LRE8-`E0,jrK~h4+dQm~>AS5:nb!c;;<*z5@P9-L%.e)W)S@/?N5U)un;' );

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
