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
define( 'DB_NAME', 'wp-origamid' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'mira' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'jvmir757' );

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
define( 'AUTH_KEY',         'DZ:VIq*KGlpS[~]CB61Afu~HRQyj/K+!tW[)XD?,b2yllJ#[`3RAcH2 1! =VC&?' );
define( 'SECURE_AUTH_KEY',  'Dw%3VcB4DCX2lU~[*PXP]1pA,j%]B:aS,64Kh*_*qM`#?RzYPfUv?}/?J9uN9WU(' );
define( 'LOGGED_IN_KEY',    '4?6MR}uX/VPy~oS#i=S6>m|!.*2kz%#tWU3@:f8FBQ]w[IbO}cL]jL$NRhMTW=mP' );
define( 'NONCE_KEY',        '>v5{K-=%a#?xxU-&=K|2OK(i}pfD:W3Mk2/UR,VEf:H.R2u=fy%^riV(*L7>N/th' );
define( 'AUTH_SALT',        'K:sLTn*L.t~qKQ8w z$QGqIH@Ss.D%K~vAIwikFu|j`(hQnM66`xoevKMQ8w7_xH' );
define( 'SECURE_AUTH_SALT', '1E|vj@*bnwG.Wj{k?^)G,yPDe@oc$a<Je,.fm7zc2Mg^e&OIK*[Cd)LcKabSH{p]' );
define( 'LOGGED_IN_SALT',   'RC/^U~{iU7JUTf{:^|R<qH<,}{urT4|Oe?ON:0]ZPW{+#HadFbQ$w>:6PC}dOzl9' );
define( 'NONCE_SALT',       'p{hT9~xy2CL_MxgOY%:G__KN *xBbJ9Fs:He}UyXP:S`S^WT%[Cazi6_D$s]iWMg' );

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
