<?php

if (!isset($_SESSION)) session_start();

// init variables

$username = "";
$email = "";

$errors = array();

// connect to db

$db = mysqli_connect('localhost', 'root', '', 'tennis_project') or die("could not connect to database");

// register user
if (isset($_POST['reg_user'])) {
    $username =  mysqli_real_escape_string($db, $_POST['username']);
    $email =  mysqli_real_escape_string($db, $_POST['email']);
    $password_1 =  mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 =  mysqli_real_escape_string($db, $_POST['password_2']);
    
    // form validation
    
    if (empty($username)) {array_push($errors, "Username is required");}
    if (empty($email)) {array_push($errors, "Email is required");}
    if (empty($password_1)) {array_push($errors, "Password is required");}
    if ($password_1 != $password_2) {array_push($errors, "Passwords do not match");}
    
    // check db for existing user with same username
    
    $user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) {
        if ($user['username'] === $username) {array_push($errors, "Username already exists");}
        if ($user['email'] === $email) {array_push($errors, "Email already exists");}
    }
    
    // register user if no error
    
    if (count($errors) == 0) {
        $password = md5($password_1); // encrypt the password
        $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
    
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
    
        header('location: index.php');
    }
}

// login user

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results)) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in successfully";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong username or password combination. Please try again.");
        }
    }
}

// add new student
if (isset($_SESSION['username']) && isset($_POST['add_student'])) {
    $username =  $_SESSION['username'];
    $student_name =  mysqli_real_escape_string($db, $_POST['student_name']);
    $student_email =  mysqli_real_escape_string($db, $_POST['student_email']);
    $student_phone_number =  mysqli_real_escape_string($db, $_POST['student_phone_number']);
    $student_home_address =  mysqli_real_escape_string($db, $_POST['student_home_address']);
    $student_age =  mysqli_real_escape_string($db, $_POST['student_age']);
    
    // form validation

    if (empty($student_name)) {array_push($errors, "Name is required");}
    if (empty($student_email)) {array_push($errors, "Email is required");}
    if (empty($student_phone_number)) {array_push($errors, "Phone number is required");}
    if (empty($student_home_address)) {array_push($errors, "Home address is required");}
    if (empty($student_age)) {array_push($errors, "Age is required");}
    
    // check db for existing student with same name
    
    $student_check_query = "SELECT * FROM student WHERE coach_username = '$username' and student_name = '$student_name' LIMIT 1";
    $result = mysqli_query($db, $student_check_query);
    $student = mysqli_fetch_assoc($result);
    
    if ($student) {
        if ($student['coach_username'] === $username && $student['student_name'] === $student_name) {array_push($errors, "Student with this name already exists");}
    }

    $student_check_query = "SELECT * FROM student WHERE coach_username = '$username' and email = '$student_email' LIMIT 1";
    $result = mysqli_query($db, $student_check_query);
    $student = mysqli_fetch_assoc($result);
    
    if ($student) {
        if ($student['coach_username'] === $username && $student['email'] === $student_email) {array_push($errors, "Student with this e-mail already exists");}
    }

    $student_check_query = "SELECT * FROM student WHERE coach_username = '$username' and phone_number = '$student_phone_number' LIMIT 1";
    $result = mysqli_query($db, $student_check_query);
    $student = mysqli_fetch_assoc($result);
    
    if ($student) {
        if ($student['coach_username'] === $username && $student['phone_number'] === $student_phone_number) {array_push($errors, "Student with this phone number already exists");}
    }

    // add student if no error
    
    if (count($errors) == 0) {
        $query = "INSERT INTO student (coach_username, student_name, email, phone_number, home_address, age) VALUES ('$username', '$student_name', '$student_email', '$student_phone_number', '$student_home_address', '$student_age')";
    
        mysqli_query($db, $query);
        unset($_POST['student_name']);
        unset($_POST['student_email']);
        unset($_POST['student_phone_number']);
        unset($_POST['student_home_address']);
        unset($_POST['student_age']);
        unset($_POST['add_student']);
    
        header('location: profile.php');
    }
}

