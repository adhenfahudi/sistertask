<?PHP
  if(!empty($_FILES['selected_file']))
  {
    $path = "files/";

    $path = $path . basename( $_FILES['selected_file']['name']);
    
    if(move_uploaded_file($_FILES['selected_file']['tmp_name'], $path)) {
      header('Location: /sistertask/');
    } else{
        echo "Maaf Upload Gagal!";
    }
  }
?>