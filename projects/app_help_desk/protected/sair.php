<?php

    session_start();
    session_destroy();
    header('Location: ../no_protected/index.php');