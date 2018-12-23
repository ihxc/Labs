<?Php
function getUidByPid( $sPassengerId  )
{
    $iPid = intval( $sPassengerId  ); // 转化为整型¬
    $sHex = dechex( $iPid  ); // 十进制转十六进制¬
    $sHex = sprintf( '%08s', $sHex  );
    $sMaxHex = '00010000' . $sHex; // 第49位置1¬
    $iPassengerUid = hexdec( $sMaxHex  );
    return $iPassengerUid;
}

function getPidByUid( $uid  )
{
    if ( strlen( $uid  ) < 1 ) {
        return 0;
    }
    return bindec( substr( decbin( $uid  ), 17  )  );
}

$a = '1347855';
$b = getUidByPid($a);
$c = getPidByUid($b);
//var_dump($a,$b,$c);

$a = '284541790528632';
$c = getUidByPid($b);
//var_dump($a,$b,$c);


function getPassengerIdByUidNew( $uid  )
{
    if ( strlen( $uid  ) < 1 ) {
        return 0;
    }
    return bindec( substr( str_pad( decbin($uid),64,0,STR_PAD_LEFT  ), 16  )  );
}

var_dump(getPidByUid($a));
var_dump(getPassengerIdByUidNew($a));
