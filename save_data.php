<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال البيانات المُرسلة من صفحة النموذج
    $username = htmlspecialchars($_POST["username"]); // حماية البيانات
    $password = htmlspecialchars($_POST["password"]); // حماية البيانات

    // تحديد اسم الملف الذي سيتم الحفظ فيه
    $file = "user_data.txt";

    // تجهيز النص الذي سيتم حفظه في الملف
    $entry = "اسم المستخدم: $username - كلمة المرور: $password\n";

    // حفظ النص داخل الملف
    file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);

    // إظهار رسالة نجاح
    echo "تم حفظ بياناتك بنجاح!";
} else {
    echo "عذراً، لا يمكنك الوصول إلى هذه الصفحة مباشرة.";
}
?>