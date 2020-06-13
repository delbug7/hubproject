<?php

namespace Install;
defined('_HUBACCES') or header('Location: /index.php');
class Form{

    public function getTitle($titlePa){
        return '<h2>' .$titlePa. '</h2>';
    }

    public function getInput($typePa, $namePa, $idPa, $placeholderPa, $classPa, $valuePa, $isRequired, $onclickPa = null){
        $input = '<input type="' .$typePa. '" ';
        if($namePa !=null){
            $input .= 'name = "' .$namePa. '" ';
        }
        if($idPa != null){
            $input .= 'id = "' .$idPa. '" ';
        }
        if($placeholderPa != null){
            $input .= 'placeholder = "' .$placeholderPa. '" ';
        }
        if($classPa != null){
            $input .= 'class = "' .$classPa. '" ';
        }
        if($valuePa != null){
            $input .= 'value = "' .$valuePa. '" ';
        }
        if($onclickPa != null){
            $input .= 'onclick="' .$onclickPa. '"';
        }
        if($isRequired){
            $input .= 'required ';
        }
        $input .= 'autocomplet="off"/>';
        return $input;
    }

    public function getLabel($labelPa, $forPa = null){
        $text = '<label ';
        if(!is_null($forPa)){
            $text .= 'for="' . $forPa . '" ';
        }
        $text .= '>' .$labelPa. '</label>';
        return $text;
    }

    public function radioButtonChoice($legendPa, $nameChoicePa){
        $num = 1;
        $numargs = func_num_args();
        $field = '<fieldset class="radio-inline">
                    <legend>' .$legendPa. '</legend>';
        for($i = 2; $i <= $numargs-1; $i++){
            $field .= '<input type="radio" name="' .$nameChoicePa. '" id="' .$nameChoicePa. '_radio-choice-' .$num. '" value="' .func_get_arg($i). '" />
                        <label for="' .$nameChoicePa. '_radio-choice-' .$num. '">
                        <span></span>' .func_get_arg($i). '</label>';
            $num++;
        }
        $field .= '</fieldset>';
        return $field;
    }

    public function selectDropdownChoice($labelPa, $nameChoicePa){
        $numargs = func_num_args();
        $field = '<label for="select-choice">' .$labelPa. '</label>
                    <div class="select">
                        <select name="select_dropdown_' .$nameChoicePa. '" id="select_dropdown_' .$nameChoicePa. '">';
        for($i = 2; $i <= $numargs-1; $i++){
            $field .= '<option value="' .str_replace(' ', '_', func_get_arg($i)). '">' .func_get_arg($i). '</option>';
        }
        $field .= '</select>
                    </div>';
        return $field;

    }

    public function getTextArea($labelPa){
        $text = '<label for="textarea">' .$labelPa. '</label>
                    <textarea cols="40" rows="8" name="' .str_replace(' ', '_', $labelPa). '" id="textarea"></textarea>';
        return $text;
    }

    public function getP(){
        $numargs = func_num_args();
        $text = '<div class="agreement">';
        for($i = 0; $i <= $numargs-1; $i++){
            $text .= '<p>' .func_get_arg($i). '</p>';
        }
        $text .= '</div>';
        return $text;
    }

    public function getCheckbox($labelPa){
        $text = ' <div class="checkbox">

                    <input type="checkbox" name="checkbox_' .str_replace(' ', '_', $labelPa). '" id="checkbox_' .str_replace(' ', '_', $labelPa). '" />
                    <label for="checkbox_' .str_replace(' ', '_', $labelPa). '">
                        <span>' .$labelPa. '</span>
                    </label>
                </div>';
        return $text;
    }

}