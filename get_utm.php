<?php
    function get_utm()
    {
        $out = array();
        $keys = array('utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term');
        foreach ($keys as $row) {
            if (!empty($_GET[$row])) {
                $value = strval($_GET[$row]);
                $value = stripslashes($value);
                $value = htmlspecialchars_decode($value, ENT_QUOTES);
                $value = strip_tags($value);
                $value = htmlspecialchars($value, ENT_QUOTES);
                $out[] = '<input type="hidden" name="' . $row . '" value="' . $value . '">';
            }
        }

        return implode("\r\n", $out);
    }


    ?>