// add new physique data
if (isset($_SESSION['username']) && isset($_POST['add_physique_data'])) {
    $username =  $_SESSION['username'];
    $student_name =  mysqli_real_escape_string($db, $_POST['student_name']);
    $date =  mysqli_real_escape_string($db, $_POST['statistics_date']);
    $run_5_m =  mysqli_real_escape_string($db, $_POST['run_5_m']);
    $run_10_m =  mysqli_real_escape_string($db, $_POST['run_10_m']);
    $speed_of_reaction =  mysqli_real_escape_string($db, $_POST['speed_of_reaction']);
    $long_jump =  mysqli_real_escape_string($db, $_POST['long_jump']);
    $up_jump =  mysqli_real_escape_string($db, $_POST['up_jump']);
    $ball_throw =  mysqli_real_escape_string($db, $_POST['ball_throw']);
    $realignment_of_movements =  mysqli_real_escape_string($db, $_POST['realignment_of_movements']);
    $consistency_of_actions =  mysqli_real_escape_string($db, $_POST['consistency_of_actions']);
    $differentiation_of_muscle_efforts =  mysqli_real_escape_string($db, $_POST['differentiation_of_muscle_efforts']);
    $ball_feeling =  mysqli_real_escape_string($db, $_POST['ball_feeling']);
    $downward_tilt =  mysqli_real_escape_string($db, $_POST['downward_tilt']);
    $twist_stick =  mysqli_real_escape_string($db, $_POST['twist_stick']);
    $shuttle_run =  mysqli_real_escape_string($db, $_POST['shuttle_run']);
    $fan_run =  mysqli_real_escape_string($db, $_POST['fan_run']);
    $jumps_sum_height =  mysqli_real_escape_string($db, $_POST['jumps_sum_height']);
    $jumps_time_repulsion =  mysqli_real_escape_string($db, $_POST['jumps_time_repulsion']);
    
    // form validation

    if (empty($student_name)) {array_push($errors, "Student name is required");}
    if (empty($date)) {array_push($errors, "Дата is required");}
    if (empty($run_5_m)) {array_push($errors, "Бег 5 м (с) is required");}
    if (empty($run_10_m)) {array_push($errors, "Бег 10 м (с) is required");}
    if (empty($speed_of_reaction)) {array_push($errors, "Быстрота реакции is required");}
    if (empty($long_jump)) {array_push($errors, "Прыжок в длину с места (см) is required");}
    if (empty($up_jump)) {array_push($errors, "Прыжок вверх (см) is required");}
    if (empty($ball_throw)) {array_push($errors, "Метание набивного мяча (м) is required");}
    if (empty($realignment_of_movements)) {array_push($errors, "Способность к перестроению 
        движений (кол-во раз за 15 сек) is required");}
    if (empty($consistency_of_actions)) {array_push($errors, "Согласованность действий (см) is required");}
    if (empty($differentiation_of_muscle_efforts)) {array_push($errors, "Дифференциация мышечных усилий (см) is required");}
    if (empty($ball_feeling)) {array_push($errors, "Чувство мяча (кол-во) is required");}
    if (empty($downward_tilt)) {array_push($errors, "Наклон вниз (см) is required");}
    if (empty($twist_stick)) {array_push($errors, "Выкрут палки (см) is required");}
    if (empty($shuttle_run)) {array_push($errors, "Бег челнок (с) is required");}
    if (empty($fan_run)) {array_push($errors, "Бег веер (с) is required");}
    if (empty($jumps_sum_height)) {array_push($errors, "10 прыжков высота полета (см) is required");}
    if (empty($jumps_time_repulsion)) {array_push($errors, "10 прыжков время отталкивания (с) is required");}
    
    // check db for existing student with same name
    
    $student_check_query = "SELECT * FROM student WHERE coach_username = '$username' and student_name = '$student_name' LIMIT 1";
    $result = mysqli_query($db, $student_check_query);
    $student = mysqli_fetch_assoc($result);
    
    if ($student) {
        if ($student['coach_username'] != $username || $student['student_name'] != $student_name) {array_push($errors, "Student with this name does not exist");}
    } else {
        array_push($errors, "Student with this name does not exist");
    }

    // add student if no error
    
    if (count($errors) == 0) {
        $query = "INSERT INTO physique_data (username,	student_name,	date,	run_5_m,	run_10_m,	speed_of_reaction,	long_jump,	up_jump,	ball_throw,	
        realignment_of_movements,	consistency_of_actions,	differentiation_of_muscle_efforts,	ball_feeling,	downward_tilt,	twist_stick,	shuttle_run,
        fan_run,	jumps_sum_height,	jumps_time_repulsion) 
                VALUES ('$username', '$student_name', '$date', '$run_5_m', '$run_10_m', '$speed_of_reaction', '$long_jump', '$up_jump',	'$ball_throw',	
        '$realignment_of_movements',	'$consistency_of_actions',	'$differentiation_of_muscle_efforts',	'$ball_feeling',	'$downward_tilt',	'$twist_stick',	
        '$shuttle_run', '$fan_run',	'$jumps_sum_height',	'$jumps_time_repulsion')";
    
        mysqli_query($db, $query);

        unset($_GET['student_name']);
        unset($_POST['statistics_date']);
        unset($_POST['run_5_m']);
        unset($_POST['run_10_m']);
        unset($_POST['speed_of_reaction']);
        unset($_POST['long_jump']);
        unset($_POST['up_jump']);
        unset($_POST['ball_throw']);
        unset($_POST['realignment_of_movements']);
        unset($_POST['consistency_of_actions']);
        unset($_POST['differentiation_of_muscle_efforts']);
        unset($_POST['ball_feeling']);
        unset($_POST['downward_tilt']);
        unset($_POST['twist_stick']);
        unset($_POST['shuttle_run']);
        unset($_POST['fan_run']);
        unset($_POST['jumps_sum_height']);
        unset($_POST['jumps_time_repulsion']);
        unset($_POST['add_physique_data']);
    
        header('location: profile.php');
    }
}

?>