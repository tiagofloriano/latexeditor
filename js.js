/**
 * Função para inserir o código latex no campo textarea, no local onde o cursor estiver parado.
 * 
 * Código retirado do site https://qastack.com.br/programming/11076975/how-to-insert-text-into-the-textarea-at-the-current-cursor-position
 * 
 * @param   {String} myValue | código latex
 * @returns {String}
 */
function latex(myValue) {
    //myValue = myValue.toString();
    var myField = document.getElementById('codigolatex'); //alteraÃ§Ã£o da revista
    //IE support
    if (document.selection) {
        myField.focus();
        sel = document.selection.createRange();
        sel.text = myValue;
    }
    //MOZILLA and others
    else if (myField.selectionStart || myField.selectionStart == '0') {
        var startPos = myField.selectionStart;
        var endPos = myField.selectionEnd;
        myField.value = myField.value.substring(0, startPos)
            + myValue 
            + myField.value.substring(endPos, myField.value.length);
    } else {
        myField.value += myValue;
    }
}