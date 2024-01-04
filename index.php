<?php
// استدعاء للملفات الخارجية
include "./inc/db.php";
include "./inc/form.php";

include "./inc/select.php";
// طباعة
// echo "<pre>";
// print_r($users);
// echo "</pre>"; 


include "./inc/db_close.php";



?>
<?php include_once "./parts/header.php"; ?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
    <div class="col-md-6 p-lg-5 mx-auto">
        <img src="./images/messi.png" alt="">
        <h1 class="display-4 fw-bold">اربح معنا</h1>
        <p class="fw-normal text-muted mb-3">باقي على فتح التسجيل</p>
        <!-- Display the countdown timer in an element -->
        <h3 id="countdown"></h3>
        <p class="fw-normal text-muted mb-3">للسحب على ربح نسخة مجانية</p>
    </div>
    <ul class="list-group list-group-flush">
        <h3>للدخول على السحب يرجى اتباع ما يلي :</h3>
            <li class="list-group-item">تابع البث المباشر على صفحتي على يوتيوب</li>
            <li class="list-group-item">سأقوم ببث لمدة ساعة للإجابة عن اسئلتكم</li>
            <li class="list-group-item">خلال فترة البث سيتم اتاحة التسجيل وكتابة اسماءكم وايملاتكم</li>
            <li class="list-group-item">بنهاية البث سيتم اختيار شخص واحد من قاعدة البيانات</li>
            <li class="list-group-item">الرابح سيحصل على نسخة مجانية</li>
        </ul>
</div>
<div class="container">


<div class="position-relative text-center">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
        <!-- <form class="mt-5" action="index.php" method="POST"> -->
        <form class="mt-5" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <h3>الرجاء ادخل معلوماتك</h3>
            <div class="mb-3">
                <label for="fristName" class="form-label">الاسم الأول</label>
                <input type="text" name="fristName" id="fristName" class="form-control"
                    value="<?php echo $fristName; ?>">
                <div class="form-text error">
                    <?php echo $error["fristNameError"]; ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">الاسم الأخير</label>
                <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName; ?>">
                <div class="form-text error">
                    <?php echo $error["lastNameError"]; ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                <div class="form-text error">
                    <?php echo $error["emailError"]; ?>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
        </form>
    </div>
</div>




<!-- <form action="index.php" method="POST">
            <input type="text" name="fristName" id="fristName" placeholder="Frist Name">
            <input type="text" name="lastName" id="lastName" placeholder="Last Name">
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="submit" name="submit" value="send">
        </form> -->
    <div class="loader-con">
        <div id="loader">
            <canvas id="circularLoader" width="200" height="200"></canvas>
        </div>
    </div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto">
    <button id="winner" type="button" class="btn btn-primary">
        اختيار الرابح
    </button>
</div>

<!-- Moda l -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLabel">الرابح في المسابقة</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php foreach ($users as $user): ?>
                    <h1 class="display-3 text-center modal-title" id="modalLabel">
                        <?php echo htmlspecialchars($user["fristName"]) . " " . htmlspecialchars($user["lastName"]); ?>
                    </h1>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<!-- <div id="cards" class="row mb-5 pb-5">

    
        <حيرجع كل واحد على شكل مصفوفة لوحده
                لما يخرج من قاعدة البيانات يخرج على شكل نص 
        <div class="col-sm-4">
            <div class="card my-2 bg-light">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo htmlspecialchars($user["fristName"]) . " " . htmlspecialchars($user["lastName"]); ?>
                    </h5>
                    <p class="card-text">
                        <?php echo htmlspecialchars($user["email"]); ?>
                    </p>
                </div>
            </div>
        </div>
    
</div> -->

<?php include_once "./parts/footer.php"; ?>