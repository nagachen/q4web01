<div class="all ct">
    <h3>會員註冊</h3>
    <form action="./api/add_user.php" method="post">

    <table style="width:100%">
    <tr>
        <td class="tt">姓名</td>
        <td class="pp"><input type="text" name="name" id=""></td>
    </tr>
    <tr>
        <td class="tt">帳號</td>
        <td class="pp"><input type="text" name="acc" id=""></td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp"><input type="password" name="pw" id=""></td>
    </tr>
    <tr>
        <td class="tt">電話</td>
        <td class="pp"><input type="text" name="tel" id=""></td>
    </tr>
    <tr>
        <td class="tt">住址</td>
        <td class="pp"><input type="text" name="addr" id=""></td>
    </tr>
    <tr>
        <td class="tt">電子信箱</td>
        <td class="pp"><input type="text" name="email" id=""></td>
    </tr>
       </table>
<div class="ct">
    <input type="button" value="註冊" onclick="ok()">
    <input type="reset" value="重置">
</div>
    </form>
</div>
<script>
    function ok(){
    let data={
        name:$("input[name='name']").val(),
        acc:$("input[name='acc']").val(),
        pw:$("input[name='pw']").val(),
        tel:$("input[name='tel']").val(),
        addr:$("input[name='addr']").val(),
        email:$("input[name='email']").val()
    }
    $.post("./api/add_user.php",data,(res)=>{
        switch(res){
            case '1':
                alert("不能為admin");
                break;
            case '2':
                alert("帳號重覆");
                break;

            case '3':
                alert("註冊成功");
                break;

        }
    })
}
</script>