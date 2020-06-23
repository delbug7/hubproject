<?php

namespace Install;
defined('_HUBACCES') or header('Location: /index.php');
class Etape{

    public $etape;
    public $language;

    public function __construct(){
        $this->etape = 1;
        $this->language = new Language;
    }

    public function setEtape($etapePa){
        $this->etape = $etapePa;
    }

    public function getEtape(){
        return $this->etape;
    }

    public function etape1($form){
        $text = $form->getTitle($this->language->getUserLanguage()["TXT_CONFIG_DB"]) . $form->getLabel($this->language->getUserLanguage()["TXT_NAME_HOST"], 'sql_host') . $form->getInput('text', 'sql_host', 'sql_host', $this->language->getUserLanguage()["TXT_PLACEHOLDER_HOST"], null, null, true);
        $text .= '<br><br>' . $form->getLabel($this->language->getUserLanguage()["TXT_NAME_USER"], 'sql_user') . $form->getInput('text', 'sql_user', 'sql_user', $this->language->getUserLanguage()["TXT_PLACEHOLDER_USER"], null, null, true) . '<br><br>';
        $text .= $form->getLabel($this->language->getUserLanguage()["TXT_NAME_PASS"], 'sql_pass') . $form->getInput('password', 'sql_pass', 'sql_pass', $this->language->getUserLanguage()["TXT_PLACEHOLDER_PASS"], null, null, false) . '<br><br>';
        $text .= $form->getLabel($this->language->getUserLanguage()["TXT_NAME_DB"], 'sql_bdd') . $form->getInput('text', 'sql_bdd', 'sql_bdd', $this->language->getUserLanguage()["TXT_PLACEHOLDER_DB"], null, null, true) . '<br><br>';
        $text .= $form->getInput('submit', null, null, null, null, 'Submit', false);
        return $text;
    }

    public function etape2($form){
        $text = $form->getTitle($this->language->getUserLanguage()["TXT_CONFIG_SITE"]);
        $text .= $form->getLabel($this->language->getUserLanguage()["TXT_NAME_SITE"], 'site_name') . $form->getInput('text', 'site_name', 'site_name', $this->language->getUserLanguage()["TXT_PLACEHOLDER_SITE"], null, null, true);
        $text .= '<br><br>' . $form->getLabel($this->language->getUserLanguage()["TXT_NAME_DESC"], 'site_desc') . $form->getInput('text', 'site_desc', 'site_desc', $this->language->getUserLanguage()["TXT_PLACEHOLDER_DESC"], null, null, false) . '<br><br>';
        $text .= $form->getLabel($this->language->getUserLanguage()["TXT_NAME_COLOR"], 'site_color') . $form->getInput('color', 'site_color', 'site_color', null, null, "#FFFF3C", true) . '<br><br><br><br>';

        $text .= $form->getTitle($this->language->getUserLanguage()["TXT_CONFIG_ROOT"]);
        $text .= $form->getLabel($this->language->getUserLanguage()["TXT_NAME_EMAIL"], 'site_email') . $form->getInput('email', 'site_email', 'site_email', $this->language->getUserLanguage()["TXT_PLACEHOLDER_EMAIL"], null, null, true) . '<br><br>';
        $text .= $form->getLabel($this->language->getUserLanguage()["TXT_NAME_PSEUDO"], 'site_pseudo') . $form->getInput('text', 'site_pseudo', 'site_pseudo', $this->language->getUserLanguage()["TXT_PLACEHOLDER_PSEUDO"], null, null, true) . '<br><br>';
        $text .= $form->getLabel($this->language->getUserLanguage()["TXT_NAME_PASSWORD"], 'site_password') . $form->getInput('password', 'site_password', 'site_password', $this->language->getUserLanguage()["TXT_PLACEHOLDER_PASSWORD"], null, null, true) . '<br><br>';
        $text .= $form->getLabel($this->language->getUserLanguage()["TXT_NAME_PASSWORD_V"], 'site_password_v') . $form->getInput('password', 'site_password_v', 'site_password_v', $this->language->getUserLanguage()["TXT_PLACEHOLDER_PASSWORD_V"], null, null, true) . '<br><br>';
        $text .= $form->getInput('submit', null, null, null, null, 'Submit', false);
        return $text;
    }

    public function etape3($form){
        if(file_exists(HUBPATH_TMP . '/tmp.php')) {
            require_once HUBPATH_TMP . '/tmp.php';

            $text = $form->getTitle($this->language->getUserLanguage()["TXT_CONFIG_SITE"]);
            $text .= '<table class="rwd-table">';
            $text .= '<tr><td>' .$this->language->getUserLanguage()["TXT_TB_SITE"]. '</td><td>' .\Config::$site_name. '</td></tr>';
            $text .= '<tr><td>' .$this->language->getUserLanguage()["TXT_TB_DESC"]. '</td><td>' .\Config::$site_desc. '</td></tr>';
            $text .= '<tr><td>' .$this->language->getUserLanguage()["TXT_TB_COLOR"]. '</td><td style="color: ' .\Config::$site_color. '">' .\Config::$site_color. '</td></tr>';
            $text .= '</table>';
            $text .= '<br><br><br><br>';

            $text .= $form->getTitle($this->language->getUserLanguage()["TXT_CONFIG_DB"]);
            $text .= '<table class="rwd-table">';
            $text .= '<tr><td>' .$this->language->getUserLanguage()["TXT_TB_HOST"]. '</td><td>' .\Config::$sql_host. '</td></tr>';
            $text .= '<tr><td>' .$this->language->getUserLanguage()["TXT_TB_USER"]. '</td><td>' .\Config::$sql_user. '</td></tr>';
            $text .= '<tr><td>' .$this->language->getUserLanguage()["TXT_TB_PASS"]. '</td><td>' .\Config::$sql_pass. '</td></tr>';
            $text .= '<tr><td>' .$this->language->getUserLanguage()["TXT_TB_DB"]. '</td><td>' .\Config::$sql_bdd. '</td></tr>';
            $text .= '</table>';

            $text .= $form->getTitle($this->language->getUserLanguage()["TXT_CONFIG_ROOT"]);
            $text .= '<table class="rwd-table">';
            $text .= '<tr><td>' .$this->language->getUserLanguage()["TXT_TB_EMAIL"]. '</td><td>' .\Config::$site_email. '</td></tr>';
            $text .= '<tr><td>' .$this->language->getUserLanguage()["TXT_TB_PSEUDO"]. '</td><td>' .\Config::$site_pseudo. '</td></tr>';
            $text .= '<tr><td>' .$this->language->getUserLanguage()["TXT_TB_PASSWORD"]. '</td><td>' .\Config::$site_password. '</td></tr>';
            $text .= '</table>';
            $text .= '<br>';
            $text .= '<table><tr>';
            $text .= '<td style="width: 500px">' .$form->getInput('submit', null, null, null, null, 'Recommencer', false, 'resetOk()'). '</td>';
            $text .= '<td style="width: 500px">' .$form->getInput('submit', null, null, null, null, 'Valider', false, 'submitOk()'). '</td>';
            $text .= '</tr></table>';

            return $text;
        }else{
            return 'error';
        }
    }

    /**
     * @param $form
     */
    public function etape4($form){
        if(file_exists(HUBPATH_TMP . '/tmp.php')){
            $file = Fopen::getFile(HUBPATH_TMP . '/tmp.php');
            $text = '';
            foreach ($file as $v){
                $text .= $v. '<br>';
            }
            return $text;
        }
        return false;
    }
}