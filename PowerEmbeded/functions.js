function disable(radiobtn) //Desabilita os filtros de acordo com o relatorio
{
    switch(radiobtn.id)
    {
        case "1":
            document.getElementById("data_init").readOnly = false;
            document.getElementById("data_end").readOnly = false;
            break;
        
        case "2":
            document.getElementById("data_init").readOnly = false;
            document.getElementById("data_end").readOnly = false;
            break;
        case "3":
            document.getElementById("data_init").readOnly = false;
            document.getElementById("data_end").readOnly = false;
            break;
        case "4":
            document.getElementById("data_init").readOnly = false;
            document.getElementById("data_end").readOnly = false;
            break;
        default:
            document.getElementById("data_init").readOnly = false;
            document.getElementById("data_end").readOnly = false;
    }
}