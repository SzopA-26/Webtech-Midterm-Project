<?php $this->layout('layouts/app');?>

<h1>Create New Post</h1>

<form action="/posts/store" method="post">
    <!-- 
        HTTP Methods
        GET เรียกผ่าน URL 
            Ex: google.com/?q=APK
        POST ใช้ Submit form ส่งค่าผ่าน request body
    -->
    <div>
        <label for="title">Post title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label for="detail">Post detail</label>
        <textarea name="detail" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="user_id">User ID (ชั่วคราว)</label>
        <input type="text" name="user_id">
        <p>หลังจากรู้เรื่อง Session ช่องนี้จะถูก hidden</p>
    </div>

    <button type="submit">Create Post</button>
    
</form>