<?php
    $fristName = $_POST["fristName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];

    $error = [
        'fristNameError'=>'',
        'lastNameError'=>'',
        'emailError'=>'',
    ];
    // لو ضغط عليها
    if(isset($_POST["submit"])){
        

        if(empty($fristName)){
            $error['fristNameError']='يرجى ادخال الاسم الأول';
            // echo "Enter First name";
        }
        if(empty($lastName)){
            $error['lastNameError']='يرجى ادخال الاسم الأخير';
            // echo "Enter Last name";
        }if(empty($email)){
            $error['emailError']='يرجى ادخال البريد الإلكتروني ';
            // echo "Enter email";
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error['emailError']='يرجى ادخال البريد الإلكتروني بشكل صحيح ';
            // echo "Enter Valid email"; 
        }

        // لو المصفوفة فارغة
        if(!array_filter($error)){
            // عشان احول اللي حيدخلو المستخدم لنص عشان مايكتبس اوامر
            // لما يدخل لقاعدة البيانات يدخل على انه نص
            $fristName = mysqli_real_escape_string($conn,$_POST["fristName"]);
            $lastName = mysqli_real_escape_string($conn,$_POST["lastName"]);
            $email = mysqli_real_escape_string($conn,$_POST["email"]);

        
            // echo $fristName ." / ".$lastName." / ".$email;
            // ادخل في هذه الأماكن هذه القيم
            $sql = "INSERT INTO users(fristName,lastName,email)
                    VALUES('$fristName','$lastName','$email')";

            if(mysqli_query($conn,$sql)){
                // header("Location: index.php");
                header("Location: ".$_SERVER['PHP_SELF']);
            }else{
                echo "Error".mysqli_connect_error();
            }
        }
    }
?>