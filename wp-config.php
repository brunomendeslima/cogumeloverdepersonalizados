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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'cogumeloverde');

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
define('AUTH_KEY',         '!CA{I$S.w;jbBZ#0D+-}K+(&.{/,rzW$$AAH]_?U):?qb5sPZ&R&,9!tH}-8:=w#');
define('SECURE_AUTH_KEY',  ']?[F2er}x,LKSW~bsFTJNzeC@ilH>i^p}YKfW1Zoi}i-pwH#_J>|DoF@YPT;r;^^');
define('LOGGED_IN_KEY',    '!X^$( ,(i[^J|bf%`gq=Qifgi;4cxBbcX:LyxLyqxT/(jr8Wc-fzMrHa^C0Rks{X');
define('NONCE_KEY',        '$Z:AyLr IEqTbqNL=;hmsa6AC3w?d&W}gR=nhmoXoy9WxcN`GWHm9cQ2paBU2SKz');
define('AUTH_SALT',        'hO,_P-X)@0C+E?Ws^byD*;jHo/Go(CHV:&+&Ed5VPFla%0nO^$NG;$y7Y#$^;L3P');
define('SECURE_AUTH_SALT', '{iAUm}hsKPfju1dy|*&H#{7O@A=/*4}O~JOGQV%<.u`r?>o;O!(U8%R#_F]6]%)$');
define('LOGGED_IN_SALT',   'SD` 48e7ynURX|I$0.C8zPcES*pI05ccI=aQ!iW2XBgs8gu6iKefK:qIF8gkHYhM');
define('NONCE_SALT',       '|K>3+V<SD%>KN#kG~Z4UctX$n>cabB)(C]/{IX-TEh~-{}axSuX&.R#h#%Qa@|<9');

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

define('FS_METHOD', 'direct');