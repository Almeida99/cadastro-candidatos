window.onload = function()
{
document.getElementById('grau').style.display = 'none';
document.getElementById('tgrau').style.display = 'none';
document.getElementById('cnh').style.display = 'none';
document.getElementById('cnhtitulo').style.display = 'none';
document.getElementById('curso').style.display = 'none';
document.getElementById('cursotitulo').style.display = 'none';
document.getElementById('validadetitulo').style.display = 'none';
document.getElementById('validade').style.display = 'none';
document.getElementById('text1').style.display = 'none';
document.getElementById('text2').style.display = 'none';
document.getElementById('text3').style.display = 'none';
document.getElementById('simp').style.display = 'none';
document.getElementById('simptitulo').style.display = 'none';
document.getElementById('indicacao').style.display = 'none';
document.getElementById('tindicacao').style.display = 'none';
document.getElementById('func').style.display = 'none';
document.getElementById('dsfunc').style.display = 'none';
document.getElementById('nm1').style.display = 'none';
document.getElementById('dt1').style.display = 'none';
document.getElementById('dtd1').style.display = 'none';
document.getElementById('hcargo1').style.display = 'none';
document.getElementById('motivo1').style.display = 'none';
document.getElementById('dsn1').style.display = 'none';
document.getElementById('dsd1').style.display = 'none';
document.getElementById('dsdd1').style.display = 'none';
document.getElementById('dsc1').style.display = 'none';
document.getElementById('dsm1').style.display = 'none';
document.getElementById('nm2').style.display = 'none';
document.getElementById('dt2').style.display = 'none';
document.getElementById('dtd2').style.display = 'none';
document.getElementById('hcargo2').style.display = 'none';
document.getElementById('motivo2').style.display = 'none';
document.getElementById('dsn2').style.display = 'none';
document.getElementById('dsd2').style.display = 'none';
document.getElementById('dsdd2').style.display = 'none';
document.getElementById('dsc2').style.display = 'none';
document.getElementById('dsm2').style.display = 'none';
document.getElementById('nm3').style.display = 'none';
document.getElementById('dt3').style.display = 'none';
document.getElementById('dtd3').style.display = 'none';
document.getElementById('hcargo3').style.display = 'none';
document.getElementById('motivo3').style.display = 'none';
document.getElementById('dsn3').style.display = 'none';
document.getElementById('dsd3').style.display = 'none';
document.getElementById('dsdd3').style.display = 'none';
document.getElementById('dsc3').style.display = 'none';
document.getElementById('dsm3').style.display = 'none';
document.getElementById('nm4').style.display = 'none';
document.getElementById('dt4').style.display = 'none';
document.getElementById('dtd4').style.display = 'none';
document.getElementById('hcargo4').style.display = 'none';
document.getElementById('motivo4').style.display = 'none';
document.getElementById('dsn4').style.display = 'none';
document.getElementById('dsd4').style.display = 'none';
document.getElementById('dsdd4').style.display = 'none';
document.getElementById('dsc4').style.display = 'none';
document.getElementById('dsm4').style.display = 'none';
document.getElementById('nm5').style.display = 'none';
document.getElementById('dt5').style.display = 'none';
document.getElementById('dtd5').style.display = 'none';
document.getElementById('hcargo5').style.display = 'none';
document.getElementById('motivo5').style.display = 'none';
document.getElementById('dsn5').style.display = 'none';
document.getElementById('dsd5').style.display = 'none';
document.getElementById('dsdd5').style.display = 'none';
document.getElementById('dsc5').style.display = 'none';
document.getElementById('dsm5').style.display = 'none';


};



