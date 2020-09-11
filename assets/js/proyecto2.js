document.getElementById("mahe_type").onchange = handleChange;

function handleChange(evt){
    var value = evt.target.value;

    let optionValue1 = '<div class="form-group" id="productSubType">' +
    '<label for="productSubType">Tipo de Torno</label>' +
    '<select name="herramienta_tipo_tipo_id" id="productSubType" class="form-control">' +
    '<option value="" >-- Seleccione el tipo de torno --</option>' +
    '<option value="1">Revólver</option>' +
    '<option value="2">CNC</option>' +
    '<option value="3">Paralelo</option>' +
    '<option value="4">Automático</option>' +
    '<option value="5">Copiador</option>' +
    '</select>' + 
    '</div>';

    let optionValue2 = '<div class="form-group" id="productSubType">' +
    '<label for="productSubType">Tipo de Fresadora</label>' +
    '<select name="herramienta_tipo_tipo_id" id="productSubType" class="form-control">' +
    '<option value="" selected>-- Seleccione el tipo de Fresadora --</option>' +
    '<option value="1">Simple</option>' +
    '<option value="2">Universal</option>' +
    '<option value="3">Vertical</option>' +
    '</select>' + 
    '</div>';

    let optionValue3 = '<div class="form-group" id="productSubType">' +
    '<label for="productSubType">Tipo de Taladro</label>' +
    '<select name="herramienta_tipo_tipo_id" id="productSubType" class="form-control">' +
    '<option value="" selected>-- Seleccione el tipo de Taladro --</option>' +
    '<option value="1">Eléctrico</option>' +
    '<option value="2">De columna</option>' +
    '<option value="3">Precutor</option>' +
    '</select>' + 
    '</div>';

    let optionValue4 = '<div class="form-group" id="productSubType">' +
    '<label for="productSubType">Tipo de Pulidora</label>' +
    '<select name="herramienta_tipo_tipo_id" id="productSubType" class="form-control">' +
    '<option value="" selected>-- Seleccione el tipo de Pulidora --</option>' +
    '<option value="1">Rotatoria</option>' +
    '<option value="2">Orbital</option>' +
    '</select>' + 
    '</div>';

    let subTypeDiv = document.getElementById("productSubTypeDiv");
    let subType = document.getElementById("productSubType");
    if(subType){
        subType.remove();
    }

    if(value === '1'){
        subTypeDiv.innerHTML = optionValue1;
    }else if (value === '2'){
        subTypeDiv.innerHTML = optionValue2;
    }else if (value === '3'){
        subTypeDiv.innerHTML = optionValue3;
    }else if (value === '4'){
        subTypeDiv.innerHTML = optionValue4;
    }
 };