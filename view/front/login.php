<h3>第一次購物</h3>
<a href='./view/backend/add_user.php'><img src="./icon/0413.jpg" alt=""></a>
<h3>會員登入</h3>
<form action="#" method="post">
    <div class="ct">
        <table>
            <tr>
                <td class="tt">帳號:</td>
                <td class="pp"><input type="text" name="acc" id="acc"></td>
            </tr>
            <tr>
                <td class="tt">密碼:</td>
                <td class="pp"><input type="password" name="pw" id="pw"></td>
            </tr>
            <tr>
                <td class="tt">驗證碼</td>
                <td class="pp"><span id="check"></span><input type="text" name="" id="ans"></td>
            </tr>
            <tr>

                <td><input type="button" value="確定" onclick="ok()">
                    <input type="reset" value="重置">
                </td>
            </tr>
        </table>
    </div>

</form>

<script>
     let chk1=Math.floor(Math.random()*90)+10;
    let chk2=Math.floor(Math.random()*90)+10;
    let check=chk1+chk2;
    $("#check").text(chk1+"+"+chk2+"=");
function ok(){
   if($("#ans").val()==check){
    let acc=$("#acc").val();
    let pw=$("#pw").val();
    $.post("./api/admin.php",{acc,pw,table:'User'},(res)=>{
        if(res>0){
            
         location.href="index.php"
        }
    })
   }else{
    alert('驗證碼錯誤')
   }
    

}
</script>