function exibir_ocultar(val) {
if(val.value == 'Motorista') {
document.getElementById('cnh').style.display = 'block';
document.getElementById('cnhtitulo').style.display = 'block';
document.getElementById('curso').style.display = 'block';
document.getElementById('cursotitulo').style.display = 'block';
document.getElementById('validadetitulo').style.display = 'block';
document.getElementById('validade').style.display = 'block';
document.getElementById('text1').style.display = 'none';
document.getElementById('text2').style.display = 'none';
document.getElementById('text3').style.display = 'none';
document.getElementById('tsetor').style.display = 'none';
document.getElementById('setor').style.display = 'none';
}
else if (val.value == 'Cobrador'){
document.getElementById('cnh').style.display = 'none';
document.getElementById('cnhtitulo').style.display = 'none';
document.getElementById('curso').style.display = 'none';
document.getElementById('cursotitulo').style.display = 'none';
document.getElementById('validadetitulo').style.display = 'none';
document.getElementById('validade').style.display = 'none';
document.getElementById('text1').style.display = 'none';
document.getElementById('text2').style.display = 'none';
document.getElementById('text3').style.display = 'none';
document.getElementById('tsetor').style.display = 'none';
document.getElementById('setor').style.display = 'none';
}
else{
document.getElementById('cnh').style.display = 'none';
document.getElementById('cnhtitulo').style.display = 'none';
document.getElementById('curso').style.display = 'none';
document.getElementById('cursotitulo').style.display = 'none';
document.getElementById('validadetitulo').style.display = 'none';
document.getElementById('validade').style.display = 'none';
document.getElementById('text1').style.display = 'none';
document.getElementById('text2').style.display = 'none';
document.getElementById('text3').style.display = 'none';
document.getElementById('tsetor').style.display = 'block';
document.getElementById('setor').style.display = 'block';

}
};

function ocultar_necessidade(val) {

document.getElementById('simp').style.display = 'none';
document.getElementById('simptitulo').style.display = 'none';

};
function exibir_necessidade(val) {
document.getElementById('simp').style.display = 'block';
document.getElementById('simptitulo').style.display = 'block';


};

            function ocultar_indicacao(val) {
    document.getElementById('indicacao').style.display = 'none';
    document.getElementById('tindicacao').style.display = 'none';

};
function exibir_indicacao(val) {
    document.getElementById('indicacao').style.display = 'block';
    document.getElementById('tindicacao').style.display = 'block';

};

function ocultar_func(val) {
document.getElementById('func').style.display = 'none';
document.getElementById('dsfunc').style.display = 'none';
};
function exibir_func(val) {
document.getElementById('func').style.display = 'block';
document.getElementById('dsfunc').style.display = 'block';

};

function exibir_grau(val) {
    document.getElementById('tgrau').style.display = 'block';
    document.getElementById('grau').style.display = 'block';
    
    };

