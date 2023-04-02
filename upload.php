<?php
if(isset($_FILES['video'])){
    $title = $_POST['title'];
    $file_name = $_FILES['video']['name'];
    $file_tmp = $_FILES['video']['tmp_name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $extensions = array("mp4", "avi", "mov", "wmv");
    if(in_array($file_ext, $extensions)){
        $new_file_name = uniqid('', true) . "." . $file_ext;
        move_uploaded_file($file_tmp, "uploads/" . $new_file_name);
        echo "<video width='320' height='240' controls><source src='uploads/$new_file_name' type='video/$file_ext'></video><br><b>$title</b><hr>";
    }
}
?>
