<?php
function inGiaPha($data, $mahsbo = null)
{
    $flag = false;
    foreach ($data as $val) {
        if ($val['mahsbo'] == $mahsbo) {
            $flag = true;
            break;
        }
    }
    if ($flag) {
        echo "<ul>";
    }
    foreach ($data as $val) {
        $parent = $val['mahsbo'];
        if ($parent == $mahsbo) {
            echo '<li><div class="box-item"><a href="chi-tiet-ho-so/'.$val['mahoso'].'">' . $val['mahoso'] . '–' . $val['hoten'] . '</a></div>';
            $mahoso = $val['mahoso'];
            inGiaPha($data, $mahoso);
        }
    }
    if ($flag) {
        echo "</li></ul>";
    }
}

function inGiaPhaDangMenu($data, $mahsbo = null, $hoten = '' )
{
    $flag = false;
    foreach ($data as $val) {
        if ($val['mahsbo'] == $mahsbo) {
            $flag = true;
            break;
        }
    }

    if ($flag) {
        echo "<ul>";
    }
    foreach ($data as $val) {
        $parent = $val['mahsbo'];
        if ($parent == $mahsbo) {
            $flag2 = false;
            foreach ($data as $val2){

                if ($val['mahoso'] == $val2['mahsbo']){
                    $flag2=true;
                    break;
                }

            }
            if ($flag2==true){
                if ($mahsbo != null){
                    $temp = "sub-item";
                }
                else {
                    $temp = "item";
                }

                $idName = isset($mahsbo)?$mahsbo: 'root';
                echo '<li>
                    <div class="'.$temp.'">
                    <input type="checkbox" id="'.$idName.'" checked/>
                    <img src="img/Arrow.png" class="arrow"><label for="'.$idName.'">'.$val['hoten'].'</label>';
            }
            else {
                echo '<li><a href="#">'.$val['hoten'].'</a></li>';
            }
            $mahoso = $val['mahoso'];
            inGiaPhaDangMenu($data, $mahoso, $val['hoten']);
        }

    }
    if ($flag) {
        echo "</li></ul>";
    }
}
