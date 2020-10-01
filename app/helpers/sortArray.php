<?
namespace sortArray;
function sort_($arr, $flag){
    $length = count( $arr );
    for ( $i = 0; $i < $length; $i++ ) {
        for ( $j = 0; $j < $length - 1; $j++ ) {
        if ( $arr[ $j ]['sort'] > $arr[ $j + 1 ]['sort'] ) {
            $tmp            = $arr[ $j + 1 ]['sort'];
            $arr[ $j + 1 ] ['sort'] = $arr[ $j ]['sort'];
            $arr[ $j ]['sort']      = $tmp;
        } // end of if conditional

        } // end of inner for loop
    } // end of first for loop
    if(!$flag)
        return array_reverse($arr);
    return $arr;
}
