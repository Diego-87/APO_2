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
define( 'DB_NAME', 'tec' );

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
define( 'AUTH_KEY',         '}Hm<RETGgFMVODkR`Af<Yxr,N!dOKuE)Ox>vbrTAR<P5ZRYz?S09#*9QSvCOj]T>' );
define( 'SECURE_AUTH_KEY',  'Z*7yN<*%~u N-W2,4}.yrS#Iv2At<2pXS+B11/0V_ qAQMr|:F6TgAF-pd@K7zXt' );
define( 'LOGGED_IN_KEY',    '@L2LTm@HPzabZzM1E6~+e}!F?^H(!6;u?@vd?0e9Wv1A1!=r6GSLf|JFe5xeZTX5' );
define( 'NONCE_KEY',        'w%5p=4jWs1=ELW9!>nM4j.W]9Nu g_Pbhts+#i 52W `{W<7OL:m;_Zi,_jmpQFf' );
define( 'AUTH_SALT',        '^|x)A-,q>^N6vL&4c+_}NM|g;SOi5`#1]N5OuQt5*tib@+qdXchgQJV-{(uu ^:i' );
define( 'SECURE_AUTH_SALT', '.7!n|bBE}=U7m/MyC[q:ARQ*iMF`]%K_xM<1*gqkxQ%D_6TeMMD(nD$bTm/15MGw' );
define( 'LOGGED_IN_SALT',   '=Vu_x%Kn[K`Zv{C<<5NBfvHt*+dL41?<Ju78Y0Ex}2vts;thT(6yjOX?1]M/V|Py' );
define( 'NONCE_SALT',       'r? ArFV`<Aq})$<#aoh5(:5#<7xs<[r1O`k1k= 92g{4mVmb Lbo?D^qy+cQaw1^' );

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
