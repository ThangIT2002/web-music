<?php
$conn = new mysqli('localhost', 'root', '', 'movie');
if ($conn) {
                    echo "Kết nối database thành công";
} else {
                    echo "Kết nối database không thành công";
}