function exibir_historico(val) {
    if(val.value == '1') {
        document.getElementById('nm1').style.display = 'block';
        document.getElementById('dt1').style.display = 'block';
        document.getElementById('dtd1').style.display = 'block';
        document.getElementById('hcargo1').style.display = 'block';
        document.getElementById('motivo1').style.display = 'block';
        document.getElementById('dsn1').style.display = 'block';
        document.getElementById('dsd1').style.display = 'block';
        document.getElementById('dsdd1').style.display = 'block';
        document.getElementById('dsc1').style.display = 'block';
        document.getElementById('dsm1').style.display = 'block';
        document.getElementById('nm2').style.display = 'none';
        document.getElementById('dt2').style.display = 'none';
        document.getElementById('dtd2').style.display = 'none';
        document.getElementById('hcargo2').style.display = 'none';
        document.getElementById('motivo2').style.display = 'none';
        document.getElementById('dsn2').style.display = 'none';
        document.getElementById('dsd2').style.display = 'none';
        document.getElementById('dsdd2').style.display = 'none';
        document.getElementById('dsc2').style.display = 'none';
        document.getElementById('dsm2').style.display = 'none';
        document.getElementById('nm3').style.display = 'none';
        document.getElementById('dt3').style.display = 'none';
        document.getElementById('dtd3').style.display = 'none';
        document.getElementById('hcargo3').style.display = 'none';
        document.getElementById('motivo3').style.display = 'none';
        document.getElementById('dsn3').style.display = 'none';
        document.getElementById('dsd3').style.display = 'none';
        document.getElementById('dsdd3').style.display = 'none';
        document.getElementById('dsc3').style.display = 'none';
        document.getElementById('dsm3').style.display = 'none';
        document.getElementById('nm4').style.display = 'none';
        document.getElementById('dt4').style.display = 'none';
        document.getElementById('dtd4').style.display = 'none';
        document.getElementById('hcargo4').style.display = 'none';
        document.getElementById('motivo4').style.display = 'none';
        document.getElementById('dsn4').style.display = 'none';
        document.getElementById('dsd4').style.display = 'none';
        document.getElementById('dsdd4').style.display = 'none';
        document.getElementById('dsc4').style.display = 'none';
        document.getElementById('dsm4').style.display = 'none';
        document.getElementById('nm5').style.display = 'none';
        document.getElementById('dt5').style.display = 'none';
        document.getElementById('dtd5').style.display = 'none';
        document.getElementById('hcargo5').style.display = 'none';
        document.getElementById('motivo5').style.display = 'none';
        document.getElementById('dsn5').style.display = 'none';
        document.getElementById('dsd5').style.display = 'none';
        document.getElementById('dsdd5').style.display = 'none';
        document.getElementById('dsc5').style.display = 'none';
        document.getElementById('dsm5').style.display = 'none';
    }
    else if (val.value == '2'){
        document.getElementById('nm1').style.display = 'block';
        document.getElementById('dt1').style.display = 'block';
        document.getElementById('dtd1').style.display = 'block';
        document.getElementById('hcargo1').style.display = 'block';
        document.getElementById('motivo1').style.display = 'block';
        document.getElementById('dsn1').style.display = 'block';
        document.getElementById('dsd1').style.display = 'block';
        document.getElementById('dsdd1').style.display = 'block';
        document.getElementById('dsc1').style.display = 'block';
        document.getElementById('dsm1').style.display = 'block';
        document.getElementById('nm2').style.display = 'block';
        document.getElementById('dt2').style.display = 'block';
        document.getElementById('dtd2').style.display = 'block';
        document.getElementById('hcargo2').style.display = 'block';
        document.getElementById('motivo2').style.display = 'block';
        document.getElementById('dsn2').style.display = 'block';
        document.getElementById('dsd2').style.display = 'block';
        document.getElementById('dsdd2').style.display = 'block';
        document.getElementById('dsc2').style.display = 'block';
        document.getElementById('dsm2').style.display = 'block';
        document.getElementById('nm3').style.display = 'none';
        document.getElementById('dt3').style.display = 'none';
        document.getElementById('dtd3').style.display = 'none';
        document.getElementById('hcargo3').style.display = 'none';
        document.getElementById('motivo3').style.display = 'none';
        document.getElementById('dsn3').style.display = 'none';
        document.getElementById('dsd3').style.display = 'none';
        document.getElementById('dsdd3').style.display = 'none';
        document.getElementById('dsc3').style.display = 'none';
        document.getElementById('dsm3').style.display = 'none';
        document.getElementById('nm4').style.display = 'none';
        document.getElementById('dt4').style.display = 'none';
        document.getElementById('dtd4').style.display = 'none';
        document.getElementById('hcargo4').style.display = 'none';
        document.getElementById('motivo4').style.display = 'none';
        document.getElementById('dsn4').style.display = 'none';
        document.getElementById('dsd4').style.display = 'none';
        document.getElementById('dsdd4').style.display = 'none';
        document.getElementById('dsc4').style.display = 'none';
        document.getElementById('dsm4').style.display = 'none';
        document.getElementById('nm5').style.display = 'none';
        document.getElementById('dt5').style.display = 'none';
        document.getElementById('dtd5').style.display = 'none';
        document.getElementById('hcargo5').style.display = 'none';
        document.getElementById('motivo5').style.display = 'none';
        document.getElementById('dsn5').style.display = 'none';
        document.getElementById('dsd5').style.display = 'none';
        document.getElementById('dsdd5').style.display = 'none';
        document.getElementById('dsc5').style.display = 'none';
        document.getElementById('dsm5').style.display = 'none';
        
    }
    else if (val.value == '3'){
        document.getElementById('nm1').style.display = 'block';
        document.getElementById('dt1').style.display = 'block';
        document.getElementById('dtd1').style.display = 'block';
        document.getElementById('hcargo1').style.display = 'block';
        document.getElementById('motivo1').style.display = 'block';
        document.getElementById('dsn1').style.display = 'block';
        document.getElementById('dsd1').style.display = 'block';
        document.getElementById('dsdd1').style.display = 'block';
        document.getElementById('dsc1').style.display = 'block';
        document.getElementById('dsm1').style.display = 'block';
        document.getElementById('nm2').style.display = 'block';
        document.getElementById('dt2').style.display = 'block';
        document.getElementById('dtd2').style.display = 'block';
        document.getElementById('hcargo2').style.display = 'block';
        document.getElementById('motivo2').style.display = 'block';
        document.getElementById('dsn2').style.display = 'block';
        document.getElementById('dsd2').style.display = 'block';
        document.getElementById('dsdd2').style.display = 'block';
        document.getElementById('dsc2').style.display = 'block';
        document.getElementById('dsm2').style.display = 'block';
        document.getElementById('nm3').style.display = 'block';
        document.getElementById('dt3').style.display = 'block';
        document.getElementById('dtd3').style.display = 'block';
        document.getElementById('hcargo3').style.display = 'block';
        document.getElementById('motivo3').style.display = 'block';
        document.getElementById('dsn3').style.display = 'block';
        document.getElementById('dsd3').style.display = 'block';
        document.getElementById('dsdd3').style.display = 'block';
        document.getElementById('dsc3').style.display = 'block';
        document.getElementById('dsm3').style.display = 'block';
        document.getElementById('nm4').style.display = 'none';
        document.getElementById('dt4').style.display = 'none';
        document.getElementById('dtd4').style.display = 'none';
        document.getElementById('hcargo4').style.display = 'none';
        document.getElementById('motivo4').style.display = 'none';
        document.getElementById('dsn4').style.display = 'none';
        document.getElementById('dsd4').style.display = 'none';
        document.getElementById('dsdd4').style.display = 'none';
        document.getElementById('dsc4').style.display = 'none';
        document.getElementById('dsm4').style.display = 'none';
        document.getElementById('nm5').style.display = 'none';
        document.getElementById('dt5').style.display = 'none';
        document.getElementById('dtd5').style.display = 'none';
        document.getElementById('hcargo5').style.display = 'none';
        document.getElementById('motivo5').style.display = 'none';
        document.getElementById('dsn5').style.display = 'none';
        document.getElementById('dsd5').style.display = 'none';
        document.getElementById('dsdd5').style.display = 'none';
        document.getElementById('dsc5').style.display = 'none';
        document.getElementById('dsm5').style.display = 'none';
    }
    else if (val.value == '4'){
        document.getElementById('nm1').style.display = 'block';
        document.getElementById('dt1').style.display = 'block';
        document.getElementById('dtd1').style.display = 'block';
        document.getElementById('hcargo1').style.display = 'block';
        document.getElementById('motivo1').style.display = 'block';
        document.getElementById('dsn1').style.display = 'block';
        document.getElementById('dsd1').style.display = 'block';
        document.getElementById('dsdd1').style.display = 'block';
        document.getElementById('dsc1').style.display = 'block';
        document.getElementById('dsm1').style.display = 'block';
        document.getElementById('nm2').style.display = 'block';
        document.getElementById('dt2').style.display = 'block';
        document.getElementById('dtd2').style.display = 'block';
        document.getElementById('hcargo2').style.display = 'block';
        document.getElementById('motivo2').style.display = 'block';
        document.getElementById('dsn2').style.display = 'block';
        document.getElementById('dsd2').style.display = 'block';
        document.getElementById('dsdd2').style.display = 'block';
        document.getElementById('dsc2').style.display = 'block';
        document.getElementById('dsm2').style.display = 'block';
        document.getElementById('nm3').style.display = 'block';
        document.getElementById('dt3').style.display = 'block';
        document.getElementById('dtd3').style.display = 'block';
        document.getElementById('hcargo3').style.display = 'block';
        document.getElementById('motivo3').style.display = 'block';
        document.getElementById('dsn3').style.display = 'block';
        document.getElementById('dsd3').style.display = 'block';
        document.getElementById('dsdd3').style.display = 'block';
        document.getElementById('dsc3').style.display = 'block';
        document.getElementById('dsm3').style.display = 'block';
        document.getElementById('nm4').style.display = 'block';
        document.getElementById('dt4').style.display = 'block';
        document.getElementById('dtd4').style.display = 'block';
        document.getElementById('hcargo4').style.display = 'block';
        document.getElementById('motivo4').style.display = 'block';
        document.getElementById('dsn4').style.display = 'block';
        document.getElementById('dsd4').style.display = 'block';
        document.getElementById('dsdd4').style.display = 'block';
        document.getElementById('dsc4').style.display = 'block';
        document.getElementById('dsm4').style.display = 'block';
        document.getElementById('nm5').style.display = 'none';
        document.getElementById('dt5').style.display = 'none';
        document.getElementById('dtd5').style.display = 'none';
        document.getElementById('hcargo5').style.display = 'none';
        document.getElementById('motivo5').style.display = 'none';
        document.getElementById('dsn5').style.display = 'none';
        document.getElementById('dsd5').style.display = 'none';
        document.getElementById('dsdd5').style.display = 'none';
        document.getElementById('dsc5').style.display = 'none';
        document.getElementById('dsm5').style.display = 'none';
    }
    else if (val.value == '5'){
        document.getElementById('nm1').style.display = 'block';
        document.getElementById('dt1').style.display = 'block';
        document.getElementById('dtd1').style.display = 'block';
        document.getElementById('hcargo1').style.display = 'block';
        document.getElementById('motivo1').style.display = 'block';
        document.getElementById('dsn1').style.display = 'block';
        document.getElementById('dsd1').style.display = 'block';
        document.getElementById('dsdd1').style.display = 'block';
        document.getElementById('dsc1').style.display = 'block';
        document.getElementById('dsm1').style.display = 'block';
        document.getElementById('nm2').style.display = 'block';
        document.getElementById('dt2').style.display = 'block';
        document.getElementById('dtd2').style.display = 'block';
        document.getElementById('hcargo2').style.display = 'block';
        document.getElementById('motivo2').style.display = 'block';
        document.getElementById('dsn2').style.display = 'block';
        document.getElementById('dsd2').style.display = 'block';
        document.getElementById('dsdd2').style.display = 'block';
        document.getElementById('dsc2').style.display = 'block';
        document.getElementById('dsm2').style.display = 'block';
        document.getElementById('nm3').style.display = 'block';
        document.getElementById('dt3').style.display = 'block';
        document.getElementById('dtd3').style.display = 'block';
        document.getElementById('hcargo3').style.display = 'block';
        document.getElementById('motivo3').style.display = 'block';
        document.getElementById('dsn3').style.display = 'block';
        document.getElementById('dsd3').style.display = 'block';
        document.getElementById('dsdd3').style.display = 'block';
        document.getElementById('dsc3').style.display = 'block';
        document.getElementById('dsm3').style.display = 'block';
        document.getElementById('nm4').style.display = 'block';
        document.getElementById('dt4').style.display = 'block';
        document.getElementById('dtd4').style.display = 'block';
        document.getElementById('hcargo4').style.display = 'block';
        document.getElementById('motivo4').style.display = 'block';
        document.getElementById('dsn4').style.display = 'block';
        document.getElementById('dsd4').style.display = 'block';
        document.getElementById('dsdd4').style.display = 'block';
        document.getElementById('dsc4').style.display = 'block';
        document.getElementById('dsm4').style.display = 'block';
        document.getElementById('nm5').style.display = 'block';
        document.getElementById('dt5').style.display = 'block';
        document.getElementById('dtd5').style.display = 'block';
        document.getElementById('hcargo5').style.display = 'block';
        document.getElementById('motivo5').style.display = 'block';
        document.getElementById('dsn5').style.display = 'block';
        document.getElementById('dsd5').style.display = 'block';
        document.getElementById('dsdd5').style.display = 'block';
        document.getElementById('dsc5').style.display = 'block';
        document.getElementById('dsm5').style.display = 'block';
    }
    else{
        document.getElementById('nm1').style.display = 'none';
        document.getElementById('dt1').style.display = 'none';
        document.getElementById('dtd1').style.display = 'none';
        document.getElementById('hcargo1').style.display = 'none';
        document.getElementById('motivo1').style.display = 'none';
        document.getElementById('dsn1').style.display = 'none';
        document.getElementById('dsd1').style.display = 'none';
        document.getElementById('dsdd1').style.display = 'none';
        document.getElementById('dsc1').style.display = 'none';
        document.getElementById('dsm1').style.display = 'none';
        document.getElementById('nm2').style.display = 'none';
        document.getElementById('dt2').style.display = 'none';
        document.getElementById('dtd2').style.display = 'none';
        document.getElementById('hcargo2').style.display = 'none';
        document.getElementById('motivo2').style.display = 'none';
        document.getElementById('dsn2').style.display = 'none';
        document.getElementById('dsd2').style.display = 'none';
        document.getElementById('dsdd2').style.display = 'none';
        document.getElementById('dsc2').style.display = 'none';
        document.getElementById('dsm2').style.display = 'none';
        document.getElementById('nm3').style.display = 'none';
        document.getElementById('dt3').style.display = 'none';
        document.getElementById('dtd3').style.display = 'none';
        document.getElementById('hcargo3').style.display = 'none';
        document.getElementById('motivo3').style.display = 'none';
        document.getElementById('dsn3').style.display = 'none';
        document.getElementById('dsd3').style.display = 'none';
        document.getElementById('dsdd3').style.display = 'none';
        document.getElementById('dsc3').style.display = 'none';
        document.getElementById('dsm3').style.display = 'none';
        document.getElementById('nm4').style.display = 'none';
        document.getElementById('dt4').style.display = 'none';
        document.getElementById('dtd4').style.display = 'none';
        document.getElementById('hcargo4').style.display = 'none';
        document.getElementById('motivo4').style.display = 'none';
        document.getElementById('dsn4').style.display = 'none';
        document.getElementById('dsd4').style.display = 'none';
        document.getElementById('dsdd4').style.display = 'none';
        document.getElementById('dsc4').style.display = 'none';
        document.getElementById('dsm4').style.display = 'none';
        document.getElementById('nm5').style.display = 'none';
        document.getElementById('dt5').style.display = 'none';
        document.getElementById('dtd5').style.display = 'none';
        document.getElementById('hcargo5').style.display = 'none';
        document.getElementById('motivo5').style.display = 'none';
        document.getElementById('dsn5').style.display = 'none';
        document.getElementById('dsd5').style.display = 'none';
        document.getElementById('dsdd5').style.display = 'none';
        document.getElementById('dsc5').style.display = 'none';
        document.getElementById('dsm5').style.display = 'none';

    
    }
    };