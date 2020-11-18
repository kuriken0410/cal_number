<html>
  <head>
    <title>cal_number</title>
  </head>
  <body>
    <h1>米ドル変換アプリです</h1>
    <h2>米ドルを入力すれば日本円に換算します</h2>
    <div>
      <form>
        <input type="text" name="usdoller" placeholder="$0" style="height: 30px; width: 120px;">
        <button type="submit">円に換算</button>
      </form>
      <p>日本円で{{ number_format($jpyen)}}円です</p>
    </div>
  </body>
</html>