<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Visitor's book</title></head>
<body>
    <h2>My room</h2>
    
    <!-- 1. 글쓰기 폼 -->
    <form method="POST">
        이름: <input type="text" name="name"><br>
        내용: <textarea name="content"></textarea><br>
        <button type="submit">남기기</button>
    </form>

    <?php
    // 2. 데이터 저장 로직
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $content = $_POST['content'];
        mysqli_query($conn, "INSERT INTO messages (name, content) VALUES ('$name', '$content')");
        header("Location: index.php"); // 새로고침 방지
    }

    // 3. 저장된 글 목록 보여주기
    echo "<h3>남겨진 메시지들</h3>";
    $result = mysqli_query($conn, "SELECT * FROM messages ORDER BY id DESC");
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p><strong>{$row['name']}</strong>: {$row['content']}</p>";
    }
    ?>
</body>
</html>