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
define( 'DB_NAME', 'hotel-fc-database' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '90A.WC/pIj$$K]6I|UJ|wmK68xpUhSNsDR/Cp0 fDQU[I8)TS`Sd7kmD>~i!DT%V' );
define( 'SECURE_AUTH_KEY',  'Jk`T 6P<OqO$)=7k{?}CS6F#Xg]0PH8)kcyYl2+=? rO|HCZV{~Fifl%G90@ATDC' );
define( 'LOGGED_IN_KEY',    'wx].>@uM/&)+GulkmpH)t>nFYw, 3wH@3U*WStgnK^i{a3,s7{ckto$~9L)>J&y,' );
define( 'NONCE_KEY',        '7u<vQ=`$*IbE@HNi?h6Kz!nH.i,4>6CB?%rxAkLm1v{D$8^hg6[&P|3|3Jj<8eBc' );
define( 'AUTH_SALT',        '8*+K--Y Iw Ek/W-???jM[p./o]A#w^gq-8Iy-0o7b-{uqWhAHktXK$XO[vp.#OX' );
define( 'SECURE_AUTH_SALT', '0+ecdxOMDd27&2*.OKrOP=[A)(}~%p=@/+,Ztovf= ]! v&=[8iO)LUV~ZwfwF4}' );
define( 'LOGGED_IN_SALT',   '(aZBSw^ g95Y;w#:K{@*#^3nbS2/]L+cG}JG*)n#gnVlQ)Ek#PbF0Qf= y{inn5]' );
define( 'NONCE_SALT',       ')$eVP^]f3(;[o@.@y W@Y|<3iz/l@4TiZT=Udoa>FF7vwk8<cH)FQ$BoGDnXMmJ6' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
