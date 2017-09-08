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

function inGiaPhaDangMenu($data, $mahsbo = null, $id = 1, $hoten = '' ){
    $temp = isset($mahsbo)?$mahsbo:'root';
    echo "<div class=\"item\">
    <input type=\"checkbox\" id=\"$temp\" checked />
    <img src=\"img/Arrow.png\" class=\"arrow\"><label for=\"$temp\">$hoten</label>";
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
            echo '<li><div class="box-item"><a href="chi-tiet-ho-so/'.$val['mahoso'].'">' . $val['mahoso'] . '–' . $val['hoten'] .  ' (NS: '.$val['ngaysinh'].')</a></div>';
            $mahoso = $val['mahoso'];
            inGiaPhaDangMenu($data, $mahoso, $val['mahoso'], $val['hoten']);
        }
    }
    if ($flag) {
        echo "</li></ul></div>";
    }
}
