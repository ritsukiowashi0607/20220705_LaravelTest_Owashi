<!-- <form action="#" method="post">
  <table>
  <tr>
  <th><label for="name">名前</label></th>
  <td><input type="text" name="name" id="name"></td>
  </tr>
  <tr>
  <th><label for="mail">メールアドレス</label></th>
  <td><input type="email" name="mail" id="mail"></td>
  </tr>
  </table>
  <button type="submit">送信する</button>
</form> -->


<form action="#" method="post">
  @csrf
<dl>
  <dt><label for="name">名前</label></dt>
    <dd><input type="text" name="name" id="name"></dd>
</dl>
<dl>
  <dt><label for="mail">メールアドレス</label></dt>
    <dd><input type="text" name="mail" id="mail"></dd>
</dl>
  <button type="submit">送信する</button>
</form>