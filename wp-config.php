<?php
/**
 * WordPress���������ļ���
 *
 * ����ļ�����װ���������Զ�����wp-config.php�����ļ���
 * �����Բ�ʹ����վ������Ҫ�ֶ���������ļ���
 * ��������Ϊ��wp-config.php����Ȼ�����������Ϣ��
 *
 * ���ļ�������������ѡ�
 *
 * * MySQL����
 * * ��Կ
 * * ���ݿ����ǰ׺
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL ���� - ������Ϣ����������ʹ�õ����� ** //
/** WordPress���ݿ������ */
define('DB_NAME', 'wordpress');

/** MySQL���ݿ��û��� */
define('DB_USER', 'hyoukana');

/** MySQL���ݿ����� */
define('DB_PASSWORD', 'lhq7474174');

/** MySQL���� */
define('DB_HOST', 'localhost');

/** �������ݱ�ʱĬ�ϵ����ֱ��� */
define('DB_CHARSET', 'utf8mb4');

/** ���ݿ��������͡��粻ȷ��������� */
define('DB_COLLATE', '');

/**#@+
 * �����֤��Կ���Ρ�
 *
 * �޸�Ϊ�����һ�޶����ִ���
 * ����ֱ�ӷ���{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org��Կ���ɷ���}
 * �κ��޸Ķ��ᵼ������cookiesʧЧ�������û����������µ�¼��
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TO=]dK|H$@+:{5p0;kFBALA=*FOW<.-!P:+|,YTnw</^Jh:B^2Uwuzqt9h4DU4@*');
define('SECURE_AUTH_KEY',  'BUdphUye@SVbw[>Z(7%.*&/}r0c%juo)u3ZU{o&zGWhUPWUA48Tn,wo%v([vRSio');
define('LOGGED_IN_KEY',    '3BGVUl^!Hl`)RBA*t{zK3,m~p8B/#!Sr.HeMOO;XZ@iB/lI% ;E29 Whad61F)LT');
define('NONCE_KEY',        '-2}w+SwoR>Sp}%GDZBg*?C8sBlI4->^>K3~]}qos~|Djh8{c~KO9^X({/4ay-c>#');
define('AUTH_SALT',        'lz`mZC4SAU|$h[n wg6JyP.@nIH.^S?Ls<Sk@]#Yu(S%eRp@EmL+KX3Ja|WN9gF9');
define('SECURE_AUTH_SALT', '$[x:_5CHq+7_bFj!Z5uVoS`n}j;( ssU8:DLy`_kF_M85;exvlT2$L=le8v=(7&z');
define('LOGGED_IN_SALT',   'YV<Mxv8WHR$.Us2ey6F8k.~?^/sHJxA(fw_lcB5;-F*D{fRAaWZ^NpnS31.?]Dml');
define('NONCE_SALT',       'pXIloP =:VWt:}$p H y(73!SXG}W{`TOU5>|C+oXmEBU]6r&CWj*~9csF>@{*1@');

/**#@-*/

/**
 * WordPress���ݱ�ǰ׺��
 *
 * ���������ͬһ���ݿ��ڰ�װ���WordPress��������Ϊÿ��WordPress����
 * ��ͬ�����ݱ�ǰ׺��ǰ׺��ֻ��Ϊ���֡���ĸ���»��ߡ�
 */
$table_prefix  = 'wp_';

/**
 * ������ר�ã�WordPress����ģʽ��
 *
 * �����ֵ��Ϊtrue��WordPress����ʾ�������ڿ�������ʾ��
 * ǿ�ҽ������������ڿ�������������WP_DEBUG��
 *
 * Ҫ��ȡ���������ڵ��Ե���Ϣ�������Codex��
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN���ػ����ã�����ICP��������ʾ
 *
 * �������á��������޸ġ�
 * ������ã����Ƴ���ע�͵����С�
 */
define('WP_ZH_CN_ICP_NUM', true);

/* ���ˣ��벻Ҫ�ټ����༭���뱣�汾�ļ���ʹ����죡 */

/** WordPressĿ¼�ľ���·���� */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** ����WordPress�����Ͱ����ļ��� */
require_once(ABSPATH . 'wp-settings.php');
