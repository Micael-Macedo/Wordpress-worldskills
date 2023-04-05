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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alatechmachines' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'V<J>Mw!%<Uz%a>P[>& [dOkBbT( :9fP 6]P|88`T{l:pLeDfnt.Vh&k;tv&dFKY' );
define( 'SECURE_AUTH_KEY',  'cy1P<j!fYnIz~l!34J2-UA+;_50)q@v:,}3X]tI}0J!#h~yt%veJ<}gbqWG1 `>h' );
define( 'LOGGED_IN_KEY',    's#7,>/uCoygb1)33Dv}x$k()}fSCSac.SM<_y=#8{4tmZkY)Wy]jhJn/^lUK:P*h' );
define( 'NONCE_KEY',        'y]pz:X^;Z[^+~m:M[L-#X+7S%oM $)AL6#Jj0Z)(y8*=-pRH.GxInUTUEBh:d:D#' );
define( 'AUTH_SALT',        '2Lcvs)b,>E)vP$ 21A*%9b9K~zRaH/bs3$4V%3KeRu|;r[hQ4n|-Z;>FrZwKOgAs' );
define( 'SECURE_AUTH_SALT', 'C=|->j$wDjQOuK/BLBMM/6J@?+F%VLhqev`mmY|_ktq_PW;VStw5MPg318:4Vulf' );
define( 'LOGGED_IN_SALT',   '#:qoH)/Fu(OI3}rL(vm )O#+EW)V[kw%@S+BD0-YD/6.{ubxDQFd(E_b. f,a+ M' );
define( 'NONCE_SALT',       'lEWgsCL_<+#ZA=67[y^2SQd/lTxp74.~H9rxbF~}YVR)S|w:oZ{hO@Z8dp5g]b:f' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
