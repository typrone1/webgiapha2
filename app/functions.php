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
            echo '<li><a class="hop-chua" href="ho-so/'.$val['mahoso'].'">' . $val['mahoso'] . '–' . $val['hoten'] ." (". $val['hotenvo'].")". '</a>';
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
                    <img src="img/Arrow.png" class="arrow"><label for="'.$idName.'">'.$val['hoten']." - ".$val['hotenvo'].'</label>';
            }
            else {
                echo '<li><a href="#">'.$val['hoten']." - ".$val['hotenvo'].'</a></li>';
            }
            $mahoso = $val['mahoso'];
            inGiaPhaDangMenu($data, $mahoso, $val['hoten']);
        }

    }
    if ($flag) {
        echo "</li></ul>";
    }
}
