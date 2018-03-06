<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iron farm</title>
    <link rel="shortcut icon" href="favicon.png">
    <link href="css\style.css" rel="stylesheet">
    <script src="js\function.js"></script>
  </head>
  <body onload="resultWrite(); checkAll()">
    <div id="checkboxContent">
      <form>
        <table>
          <tr>
            <td>
              <input type="checkbox" id="selectAll" onchange="checkAll()" checked>
              <label class="checkbox" for="selectAll"></label>
            </td>
            <td>
              <label id="lab" class="text" for="selectAll">Mindent</label>
            </td>
          </tr>
          <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
          </tr>
          <?php include 'php/table.php' ?>
        </table>
      </form>
    </div>
    <div id="resultContent">&nbsp
    </div>

    <form>
    <input type="text" id="copy-text5" onclick="selectionCopy()">
    <input type="checkbox" id="copy-text6">
    <input type="checkbox" id="copy-text7">
    </form>
    <div id="resultContent">

    </div>
    <textarea style="visibility: hidden;" id="copy-text2">tappancs
    </textarea>
  </body>
</html>
