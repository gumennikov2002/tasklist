<?php
    session_start();
    require_once "engine/db.php";
    $uid = $_SESSION['user']['id'];
?>
 <div class="container mt-100">
    <form action="../engine/add_task.php" method="POST">
        <div class="d-flex">
            <input type="text" name="task_text" class="form-control form-task-control" placeholder="Задача">
            <input class="btn btn-success btn-radiused" name="submit" type="submit" value="+">
        </div>
        <?php
                if(isset($_SESSION['r_msg']))
                {
                    echo "<div class='alert alert-danger mt-3' role='alert'>".$_SESSION['r_msg']."</div>";
                    unset($_SESSION['r_msg']);
                }
                elseif(isset($_SESSION['s_msg']))
                {
                    echo "<div class='alert alert-success mt-3' role='alert'>".$_SESSION['s_msg']."</div>";
                    unset($_SESSION['s_msg']);
                }
            ?>
    </form>
    <?php
        $show_task = mysqli_query($db, "SELECT * FROM `tasks` WHERE user_id = '$uid' ORDER BY id DESC");
        if(mysqli_num_rows($show_task) == 0)
        {
            $f = mysqli_num_rows($show_task);
            echo "<div class='alert alert-secondary mt-2' role='alert'>Записей нет</div>";
        }
        else
        {
            while($row = mysqli_fetch_array($show_task))
            {

                switch($row[status])
                {
                    case '0' : $status = "Готов";
                    case '0' : $btn_status = "success";
                    break;
                    case '1' : $status = "Не готов";
                    case '1' : $btn_status = "warning";
                }

                echo "
                <div class='card mt-3'>
                    <div class='card-body'>
                        <div class='card-text'>
                            ".$row['text']."
                        </div>
                        <div class=''>
                            <a class='btn btn-danger mt-2 fr' href='../engine/remove_task.php?del_id=".$row[id]."'>Удалить</a>
                            <a class='btn btn-".$btn_status." mt-2 fr' href='../engine/change_status.php?status=".$row[status]."&id=".$row[id]."'>".$status."</a>
                        </div>
                    </div>
                </div>
                ";
            }
        }
    ?>
</div>