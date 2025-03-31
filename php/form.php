<form method="post" action="confirm.html">
    <div class="bl_contact_cont">
        <div class="bl_contact_cont_ttl">
            <h3 class="bl_contact_cont_ttl">お名前</h3>
            <p class="bl_contact_cont_required">必須</p>
        </div>
        <input type="text" name="name" required></input>
    </div>
    <div class="bl_contact_cont">
        <div class="bl_contact_cont_ttl">
            <h3 class="bl_contact_cont_ttl">メールアドレス</h3>
            <p class="bl_contact_cont_required">必須</p>
        </div>
        <input type="email" name="email" required></input>
    </div>
    <div class="bl_contact_cont">
        <div class="bl_contact_cont_ttl">
            <h3 class="bl_contact_cont_ttl">お問い合わせ内容</h3>
            <p class="bl_contact_cont_required">必須</p>
        </div>
        <textarea name="message" required></textarea>
    </div>
    <div class="ly_btn">
        <input type="submit" value="送信する" class="el_btn_submit">
    </div>
</form>