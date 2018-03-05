function resultWrite() {
  document.getElementById('resultContent').innerHTML = '';
  var elem = document.forms[0];
  var n = 1;
    for (i = 1; i < elem.elements.length; i++) {
      if (elem.elements[i].checked){
        document.getElementById('resultContent').innerHTML += '<p>' + n + '. ' + elem.elements[i]['name'] + '</p>';
        n++;
      }
    }
}
function checkAll() {
  if(document.getElementById('selectAll').checked) {
    document.getElementById('lab').innerHTML = 'Semmit';
  }
  else{
    document.getElementById('resultContent').innerHTML = '<p>Nincs kiválasztva semmi</p>';
    document.getElementById('lab').innerHTML = 'Mindet';
  }

  elem = document.forms[0];
  merre = elem.elements[0].checked;

  for(i=0;i<elem.elements.length;i++) {
    if (elem.elements[i].type=="checkbox"){
      elem.elements[i].checked=merre // Ha ki nem kell, akkor merre helyett true
    }
  }
  resultWrite();
}
