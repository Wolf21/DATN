<?php

if (!function_exists('iniGetItem')) {
    /**
     * Get ini Item
     *
     * @param string $section
     * @param string $itemcd
     * @param boolean $global
     * @return array(id, 名前);
     */
    function iniGetItem($section = '', $itemcd = '', $global = false)
    {
        $_iniArray = null;
        $_iniSectionArray = null;

        // 読み込まれてなければ取得
        if (is_null($_iniArray)) {
            // 項目定数ファイル取得
            $inifile = app_path() . '/Ini/items.ini';
            // 定数情報取得
            $_iniArray = parse_ini_file($inifile, true);
        }

        // 指定項目取得
        if (array_key_exists($section, $_iniArray)) {
            // global指示があれば返却
            if ($global) {
                $resultArray = $_iniArray['global'] + $_iniArray[$section];
            } else {
                $resultArray = $_iniArray[$section];
            }

            //項目コードが指示されている場合、その対象項目を返す
            if ($itemcd !== '') {
                // キー存在確認
                if (array_key_exists($itemcd, $resultArray)) {
                    // 戻り値変更
                    $result = $resultArray[$itemcd];
                } else {
                    $result = '';
                }
            } else {
                $result = $resultArray;
            }
        } else {
            $result = '';
        }

        return $result;
    }
}

/**
 * Get mesage
 *
 * @param string $code
 * @param string $params
 *
 * @return string $result
 */
if (!function_exists('iniGetMessage')) {

    function iniGetMessage($code = '', $params = null)
    {
        $msgfile = app_path() . '/Ini/messages.ini';
        $message = parse_ini_file($msgfile);

        // メッセージ文言取得
        if (array_key_exists($code, $message)) {
            $msg = $message[$code];
            $result = is_null($params) ? $msg : vsprintf($msg, $params);
        } else {
            $result = '';
        }

        return $result;
    }
}
