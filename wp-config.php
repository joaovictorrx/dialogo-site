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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_dialogo_site');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'Zmc:H}8T11^dT5-aXqaziL(/LBxfG^,~Df9zqh{e<cygTRIa8gqq(gnhl+g-?Xbl');
define('SECURE_AUTH_KEY',  '/rhD&U}tp4gPj(>g1r29$UtG<[0,zZik.LKl`Is.XEF:cX{!,A]$rK[G,aa;Gp~>');
define('LOGGED_IN_KEY',    'GChXnHMeC?ZMk_Nh/b9).B]e(Y/YylSFt7q%W;bU*H6pIN-X4!7^= !gw^A%p&#*');
define('NONCE_KEY',        'w)J+oiR:Rf .oq&Lq4{={NJogz*~@)Ea5b(cCeXr3QM^LxSj(XR19D@}]NL04*0S');
define('AUTH_SALT',        '%L>&Na@m<D`,Tlt(2#V1OAp,{2%K=PG1}p+D3]9zF~V|AE>fi}OS*SS`sNZ*f9Sf');
define('SECURE_AUTH_SALT', '!P9t[`I&*Uh2TOYM|h0#A*T{-k/uJ,(>*=!jdLwf*(2O1vE|soP<>/vCTmv?_%Q3');
define('LOGGED_IN_SALT',   'O;df7cKMc6$O3kzA(4{S*W|A_QUJJd/yHna%O`G5%$m>_a]w{WP(.8P8EU%PwYo!');
define('NONCE_SALT',       '>?^dzdJ]No[;[Ohg9[7&*O(J$yXAz<_;n/_#a_7w-*#DXB7bjBFhl~@d@tD3l{KO');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
