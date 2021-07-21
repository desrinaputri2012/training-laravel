<form action="" method="GET">
    <textarea style="width: 50%;
height: 100px;" name="data" col="60" row="20" placeholder="Ketikkan Kalimat Yang Mengandung Kata Saya atau Pasar"></textarea><br>
    <input type="submit" value="Post Sentence"/>
</form>

<?php
$list = array('saya','pasar');
$replace = array('****','*****');

if(isset($_GET['data'])){          
    $usercomment = $_GET['data'];
    if(!empty($usercomment)){       
        $censored_output = str_ireplace($list,$replace,$usercomment);
                        echo $censored_output;
    }else{
        echo 'please enter some text';
    }
}
?>
