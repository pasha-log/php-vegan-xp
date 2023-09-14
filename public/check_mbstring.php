<?php
if (extension_loaded('mbstring')) {
    echo 'Multibyte decoding support using mbstring: enabled';
} else {
    echo 'Multibyte decoding support using mbstring: disabled';
}
